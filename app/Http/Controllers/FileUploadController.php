<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File as FileFacade;

class FileUploadController extends Controller
{
    function index() {
        $files = File::all(); // Fetch all files from the database
        return view('file-upload', compact('files'));
    }

    function store(Request $request) {
        $request->validate([
            'file' => ['required', 'image']
        ]);
        $file = $request->file('file');
        $customName = 'laravel_' . Str::uuid() . '.' . $file->getClientOriginalExtension();

        // Store the file in the 'uploads' directory with the custom name
        $file->storeAs('/', $customName, 'dir_public');

        // Save file information to the database
        $fileStore = new File();
        $fileStore->file_path = '/uploads/' . $customName;
        $fileStore->save();

        return redirect()->back()->with('success', 'File uploaded successfully!');
    }

    function destroy($id) {
        $file = File::find($id);
        if ($file) {
            FileFacade::delete(public_path($file->file_path)); // Delete the file from the public directory
            $file->delete();
            return redirect()->back()->with('success', 'File deleted successfully!');
        }
        return redirect()->back()->with('error', 'File not found.');
    }

}
