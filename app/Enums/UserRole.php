<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const EMPLOYEE =   1;
    const ADMIN =   2;
    const SUPER_ADMIN = 3;

    public static function getLabel()
    {
        return [
            self::EMPLOYEE => 'Nhân viên',
            self::ADMIN => 'Quản lý',
            self::SUPER_ADMIN => 'Siêu quản lý',
        ];
    }
}
