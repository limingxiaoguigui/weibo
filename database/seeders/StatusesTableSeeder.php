<?php
/*
 * @Description:
 * @version:
 * @Author: lmg
 * @Date: 2021-03-16 18:01:06
 * @LastEditTime: 2021-03-16 18:02:15
 */

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::factory()->count(100)->create();

    }
}
