<?php

namespace App\Http\Controllers\Admin;

use App\Models\Organizacii;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\File;
use Illuminate\Support\Str;

class OrganizacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organiz = Organizacii::orderBy('created_at', 'desc')->get();

        return view('admin.organiz.index', [
            'organiz' => $organiz,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->logo)) {
            $logo = '';
        }
        else {
            $logo = $request->file('logo')->store('img', 'public');
        }
        if ($request->confirm == ''){
            $conf = 0;
        }
        else{
            $conf = 1;
        }

        $new_organiz = new Organizacii();

        $new_organiz->id_org = Str::uuid();
        $new_organiz->name_org = $request->name;
        $new_organiz->logo = $logo;
        $new_organiz->description = $request->desc;
        $new_organiz->www_page = $request->www;
        $new_organiz->contacts = $request->phone;
        $new_organiz->confirm = $conf;

        $new_organiz->save();

        return redirect()->back()->withSuccess('Организация успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organizacii  $organizacii
     * @return \Illuminate\Http\Response
     */
    public function show(Organizacii $organizacii)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organizacii  $organizacii
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizacii $organizacii, $id)
    {
        return view('admin.organiz.edit', ['organizacii' => $organizacii->where('id_org', '=', $id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organizacii  $organizacii
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizacii $organizacii, $id)
    {
        if (empty($request->logo)){
            $logo = $organizacii->select('logo')->where('id_org', '=', $id)->get();
            $logo = $logo[0]['logo'];
        }
        else {
            $logo = $request->file('logo')->store('img', 'public');
        }

        if ($request->confirm == ''){
            $conf = 0;
        }
        else{
            $conf = 1;
        }

        $organizacii
            ->where('id_org', '=', $id)
            ->update(['name_org'=>$request->name, 'logo'=>$logo, 'description'=>$request->desc, 'www_page'=>$request->www, 'contacts'=>$request->phone, 'confirm'=>$conf]);

        return redirect()->back()->withSuccess('Организация успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organizacii  $organizacii
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizacii $organizacii, $id)
    {
        $organizacii->where('id_org', '=', $id)->delete();

        return redirect()->back()->withSuccess('Организация успешно удалена!');
    }
}
