<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IDRequest;
use App\Http\Requests\FileRequest;
use App\Services\FileService;
use Illuminate\Contracts\View\View;

class FileController extends Controller
{
    public function __construct(private FileService $fileService) {
        $this->fileService = $fileService;
    }
    public function index(FileRequest $fileRequest): View {
        $id = $fileRequest->input("id");
        $file = $this->fileService->getById($id);
        $name = $file->name;
        $content = $file->content;
        $extension = $file->extension;

        return view("index", []);
    }
}
