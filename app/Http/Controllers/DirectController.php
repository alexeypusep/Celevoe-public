<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Models\Direct;

class DirectController extends Controller
{
    public function submit(ContactRequest $req)
    {

    }

    public function allDirects()
    {
        return view('directions');
    }

    public function sphereDirects($sphere)
    {
        $directs = Direct::orderBy('created_at', 'desc')->where('sphere', $sphere)->get();
        $jobs = new Jobs;

        $amdir = [];
        $amorg = [];

        foreach ($directs as $direct) {
            $dirname = $direct->name_dir;
            $amdir[] = $jobs->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('directs.name_dir', '=', $dirname)->where('organizaciis.confirm', '=', '1')->count();
            $amorg[] = $jobs->select('name_org')->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('organizaciis.confirm', '=', '1')->where('name_dir', '=', $dirname)->get()->unique('name_org');
        }

        $count = count($directs);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $count - 1; $j > $i; $j--) {
                if ($amdir[$j] > $amdir[$j - 1]) {
                    $tmp = $amdir[$j];
                    $amdir[$j] = $amdir[$j - 1];
                    $amdir[$j - 1] = $tmp;
                    $tmp = $directs[$j];
                    $directs[$j] = $directs[$j - 1];
                    $directs[$j - 1] = $tmp;
                    $tmp = $amorg[$j];
                    $amorg[$j] = $amorg[$j - 1];
                    $amorg[$j - 1] = $tmp;
                }
            }
        }

        return view('sphere-direct', ['data' => $directs, 'amdir' => $amdir, 'amorg' => $amorg]);
    }

    public function oneDirect($id_dir)
    {
        $jobs = new Jobs;
        $directs = $jobs->join('organizaciis', 'jobs.id_org', '=', 'organizaciis.id_org')->join('directs', 'jobs.id_direct', '=', 'directs.id_direct')->where('directs.id_direct', '=', $id_dir)->where('organizaciis.confirm', '=', '1')->get();

        return view('direct-one', ['data' => $directs]);
    }
}
