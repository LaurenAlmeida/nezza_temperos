<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Tipo;
use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $sais = DB::table('produtos')->where('tipo',1)->get();
        $pimentas = DB::table('produtos')->where('tipo',2)->get();
        $temperos = DB::table('produtos')->where('tipo',3)->get();
        $diversos = DB::table('produtos')->where('tipo',4)->get();
        return view('index', compact('sais','pimentas','temperos','diversos'));
    }
    
    public function sal(Request $request)
    {

        $sais = DB::table('produtos')->where('tipo',1)->get();
        
        return view('sal', compact('sais'));
    }
    
    public function temperos(Request $request)
    {

        $temperos = DB::table('produtos')->where('tipo',3)->get();
        
        return view('temperos', compact('temperos'));
    }

    public function diversos(Request $request)
    {

        $diversos = DB::table('produtos')->where('tipo',4)->get();
        
        return view('diversos', compact('diversos'));
    }

    public function pimentas(Request $request)
    {

        $pimentas = DB::table('produtos')->where('tipo',2)->get();
        
        return view('pimentas', compact('pimentas'));
    }



    }