<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-15 14:40:51
 * @LastEditTime: 2021-03-15 15:05:02
 */

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    /**
     * 更新操作
     * @param \App\Models\User $currentUser
     * @param \App\Models\User $user
     * @return void
     */
    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }
}
