<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = ['superadministrator', 'administratior', 'bloger'];
        foreach ($roles as $role) {
          DB::table('roles')->insert(['name' => $role, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }
    }
}
