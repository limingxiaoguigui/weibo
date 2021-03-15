<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-15 15:47:37
 * @LastEditTime: 2021-03-15 15:50:12
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::factory()->count(50)->create();
        $user = User::find(1);
        $user->name = 'LMG';
        $user->email = 'htyzhliminggui@163.com';
        $user->password =bcrypt('123456') ;
        $user->save();


    }
}
