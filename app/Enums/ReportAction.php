<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ReportAction extends Enum
{
    const ADD = 1;
    const SUB = 2;

    public static function getLabel ()
    {
        return [
            self::ADD => 'Doanh thu',
            self::SUB => 'Chi tiêu',
        ];
    }
}
