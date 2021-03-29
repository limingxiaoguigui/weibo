<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-29 20:14:15
 * @LastEditTime: 2021-03-29 20:25:04
 */

namespace App\Policies;

use App\Models\Status;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }
}
