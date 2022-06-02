<?php

namespace App\Http\Controllers;

use App\Models\ApplicationsOrg;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Organizacii;

class OrganizaciiController extends Controller {

    public function submit()
    {
        $organizasiay = new Organizacii();
        $organizasiay->id_org = Str::uuid();
        $organizasiay->name = "Организация 4";
        $organizasiay->logo = "https://1000logos.net/wp-content/uploads/2017/05/Pepsi-logo.jpg";
        $organizasiay->description = "Описание организации 4";
        $organizasiay->www_page = "https://www.org4.ru";
        $organizasiay->contacts = "75-11-58";

        $organizasiay->save();

        //return redirect()->route('contact')->with('success', 'Организация была добавлена');
    }

    public function orgappcreat(Request $request){

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

        return redirect('/rabot')->withSuccess('Заявка успешно отправлена!');

    }

    public function allOrganiz()
    {
        $organizasiay = new Organizacii;
        //$organizasiay->orderBy('created_at', 'desc')->take(2)->get()
        return view('organizations', ['data' => $organizasiay->orderBy('created_at', 'desc')->where('confirm', '=', '1')->get()]);
    }

    public function allDirects()
    {
        return view('directions');
    }
}
