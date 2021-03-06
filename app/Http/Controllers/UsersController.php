<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-06 16:34:54
 * @LastEditTime: 2021-03-06 16:35:25
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
