<?php

namespace Suretly\LenderApi\Config;

/**
 * Class Config
 * @package Suretly\LenderApi\Config
 */
final class Config implements ConfigInterface
{
    const SDK_NAME = 'lenderSDK-PHP7';
    const VERSION = 'version';

    public static $VERSIONS = ['v2'];
    public static $SDK_VERSIONS = ['v0.2', 'v0.3', 'v0.4'];

    /**
     * @var string $sdkVersion SDK version
     */
    private $sdkVersion = 'v0.4';

    /**
     * @var string $version API version
     */
    private $version = 'v2';

    /**
     * @var string $scheme Scheme
     */
    private $scheme = 'https';

    /**
     * @var string $host Host
     */
    private $host;

    /**
     * @var string $port Port
     */
    private $port = '3000';

    /**
     * @var string $id Client ID
     */
    private $id;

    /**
     * @var string $token Client token
     */
    private $token;

    /**
     * Config constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        if (isset($config['id'])) {
            $this->id = $config['id'];
        }

        if (isset($config['token'])) {
            $this->token = $config['token'];
        }

        if (isset($config['sdk'])) {
            if (in_array($config['sdk'], self::$SDK_VERSIONS)) {
                $this->sdkVersion = $config['sdk'];
            } else {
                throw new \InvalidArgumentException('You must use one of the SDK versions: ' . implode(self::$VERSIONS));
            }
        }

        if (isset($config[self::VERSION])) {
            if (in_array($config[self::VERSION], self::$VERSIONS)) {
                $this->version = $config[self::VERSION];
            } else {
                throw new \InvalidArgumentException('You must use one of the versions: ' . implode(self::$VERSIONS));
            }
        }

        if (!isset($config['server'])) {
            $this->host = 'sandbox.suretly.io';
        } else {
            $this->host = $config['server'] . '.suretly.io';
        }
    }

    /**
     * @inheritdoc
     */
    public function getApiURL()
    {
        return $this->scheme . '://' . $this->host . ':' . $this->port . '/' . $this->version;
    }

    /**
     * @inheritdoc
     */
    public function getAuthToken()
    {
        $randomID = bin2hex(random_bytes(4));
        $time = time();

        return $this->id . '-' . $randomID . '-' . $time . '-' .  hash('sha256', $randomID . $this->token . $time);
    }

    /**
     * @inheritdoc
     */
    public function getUserAgent()
    {
        return  self::SDK_NAME . '/' . $this->getSdkVersion();
    }

    /**
     * @return string
     */
    public function getSdkVersion()
    {
        return $this->sdkVersion;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}