<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Project;
use \App\maklonProject;
use Auth;
use \App\Maklon;
use \App\food_safety;
use DB;
use Mail;
use App\Mail\ApproveProject;
use App\User;
use App\Notifications\NotifyPkpApprove;
use App\Notifications\NotifyPkpReject;
use App\Notifications\NotifyPenawaranApproved;





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

    public function approveProject(Request $request, $id)
    {
        // dd($request->keterangan);
        $maklon_project = maklonProject::findOrFail($id);
        $timeStamp = date("Y-m-d H:i:s");
        $maklon_project->update([
            'status_approval' => 2,
            'project_approve'=>$timeStamp,
            'keterangan' => $request->keterangan,

            ]);

            $maklon_project->email = auth::user()->email;
            $maklon_project->notify(new NotifyPkpApprove($maklon_project));


        return redirect()->back()->with('Success', 'Notifikasi berhasil dikirim');


    }
    public function notapproveProject($id, Request $request)
    {
        $maklon_project = maklonProject::findOrFail($id);
        $maklon_project->update([
            'keterangan' => $request->keterangan,
            'status_approval' => 1,
        ]);

        $maklon_project->email = auth::user()->email;
        $maklon_project->notify(new NotifyPkpReject($maklon_project));

        return redirect()->back();
    }

    public function approvePenawaran($id)
    {
        $maklon_project = maklonProject::findOrFail($id);
        $timeStamp = date("Y-m-d H:i:s");

        $maklon_project->update([
            'status_harga' => 2,
            "penawaran_approve"=> $timeStamp,

        ]);
        $maklon_project->email = auth::user()->email;
        $maklon_project->notify(new NotifyPenawaranApproved($maklon_project));




// dd($maklon_project);
        return redirect()->back()->with('sukses', 'Project telah di Approve');
    }


    public function approveFoodsafe(Request $request ,$id)
    {
        $maklon_project = maklonProject::findOrFail($id);
        $food = food_safety::findOrFail($id);

        $timeStamp = date("Y-m-d H:i:s");


        $maklon_project->status_food = $request->id;
        // $maklon_project->food_approve=>$request->$timeStamp;
        $maklon_project->save();

          $food->note = $request->note;
          $food->save();


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
    public function final_Trial($id)
    {
        $maklon_project = maklonProject::findOrFail($id);
        $maklon_project->update([
            'status_trial' => 2,

        ]);
        return redirect()->back()->with('sukses', 'Project telah di Approve');

}


public function approveLegal($id)
{
    $maklon_project = maklonProject::findOrFail($id);
    $timeStamp = date("Y-m-d H:i:s");

    $maklon_project->update([
        'status_dokumen' => 2,
    ]);



    return redirect()->back()->with('sukses', 'Project telah di Approve');

}
}
