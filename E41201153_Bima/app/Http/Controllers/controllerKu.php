<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerKu extends Controller
{
    public function utama()
    {
        return view ('/mahasiswa/index');
    }
    public function buku()
    {
        return view ('/mahasiswa/form');
    }
    public function petugas()
    {
        return view ('/mahasiswa/formPet');
    }
    public function anggota()
    {
        return view ('/mahasiswa/formAng');
    }
}