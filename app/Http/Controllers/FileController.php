<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FileService;

class FileController extends Controller
{
    public function __construct(private FileService $fileService) {
        $this->fileService = $fileService;
    }
    public function index(): string {

        return "siema";
    }
}
