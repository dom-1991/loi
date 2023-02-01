<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ReportPaymentType extends Enum
{
    const CASH = 1;
    const BANK = 2;

    public static function getLabel ()
    {
        return [
            self::CASH => 'Tiền mặt',
            self::BANK => 'Chuyển khoản',
        ];
    }
}
