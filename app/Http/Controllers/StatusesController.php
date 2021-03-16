<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-16 18:05:11
 * @LastEditTime: 2021-03-16 18:13:09
 */

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class StatusesController extends Controller
{

    /**
     * 初始化
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 发布微博
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140',
        ]);

        Auth::user()->statuses()->create([
            'content' => $request['content'],
        ]);

        session()->flash('success', '发布成功！');
        return redirect()->back();
    }
}
