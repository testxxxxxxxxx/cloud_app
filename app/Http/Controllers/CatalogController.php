<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CatalogService;

class CatalogController extends Controller
{
    public function __construct(private CatalogService $catalogService) {
        $this->catalogService = $catalogService;
    }

}
