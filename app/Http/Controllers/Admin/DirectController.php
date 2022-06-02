<?php

namespace App\Http\Controllers\Admin;

use App\Models\Direct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\File;
use Illuminate\Support\Str;

class DirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directs = Direct::orderBy('name_dir', 'asc')->get();

        return view('admin.direct.index', [
            'directs' => $directs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.direct.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_dir = new Direct();

        $new_dir->id_direct = Str::uuid();
        $new_dir->name_dir = $request->name;
        $new_dir->sphere = $request->spher;

        $new_dir->save();

        return redirect()->back()->withSuccess('Направление успешно добавлено!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direct  $direct
     * @return \Illuminate\Http\Response
     */
    public function show(Direct $direct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direct  $direct
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direct = Direct::where('id_direct', '=', $id)->get();

        return view('admin.direct.edit', ['direct' => $direct]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direct  $direct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Direct::where('id_direct', '=', $id)
            ->update(['name_dir'=>$request->name, 'sphere'=>$request->spher]);

        return redirect()->back()->withSuccess('Направление успешно обновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direct  $direct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Direct::where('id_direct', '=', $id)->delete();

        return redirect()->back()->withSuccess('Направление успешно удалено!');
    }
}
