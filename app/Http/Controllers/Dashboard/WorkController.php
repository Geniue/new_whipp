<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\WorkModel;
use App\Models\FilesModel;

class WorkController extends Controller
{

    public function index($id)
    {
        $user = auth()->user();
        return view('dashboard.user.upload', compact('user'));
    }

    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'files.*' => 'required|file|mimes:jpeg,png,jpg,doc,pdf,txt,docx,gif,rar,zip',
        ]);

        // dd($validatedData);

        $work = new WorkModel();
        $work->title = $validatedData['title'];
        $work->description = $validatedData['description'];
        $work->user_id = $id; // Assuming the user is authenticated
        $work->save();

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('public/uploads');

                $fileModel = new FilesModel();
                $fileModel->file = $path;
                $fileModel->work_id = $work->id;
                $fileModel->save();
            }
        }

        return redirect()->route('user.downloads', $work->user_id)->with('success', 'Work saved successfully!');
    }


    public function view_work($id)
    {
        $user = auth()->user();
        
        $work = WorkModel::where('id', $id)->get()[0] ?? abort(404);

        $files = $work->files;

        return view('dashboard.user.work', compact('user', 'files', 'work'));
    }


    public function listDownloads($id)
    {
        $user = auth()->user();
        // dd($id);

        $work = WorkModel::where('user_id', $id)->orderBy('created_at', 'DESC')->get();
        // dd($id, $work);
        return view('dashboard.user.list_downloads', compact('user', 'work'));

    }
}
