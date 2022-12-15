<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{

public function run()
    {
        $permissions = [
        'Manage-service',
        'Manage-order',
        'Manage-user',
        'Manage-role',
        'order-list',
        'order-create',
        'order-edit',
        'order-delete',
        'order-view',
        'orders-view',
        'order-status',
        'role-list',
        'role-create',
        'role-edit',
        'role-delete',
        'role-view',
        'role-activate',
        'service-create',
        'service-edit',
        'service-update render',
        'service-list',
        'service-add',
        'service-delete',
        
        ];
        foreach ($permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }
    }
}
