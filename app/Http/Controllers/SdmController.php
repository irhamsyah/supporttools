<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\User;
Use App\Logo;
Use App\Sdmmekaar;
Use App\Sdmulamm;
Use App\Unit;

class SdmController extends Controller
{
    public function bo_sd_de_showformentrymekaar()
    {
        $logos = Logo::all();
        $users = User::all();
        $sdmmkr = Sdmmekaar::with('unit')->get();
        $unit = Unit::all();
        return view('sdm.frmentrysdmmekaar',['logos' =>$logos, 'users' =>$users,'sdmmkr'=>$sdmmkr,'unit'=>$unit]);
    }
}
