<?php

declare(strict_types = 1);

namespace App\Services;

use App\Models\Permission;

class PermissionService {

    public function getName(int $id): string {
        $permission = Permission::findOrFail($id);

        return $permission ? $permission->name:"";
    } 
}