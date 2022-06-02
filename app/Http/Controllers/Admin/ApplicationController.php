<?php

namespace App\Http\Controllers\Admin;

use App\Models\Applications;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = Applications::orderBy('status', 'asc')->get();

        return view('admin.applications.index', [
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

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$new_app = new Applications();

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

        return redirect('/')->withSuccess('Заявка успешно отправлена!');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function show(Applications $applications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function edit(Applications $applications, $id)
    {
        $app = $applications->all();
        //dd($app[0]['status']);
        if ($app[0]['status'] == 0){
            $applications->where('id_ap', $id)->update(['status'=>1]);
        }
        else{
            $applications->where('id_ap', $id)->update(['status'=>0]);
        }
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applications $applications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applications  $applications
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applications $applications, $id)
    {
        $applications->where('id_ap', '=', $id)->delete();

        return redirect()->back()->withSuccess('Заявка успешно удалена!');
    }
}
