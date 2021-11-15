<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HrmsController extends BaseController
{
    function index(){
        return view('hrms.index');
    }
    function detail_pa(){
        return view('hrms.detail_pa');
    }
     function modifier_pa(){
        return view('hrms.modifier_pa');
    }
     function utilisateur(){
        return view('hrms.utilisateur');
    }
    function modifier_utilisateur(){
        return view('hrms.modifier_utilisateur');
    }
   

}
