<?php
/**
 * OfferingItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Acronis\Cloud\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API v2 description for Multi-service Portal
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Acronis\Cloud\Client\Model\Tenants;

use Acronis\Cloud\Client\BaseModel;
/**
 * OfferingItem Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OfferingItem extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Tenants\OfferingItem';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'application_id' => 'string',
            'name' => 'string',
            'status' => 'int',
            'infra_id' => 'string',
            'quota' => '\Acronis\Cloud\Client\Model\OfferingItems\Quota'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'application_id' => null,
            'name' => null,
            'status' => 'int32',
            'infra_id' => null,
            'quota' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'application_id' => 'application_id',
            'name' => 'name',
            'status' => 'status',
            'infra_id' => 'infra_id',
            'quota' => 'quota'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'application_id' => 'setApplicationId',
            'name' => 'setName',
            'status' => 'setStatus',
            'infra_id' => 'setInfraId',
            'quota' => 'setQuota'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'application_id' => 'getApplicationId',
            'name' => 'getName',
            'status' => 'getStatus',
            'infra_id' => 'getInfraId',
            'quota' => 'getQuota'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'application_id' => 'hasApplicationId',
            'name' => 'hasName',
            'status' => 'hasStatus',
            'infra_id' => 'hasInfraId',
            'quota' => 'hasQuota'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'application_id' => 'validateApplicationId',
            'name' => 'validateName',
            'status' => 'validateStatus',
            'infra_id' => 'validateInfraId',
            'quota' => 'validateQuota'
        ];
    }

    

    

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!empty($this->validateApplicationId())) {
            $invalid_properties[] = $this->validateApplicationId();
        }
        if (!empty($this->validateName())) {
            $invalid_properties[] = $this->validateName();
        }
        if (!empty($this->validateStatus())) {
            $invalid_properties[] = $this->validateStatus();
        }
        if (!empty($this->validateInfraId())) {
            $invalid_properties[] = $this->validateInfraId();
        }
        if (!empty($this->validateQuota())) {
            $invalid_properties[] = $this->validateQuota();
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!empty($this->validateApplicationId())) {
            return false;
        }
        if (!empty($this->validateName())) {
            return false;
        }
        if (!empty($this->validateStatus())) {
            return false;
        }
        if (!empty($this->validateInfraId())) {
            return false;
        }
        if (!empty($this->validateQuota())) {
            return false;
        }
        return true;
    }


    /**
     * Gets application_id
     * @return string
     */
    public function getApplicationId()
    {
        return $this->offsetGet('application_id');
    }

    /**
     * Checks application_id
     * @return boolean
     */
    public function hasApplicationId()
    {
        return $this->offsetExists('application_id');
    }

    /**
     * Sets application_id
     * @param string $application_id
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        if ((strlen($application_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $application_id when calling OfferingItem., must be smaller than or equal to 36.');
        }
        if ((strlen($application_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $application_id when calling OfferingItem., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $application_id))) {
            throw new \InvalidArgumentException("invalid value for $application_id when calling OfferingItem., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('application_id', $application_id);

        return $this;
    }

    /**
     * Unset application_id
     */
    public function unsetApplicationId() {
        $this->offsetUnset('application_id');
    }

    /**
     * Valid application_id
     * @return array|boolean
     */
    public function validateApplicationId()
    {
        if (!$this->offsetExists('application_id')) {
            return "Property 'application_id' was not initialized.";
        }
            if ($this->offsetExists('application_id') && strlen($this->offsetGet('application_id')) > 36) {
                return "invalid value for 'application_id', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('application_id') && strlen($this->offsetGet('application_id')) < 36) {
                return "invalid value for 'application_id', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('application_id') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('application_id'))) {
                return "invalid value for 'application_id', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->offsetGet('name');
    }

    /**
     * Checks name
     * @return boolean
     */
    public function hasName()
    {
        return $this->offsetExists('name');
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->offsetSet('name', $name);

        return $this;
    }

    /**
     * Unset name
     */
    public function unsetName() {
        $this->offsetUnset('name');
    }

    /**
     * Valid name
     * @return array|boolean
     */
    public function validateName()
    {
        if (!$this->offsetExists('name')) {
            return "Property 'name' was not initialized.";
        }
        return false;
    }


    /**
     * Gets status
     * @return int
     */
    public function getStatus()
    {
        return $this->offsetGet('status');
    }

    /**
     * Checks status
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->offsetExists('status');
    }

    /**
     * Sets status
     * @param int $status Status of offering item: 1 - item turned on, 0 - off
     * @return $this
     */
    public function setStatus($status)
    {
        $this->offsetSet('status', $status);

        return $this;
    }

    /**
     * Unset status
     */
    public function unsetStatus() {
        $this->offsetUnset('status');
    }

    /**
     * Valid status
     * @return array|boolean
     */
    public function validateStatus()
    {
        if (!$this->offsetExists('status')) {
            return false;
        }
        return false;
    }


    /**
     * Gets infra_id
     * @return string
     */
    public function getInfraId()
    {
        return $this->offsetGet('infra_id');
    }

    /**
     * Checks infra_id
     * @return boolean
     */
    public function hasInfraId()
    {
        return $this->offsetExists('infra_id');
    }

    /**
     * Sets infra_id
     * @param string $infra_id
     * @return $this
     */
    public function setInfraId($infra_id)
    {
        if (!is_null($infra_id) && (strlen($infra_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $infra_id when calling OfferingItem., must be smaller than or equal to 36.');
        }
        if (!is_null($infra_id) && (strlen($infra_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $infra_id when calling OfferingItem., must be bigger than or equal to 36.');
        }
        if (!is_null($infra_id) && (!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $infra_id))) {
            throw new \InvalidArgumentException("invalid value for $infra_id when calling OfferingItem., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('infra_id', $infra_id);

        return $this;
    }

    /**
     * Unset infra_id
     */
    public function unsetInfraId() {
        $this->offsetUnset('infra_id');
    }

    /**
     * Valid infra_id
     * @return array|boolean
     */
    public function validateInfraId()
    {
        if (!$this->offsetExists('infra_id')) {
            return false;
        }
            if ($this->offsetExists('infra_id') && strlen($this->offsetGet('infra_id')) > 36) {
                return "invalid value for 'infra_id', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('infra_id') && strlen($this->offsetGet('infra_id')) < 36) {
                return "invalid value for 'infra_id', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('infra_id') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('infra_id'))) {
                return "invalid value for 'infra_id', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }


    /**
     * Gets quota
     * @return \Acronis\Cloud\Client\Model\OfferingItems\Quota
     */
    public function getQuota()
    {
        return $this->offsetGet('quota');
    }

    /**
     * Checks quota
     * @return boolean
     */
    public function hasQuota()
    {
        return $this->offsetExists('quota');
    }

    /**
     * Sets quota
     * @param \Acronis\Cloud\Client\Model\OfferingItems\Quota $quota
     * @return $this
     */
    public function setQuota($quota)
    {
        $this->offsetSet('quota', $quota);

        return $this;
    }

    /**
     * Unset quota
     */
    public function unsetQuota() {
        $this->offsetUnset('quota');
    }

    /**
     * Valid quota
     * @return array|boolean
     */
    public function validateQuota()
    {
        if (!$this->offsetExists('quota')) {
            return false;
        }
        return false;
    }

}

