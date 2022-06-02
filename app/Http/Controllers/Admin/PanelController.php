<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applications;
use App\Models\ApplicationsOrg;
use App\Models\Direct;
use App\Models\Jobs;
use App\Models\Organizacii;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index() {

        $org_count = Organizacii::all()->count();
        $job_count = Jobs::all()->count();
        $dir_count = Direct::all()->count();
        $app_count = Applications::all()->count();
        $appOrg_count = ApplicationsOrg::all()->count();

        return view('admin.index', [
            'org_count' => $org_count,
            'job_count' => $job_count,
            'dir_count' => $dir_count,
            'app_count' => $app_count,
            'appOrg_count' => $appOrg_count,
        ]);
    }
}
