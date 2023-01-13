<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ReportType extends Enum
{
    const FOOD = 1;
    const ITEMS = 2;
    const SALARY = 3;
    const OTHER = 99;

    public static function getLabel ()
    {
        return [
            self::FOOD => 'Thực phẩm',
            self::ITEMS => 'Đồ dùng',
            self::SALARY => 'Lương/Ứng lương',
            self::OTHER => 'Khác',
        ];
    }
}
