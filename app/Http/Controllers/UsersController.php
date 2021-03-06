<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-06 16:34:54
 * @LastEditTime: 2021-03-06 17:45:44
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * 注册页
     * @return void
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * 用户个人信息
     * @param User $user
     * @return void
     */
     public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
