<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Project;
use \App\maklonProject;
use Auth;
use \App\Maklon;
use DB;
use Mail;
use App\Mail\ApproveProject;
use App\User;


class StatusController extends Controller
{
    public function holdProject($id)
    {
        $project = Project::findOrFail($id);

        $project->update([
            'status_project' => 1,
        ]);

        return redirect('/dashboard');
    }

    public function unholdProject($id)
    {
        $project = Project::findOrFail($id);

        $project->update([
            'status_project' => 0,
        ]);

        return redirect('/hold');

    }

    public function dropProject($id)
    {
        $project = Project::findOrFail($id);

        $project->update([
            'status_project' => 2,
        ]);

        return redirect('/dashboard');
    }

    public function undropProject($id)
    {
        $project = Project::findOrFail($id);

        $project->update([
            'status_project' => 2,
        ]);

        return redirect('/inactive');
    }

    public function approveProject($id)
    {
        $maklon_project = maklonProject::findOrFail($id);
        $maklon_project->update([
            'status_approval' => 2,
        ]);

        Mail::to(auth::user()->email)->send(new ApproveProject());
        return redirect()->back()->with('Success', 'Notifikasi berhasil dikirim');


// dd($maklon_project);
        return redirect()->back()->with('sukses', 'Project telah di Approve');
    }
    public function notapproveProject($id, Request $request)
    {
        $maklon_project = maklonProject::findOrFail($id);

        $maklon_project->update([
            'keterangan' => $request->keterangan,
            'status_approval' => 1,
        ]);

        return redirect()->back();
    }

    public function approvePenawaran($id)
    {
        $maklon_project = maklonProject::findOrFail($id);
        $maklon_project->update([
            'status_harga' => 2,
        ]);



// dd($maklon_project);
        return redirect()->back()->with('sukses', 'Project telah di Approve');
    }


    public function approveFoodsafe($id)
    {
        $maklon_project = maklonProject::findOrFail($id);
        $maklon_project->update([
            'status_food' => 2,
        ]);



// dd($maklon_project);
        return redirect()->back()->with('sukses', 'Project telah di Approve');
    }

    public function projectDone($id)
    {
        $maklon_project = maklonProject::findOrFail($id);
        $maklon_project->update([
            'status_kontrak' => 2,
        ]);



// dd($maklon_project);
        return redirect()->back()->with('sukses', 'Project telah di Approve');
    }
}
