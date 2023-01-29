<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Enums\UserStatus;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User::where('id', '>', 0)->delete();
        $userData = [
            [
                'name' => 'Admin',
                'account' => 'admin',
                'password' => Hash::make('123456'),
                'role' => UserRole::ADMIN,
                'date_of_birth' => null,
                'person_id' => null,
                'avatar' => null,
                'status' => UserStatus::ACTIVE,
                'salary' => 0,
            ],
            [
                'name' => 'Hải',
                'account' => 'nv1',
                'password' => Hash::make('123456Aa'),
                'role' => UserRole::EMPLOYEE,
                'date_of_birth' => null,
                'person_id' => null,
                'avatar' => null,
                'status' => UserStatus::ACTIVE,
                'salary' => 7500000,
            ],
            [
                'name' => 'Châu',
                'account' => 'nv2',
                'password' => Hash::make('123456aA'),
                'role' => UserRole::EMPLOYEE,
                'date_of_birth' => null,
                'person_id' => null,
                'avatar' => null,
                'status' => UserStatus::ACTIVE,
                'salary' => 7000000,
            ],
            [
                'name' => 'Tuấn Anh',
                'account' => 'nv3',
                'password' => Hash::make('123456aAa'),
                'role' => UserRole::EMPLOYEE,
                'date_of_birth' => null,
                'person_id' => null,
                'avatar' => null,
                'status' => UserStatus::ACTIVE,
                'salary' => 6000000,
            ],
            [
                'name' => 'Công an',
                'account' => 'ca1',
                'password' => Hash::make('123456'),
                'role' => UserRole::POLICE,
                'date_of_birth' => null,
                'person_id' => null,
                'avatar' => null,
                'status' => UserStatus::ACTIVE,
                'salary' => 500000,
            ],
            [
                'name' => 'Thuê quán',
                'account' => 'tq1',
                'password' => Hash::make('123456'),
                'role' => UserRole::RENT_BUILDING,
                'date_of_birth' => null,
                'person_id' => null,
                'avatar' => null,
                'status' => UserStatus::ACTIVE,
                'salary' => 14000000,
            ],
        ];
        User::insert($userData);
    }
}
