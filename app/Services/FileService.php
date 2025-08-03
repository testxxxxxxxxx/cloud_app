<?php
declare(strict_types = 1);

namespace App\Services;

use App\Models\File;
use Illuminate\Database\Eloquent\Collection;

class FileService {
    
    public function getById(int $id): File {
        //get file by id
        $file = File::findOrFail($id);

        return $file;
    }
    public function getAll(): Collection { 
        //get all files
        $files = File::get();

        return $files;
    }
    public function create(string $name, string $content, string $extension, int $permissionId, int $ownerId, int $catalogId): bool {
        //creating file
        $fileIsCreated = File::create([
            "name" => $name,
            "content" => $content,
            "extension" => $extension,
            "permission_id" => $permissionId,
            "owner_id" => $ownerId,
            "catalog_id" => $catalogId
        ]);

        return true ? $fileIsCreated : false;
    }
    public function update(int $id, string $name, string $content, string $extension, int $permissionId, int $ownerId, int $catalogId): bool {
        //edit file
        $fileIsUpdated = File::where('id', $id)->update([
            "name" => $name,
            "content" => $content,
            "extenstion" => $extension,
            "permission_id" => $permissionId,
            "owner_id" => $ownerId,
            "catalog_id" => $catalogId
        ]);

        return $fileIsUpdated;
    }
    public function delete(int $id): bool {
        //delete file
        $fileIsDeleted = File::where("id", $id)->delete();

        return $fileIsDeleted;
    }
}