<?php

namespace Suretly\LenderApi;

/**
 * @deprecated Do not use class Suretly. Will be removed in version v0.4. Use LenderManager.
 *
 * Class Suretly
 * @package Suretly\LenderApi
 */
class Suretly extends LenderManager
{
    /**
     * @deprecated Will be removed in version v0.4.
     * @param string $id
     * @param string $token
     * @return LenderManager
     */
    public static function ClientDemo($id, $token)
    {
        $server = 'develop';

        return new LenderManager(compact('id', 'token', 'server'));
    }

    /**
     * @deprecated Will be removed in version v0.4.
     * @param string $id
     * @param string $token
     * @return LenderManager
     */
    public static function ClientProduction($id, $token)
    {
        $server = 'api';

        return new LenderManager(compact('id', 'token', 'server'));
    }
}
