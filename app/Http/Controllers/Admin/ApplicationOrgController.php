<?php

namespace App\Http\Controllers\Admin;

use App\Models\ApplicationsOrg;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApplicationOrgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = ApplicationsOrg::orderBy('status', 'asc')->get();

        return view('admin.applicationsOrg.index', [
            'apps' => $apps,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_appOrg = new ApplicationsOrg();

        $new_appOrg->id_ap = Str::uuid();
        $new_appOrg->name = $request->name;
        $new_appOrg->position_org = $request->pos;
        if (empty($request->profil)) {
            $profil = "";
        }
        else {
            $profil = $request->profil;
        }
        $new_appOrg->profil = $profil;
        $new_appOrg->job = $request->job;
        $new_appOrg->amount_job = $request->amou;
        $new_appOrg->min_job = $request->minjob;
        $new_appOrg->support = $request->supp;
        $new_appOrg->www_url = $request->www;
        $new_appOrg->contacts_org = $request->cont;

        $new_appOrg->save();

        return redirect()->back()->withSuccess('Заявка успешно отправлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApplicationsOrg  $applicationsOrg
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationsOrg $applicationsOrg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApplicationsOrg  $applicationsOrg
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationsOrg $applicationsOrg, $id)
    {
        $appOrd = $applicationsOrg->all();
        //dd($appOrd[0]['status']);
        if ($appOrd[0]['status'] == 0){
            $applicationsOrg->where('id_ap', $id)->update(['status'=>1]);
        }
        else{
            $applicationsOrg->where('id_ap', $id)->update(['status'=>0]);
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApplicationsOrg  $applicationsOrg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationsOrg $applicationsOrg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApplicationsOrg  $applicationsOrg
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationsOrg $applicationsOrg, $id)
    {
        $applicationsOrg->where('id_ap', '=', $id)->delete();

        return redirect()->back()->withSuccess('Заявка успешно удалена!');
    }
}
