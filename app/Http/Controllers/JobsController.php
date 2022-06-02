<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Organizacii;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Jobs;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class JobsController extends Controller
{
    public function submit(ContactRequest $req)
    {

    }

    public function appcreate(Request $request){

        $new_app = new Applications();

        $new_app->id_ap = Str::uuid();
        $new_app->name = $request->name;
        $new_app->fam = $request->fam;
        $new_app->otch = $request->otch;
        $new_app->email = $request->email;
        if (empty($request->phone)){
            $new_app->phone = '';
        }
        else{
            $new_app->phone = $request->phone;
        }
        $new_app->position_app = $request->pos;

        $new_app->save();

        return redirect('/')->withSuccess('Заявка успешно отправлена!');

    }

    public function allJobs()
    {
        return view('jobs');
    }

    public function sphereJobs($sphere)
    {
        $jobs = new Jobs;
        $positions = $jobs->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('organizaciis.confirm', '=', '1')->where('jobs.sphere', $sphere)->get()->unique('position');

        $ampos = [];
        $amorg = [];

        foreach ($positions as $pos){
            $posit = $pos->position;
            $ampos[] = $jobs->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('organizaciis.confirm', '=', '1')->where('position', '=', $posit)->get()->count();
            $amorg[] = $jobs->select('name_org')->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('organizaciis.confirm', '=', '1')->where('position', '=', $posit)->get()->unique('name_org');
        }
        return view('sphere-job', ['data' => $positions, 'ampos' => $ampos, 'amorg' => $amorg]);
    }

    public function posJobs($pos)
    {
        $jobs = new Jobs;
        return view('pos-jobs', ['data' => $jobs->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('organizaciis.confirm', '=', '1')->where('position', '=', $pos)->get()]);
    }

    public function oneJobs($id_job)
    {
        $jobs = new Jobs;
        return view('one-jobs', ['data' => $jobs->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('id_job', '=', $id_job)->where('organizaciis.confirm', '=', '1')->get()]);
    }

    public function jobForm($id_job)
    {
        $jobs = new Jobs;
        return view('contacts', ['data' => $jobs->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('id_job', '=', $id_job)->where('organizaciis.confirm', '=', '1')->get()]);
    }

    public function orgJobs($id_org)
    {
        $organizations = new Organizacii;
        $jobs = new Jobs;
        //$organizasiay->orderBy('created_at', 'desc')->take(2)->get()
        return view('org-one', [
            'data' => $jobs->select('jobs.id_job', 'jobs.position', 'jobs.bonuses', 'jobs.min_work', 'jobs.amount_jobs', 'jobs.id_org', 'organizaciis.id_org', 'organizaciis.name_org', 'organizaciis.contacts', 'organizaciis.description', 'organizaciis.logo', 'directs.name_dir')->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('organizaciis.id_org', '=', $id_org)->get(),
            'organizations' => $organizations->where('id_org', '=', $id_org)->where('organizaciis.confirm', '=', '1')->get(),
        ]);
    }
}
