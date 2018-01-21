<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\File as ProjectFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\FileuploadRequest;
use App\Interfaces\FileEloquentInterface;

/**
 * Class FileuploadController
 */
class FileuploadController extends Controller
{
    /**
     * @var FileEloquentInterface
     */
    protected $files;

    /**
     * FileuploadController constructor.
     *
     * @param FileEloquentInterface $files files
     */
    public function __construct(FileEloquentInterface $files)
    {
        $this->files = $files;
    }

    /**
     * Store uploaded file in storage folder
     *
     * @param FileuploadRequest $request request
     *
     * @return bool
     */
    public function store(FileuploadRequest $request)
    {
        $file = Request::file('file');
        $extension = $file->getClientOriginalExtension();

        Storage::disk('local')
            ->put($file->getFilename().'.'.$extension,  File::get($file));

        $this->files->store(
            [
                "project_id" => $request->prj_id,
                "mime" => $file->getClientMimeType(),
                "original_name" => $file->getClientOriginalName(),
                "fileName" => $file->getFilename().'.'.$extension
            ]
        );

        return redirect()->back();
    }

    /**
     * Download File
     *
     * @param string $fileName filename
     *
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function downloadFile($fileName)
    {
        return response()->download(storage_path(). '/app/'. $fileName);
    }

    /**
     * Show the view all files view
     *
     * @return \Illuminate\Http\Response
     */
    public function viewAllFiles()
    {
        $files = ProjectFile::with('project')->get();

        return view('projects.showAllFiles', compact('files'));
    }
}
