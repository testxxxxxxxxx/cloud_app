<?php
declare(strict_types = 1);

namespace App\Services;

use App\Models\File;

class FileService {
    
    public function get(int $id): string {
        $file = File::find($id);

        return $file ? $file->name != "": "";
    }
    public function getAll(): array {
        $files = File::get();

        return $files ? $files->toArray() : [];
    }
    public function create(string $name, string $content, string $extension, int $permissionId, int $ownerId, int $catalogId): bool {
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

}