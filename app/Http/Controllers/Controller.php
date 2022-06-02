<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('index');
    }
    public function rabot(){
        return view('rabot');
    }

    public function test(){
        $to  = "alexeypusep@yandex.ru" ;

        $subject = "Проверка письма";

        $message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';

        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Уведомление celevoe.novsu.ru <" . $_ENV['MAIL_FROM_ADDRESS'] . ">\r\n";
        $headers .= "Reply-To: alexeypusep@yandex.ru\r\n";

        mail($to, $subject, $message, $headers);
        return view('test');
    }
}
