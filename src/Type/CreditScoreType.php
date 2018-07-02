<?php

namespace Suretly\LenderApi\Type;

/**
 * Class CreditScoreType
 * @package Suretly\LenderApi\Type
 */
class CreditScoreType extends AbstractEnumType
{
    const DEFAULT_VALIUE = 'default';
    const K24 = 'k24';
    const ELOAN = 'eloan';
    const BISTRODENGI = 'bistrodengi';

    public static $choices = [
        self::DEFAULT_VALIUE => 'Скоринг не используется или не соответствует нижеприведенным',
        self::K24 => 'Скоринговая модель системы K24',
        self::ELOAN => 'Скоринговая модель системы Eloan',
        self::BISTRODENGI => 'Скоринговая модель системы Быстроденьги',
    ];
}