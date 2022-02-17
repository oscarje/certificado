<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class controladorCertificado extends Controller
{
    public function generarCerticado($id)
    {
        $cursoId= DB::table('cursos')->where('id', $id)->value('id');
        return view('certificado')->with('cursoId',$cursoId);
    }
}
