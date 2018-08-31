<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $password = bcrypt('123456');

        User::insert([[
            'email' => 'ibrain090@gmail.com',
            'name' => 'А. Ибрагим',
            'avatar' => 'img/ibragim_aziev.jpg',
            'position' => 1,
            'payed' => true,
            'password' => $password,
            'is_admin' => true,
        ], [
            'email' => null,
            'name' => 'Ч. Ахмед',
            'avatar' => 'img/ahmed_chergizov.jpg',
            'position' => 2,
            'payed' => false,
            'password' => $password,
            'is_admin' => false,
        ], [
            'email' => null,
            'name' => 'А. Хаваж',
            'avatar' => 'img/khavazh_archakov.jpg',
            'position' => 3,
            'payed' => false,
            'password' => $password,
            'is_admin' => false,
        ], [
            'email' => null,
            'name' => 'Т. Ахмед',
            'avatar' => 'img/ahmed_timurziev.jpg',
            'position' => 4,
            'payed' => false,
            'password' => $password,
            'is_admin' => false,
        ], [
            'email' => null,
            'name' => 'Т. Яхья',
            'avatar' => '',
            'position' => 5,
            'payed' => false,
            'password' => $password,
            'is_admin' => false,
        ], [
            'email' => null,
            'name' => 'М. Саид',
            'avatar' => '',
            'position' => 8,
            'payed' => false,
            'password' => $password,
            'is_admin' => false,
        ], [
            'email' => null,
            'name' => 'А. Берд',
            'avatar' => 'img/berd_aziev.jpg',
            'position' => 10,
            'payed' => true,
            'password' => $password,
            'is_admin' => false,
        ], [
            'email' => null,
            'name' => 'А. Микаил',
            'avatar' => 'img/mikail_aziev.jpg',
            'position' => 11,
            'payed' => false,
            'password' => $password,
            'is_admin' => false,
        ], [
            'email' => null,
            'name' => 'Д. Абдулла',
            'avatar' => '',
            'position' => 12,
            'payed' => false,
            'password' => $password,
            'is_admin' => false,
        ]]);
    }
}
