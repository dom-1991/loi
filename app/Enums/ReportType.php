<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ReportType extends Enum
{
    const FOOD = 1;
    const ITEMS = 2;
    const SALARY = 3;
    const POLICE = 4;
    const REPAIR = 5;
    const EAT = 6;
    const OTHER = 99;

    public static function getLabel ()
    {
        return [
            self::FOOD => 'Thực phẩm',
            self::EAT => 'Tiền ăn',
            self::ITEMS => 'Đồ dùng',
            self::REPAIR => 'Sửa chữa',
            self::SALARY => 'Lương/Ứng lương',
            self::POLICE => 'Công an',
            self::OTHER => 'Khác',
        ];
    }
}
