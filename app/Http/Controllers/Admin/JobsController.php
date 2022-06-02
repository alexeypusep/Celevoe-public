<?php

namespace App\Http\Controllers\Admin;

use App\Models\Direct;
use App\Models\Jobs;
use App\Http\Controllers\Controller;
use App\Models\Organizacii;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Jobs::orderBy('created_at', 'desc')->get();

        return view('admin.jobs.index', [
            'jobs' => $jobs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organizacii::orderBy('created_at', 'desc')->get();
        $directions = Direct::orderBy('name_dir', 'asc')->get();

        return view('admin.jobs.create', [
            'organizations' => $organizations,
            'directions' => $directions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_job = new Jobs();

        $new_job->id_job = Str::uuid();
        $new_job->id_org = $request->id_org;
        $new_job->id_direct = $request->id_direct;
        $new_job->sphere = $request->spher;
        $new_job->profil = $request->profil;
        $new_job->position = $request->position;
        $new_job->bonuses = $request->bonuses;
        $new_job->min_work = $request->min_work;
        $new_job->amount_jobs = $request->amount_jobs;

        $new_job->save();

        return redirect()->back()->withSuccess('Вакансия успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs, $id)
    {
        $organizations = Organizacii::orderBy('created_at', 'desc')->get();
        $directions = Direct::orderBy('created_at', 'desc')->get();

        return view('admin.jobs.edit', [
            'jobs' => $jobs->where('id_job', '=', $id)->get(),
            'organizations' => $organizations,
            'directions' => $directions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs, $id)
    {
        $jobs
            ->where('id_job', '=', $id)
            ->update(['id_org'=>$request->id_org, 'id_direct'=>$request->id_direct, 'sphere'=>$request->spher, 'position'=>$request->position, 'profil'=>$request->profil, 'bonuses'=>$request->bonuses, 'min_work'=>$request->min_work, 'amount_jobs'=>$request->amount_jobs,]);

        return redirect()->back()->withSuccess('Вакансия успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $jobs, $id)
    {
        $jobs->where('id_job', '=', $id)->delete();

        return redirect()->back()->withSuccess('Вакансия успешно удалена!');
    }
}
