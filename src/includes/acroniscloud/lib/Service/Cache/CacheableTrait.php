<?php
/**
 * @Copyright © 2002-2019 Acronis International GmbH. All rights reserved
 */

namespace AcronisCloud\Service\Cache;

use AcronisCloud\Service\Locator;
use AcronisCloud\Service\Logger\LoggerFactory;
use AcronisCloud\Util\Func;
use AcronisCloud\Util\Str;
use Monolog\Logger;

/**
 * Trait CacheableTrait
 * Use CacheableTrait in cases you want to fetch/build some object identified by $objectKey only one time and then
 * return it from cache every time when possible
 * $this->fromCache(function() use ($anyData) { return $this->veryExpensiveFetchRequest($objectKey); }, objectKey,
 * [force]); If you want to be able to fallback to fetching/building object every time, pass last parameter as true
 *
 * @package AcronisCloud\Service\Cache
 */
trait CacheableTrait
{
    /**
     * @param callable $method
     * @param int|null $ttl
     * @param bool $refreshTtl
     * @param string $objectId
     * @param bool $force
     * @return mixed
     */
    protected function fromCache(callable $method, $ttl = null, $refreshTtl = false, $objectId = '', $force = false)
    {
        $callerName = Func::getCallerName();
        $objectId = $this->buildCacheableObjectKey($callerName, $objectId);

        try {
            if (!$force && $this->hasCacheableStoredObject($objectId)) {
                return $this->getCacheableStoredObject($objectId, $ttl, $refreshTtl);
            }
        } catch (\Exception $e) {
            $this->getLoggerInstance()->error(Str::format(
                'Unable to fetch object with id "%s" from cache. Error: %s',
                $objectId, $e->getMessage()
            ));

            return $method();
        }

        $object = $method();
        $this->storeCacheableObject($objectId, $object, $ttl);

        return $object;
    }

    /**
     * @param int|null $ttl
     * @param string $objectId
     * @param mixed $value
     */
    private function storeCacheableObject($objectId, $value, $ttl)
    {
        $this->getCacheInstance()->set($objectId, $value, $ttl);
    }

    /**
     * @param string $objectId
     * @param int|null
     * @param bool $refreshTtl
     * @return mixed
     */
    private function getCacheableStoredObject($objectId, $ttl, $refreshTtl)
    {
        $result = $this->getCacheInstance()->get($objectId);

        if ($refreshTtl && $this->getCacheInstance()->has($objectId)) {
            $this->getCacheInstance()->refresh($objectId, $ttl);
        }

        return $result;
    }

    /**
     * @param string $objectId
     * @return bool
     */
    private function hasCacheableStoredObject($objectId)
    {
        return $this->getCacheInstance()->has($objectId);
    }

    /**
     * @param string $method
     * @param string $objectId
     * @return string
     */
    private function buildCacheableObjectKey($method, $objectId)
    {
        return implode('|', [$method, $objectId]);
    }

    /**
     * @return CacheInterface
     */
    private function getCacheInstance()
    {
        return Locator::getInstance()->get(CacheFactory::NAME);
    }

    /**
     * @return Logger
     */
    private function getLoggerInstance()
    {
        return Locator::getInstance()->get(LoggerFactory::NAME);
    }
}