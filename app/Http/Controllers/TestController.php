<?php

namespace App\Http\Controllers;

use Bci\Bci;
use Bci\CreditoHipotecario;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index2(){
        $bci = new Bci("ed5bfed1-096a-4493-b9ec-3982b1f19dd7");
        $hipotecario = new CreditoHipotecario($bci);
        return $hipotecario->allHipotecarios();
    }
    public function index5(){
        $bci = new Bci("ed5bfed1-096a-4493-b9ec-3982b1f19dd7");
        $hipotecario = new CreditoHipotecario($bci);
        return $hipotecario->simulacion(23,2);

        }

    public function index6(){
        $bci = new Bci("ed5bfed1-096a-4493-b9ec-3982b1f19dd7");
        $hipotecario = new CreditoHipotecario($bci);
        return $hipotecario->tasas(23);


    }

    public function index8(){
        return view('test6');
    }

    public function index7(){
        return view('test5');
    }


    public function index3(){
        return view('formulariousuario');
    }
    public function index4(){

        return view('test');
    }
}
