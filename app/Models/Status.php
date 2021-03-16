<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-16 17:36:50
 * @LastEditTime: 2021-03-16 18:13:47
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    /**
     * 一条微博属于一个用户
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
