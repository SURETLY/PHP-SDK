<?php

namespace Suretly\LenderApi\Http;

use GuzzleHttp\Client;
use Suretly\LenderApi\Config\Config;
use Suretly\LenderApi\Exception\ResponseErrorException;

/**
 * Interface HttpClientInterface
 * @package Suretly\LenderApi\Http
 */
interface HttpClientInterface
{
    /**
     * @param string $uri
     * @param array $params
     * @return mixed
     * @throws ResponseErrorException
     */
    public function get($uri, array $params);

    /**
     * @param string $uri
     * @param array $params
     * @return mixed
     * @throws ResponseErrorException
     */
    public function post($uri, array $params);

    /**
     * @return Config
     */
    public function getConfig();

    /**
     * @deprecated Will be removed in version v0.4.
     * @return Client
     */
    public function getClient();
}