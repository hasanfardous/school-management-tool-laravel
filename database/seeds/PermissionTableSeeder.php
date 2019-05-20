<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
        	'can_add_attendance',			//Teacher role
        	'can_view_child_profile',		//Parent role
        	'can_view_child_fees',			//Parent role
        	'can_view_child_attendances',	//Parent role
        	'can_pay_fees',					//Student role
        	'can_view_class_routine',		//Student role
        	'can_view_class_attendances',	//Student role
        ];

        foreach ($permissions as $permission) {
        	Permission::create(['name' => $permission]);
        }
    }
}
