<?php
declare(strict_types = 1);

namespace App\Services;

use App\Models\Catalog;
use Illuminate\Database\Eloquent\Collection;

class CatalogService {

    public function getById(int $id): Catalog {
        //get catalog by id
        $catalog = Catalog::findOrFail($id);

        return $catalog;
    }
    public function getAll(): Collection {
        //get all catalogs
        $catalog = Catalog::get();

        return $catalog;
    }
    public function create(string $name, int $permissionId, int $ownerId): bool {
        //creating catalog
        $catalogIsCreated = Catalog::create([
            "name" => $name,
            "permissionId" => $permissionId,
            "ownerId" => $ownerId
        ]);

        return true ? $catalogIsCreated : false;
    }
    public function update(int $id, string $name, int $permissionId, int $ownerId): bool {
        //edit catalog
        $catalogIsUpdated = Catalog::where("id", $id)->update([
            "name" => $name,
            "permissionId" => $permissionId,
            "owner_id" => $ownerId 
        ]);

        return $catalogIsUpdated;
    }
    public function delete(int $id): bool {
        //delete catalog
        $catalogIsDeleted = Catalog::where("id", $id)->delete();

        return $catalogIsDeleted;
    } 
};