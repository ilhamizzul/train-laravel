<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    function index() {
        $files = File::all(); // Fetch all files from the database
        return view('file-upload', compact('files'));
    }

    function store(Request $request) {
        $file = $request->file('file')->store('/', 'dir_public');
        $fileStore = new File();
        $fileStore->file_path = '/uploads/'.$file;
        $fileStore->save();

        //dd("stored"); // Debugging line to check the file path

        // Save file information to the database if needed
        // File::create(['file_path' => $path]);

        return redirect()->back()->with('success', 'File uploaded successfully!');
    }

    function destroy($id) {
        $file = File::find($id);
        if ($file) {
            Storage::disk('dir_public')->delete(str_replace('/uploads/', '', $file->file_path));
            $file->delete();
            return redirect()->back()->with('success', 'File deleted successfully!');
        }
        return redirect()->back()->with('error', 'File not found.');
    }

}
