<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function show() 
    {
        $user           = new User;
        $user->name     = 'henry.lee';
        $user->email    = 'henryleeworld@gmail.com';
        $user->password = Hash::make('password');
        $user->address  = [
            'road'     => '信義路五段7號',
            'district' => '台北市信義區',
            'zip_code' => '110',
        ];
        $user->save();
        $residents = User::where('address->zip_code', '110')->get();
        echo '查詢郵遞區號是 110 的使用者如下：' . PHP_EOL;
        foreach ($residents as $resident) {
            echo '姓名：' .  $resident->name . PHP_EOL;
        }
    }
}
