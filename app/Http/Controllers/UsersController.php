<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-06 16:34:54
 * @LastEditTime: 2021-03-10 11:52:42
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

    /**
     * 用户创建
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:users|max:50',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed|min:6'
        ])

    }
}
