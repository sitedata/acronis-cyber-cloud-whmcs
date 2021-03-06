<?php

/**
 * @Copyright © 2003-2019 Acronis International GmbH. This source code is distributed under MIT software license.
 */

namespace AcronisCloud\Service\Config;

class ConfigCloudApiSettingsTest extends ConfigSectionTest
{
    protected $configData = [
        'cloud_api' => [
            'verify_ssl' => false,
            'access_token_ttl' => 3600,
        ],
    ];

    public function testGetVerifySsl()
    {
        $this->assertEquals(false, $this->getConfig()->getCloudApiSettings()->getVerifySsl());
    }

    public function testGetAccessTokenTtl()
    {
        $this->assertEquals(3600, $this->getConfig()->getCloudApiSettings()->getAccessTokenTtl());
    }

    public function testDefaultValues()
    {
        $this->setupConfigData([]);
        $this->assertEquals(true, $this->getConfig()->getCloudApiSettings()->getVerifySsl());
        $this->assertEquals(7200, $this->getConfig()->getCloudApiSettings()->getAccessTokenTtl());
    }
}