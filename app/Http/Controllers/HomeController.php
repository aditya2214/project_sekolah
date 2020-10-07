<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('kirim-tugas');
    }

    public function save_tugas(Request $request){
        $save_tugas = new \App\BodyTugas;
        $save_tugas->kode = $request->kode; 
        $save_tugas->nisn = $request->nisn;
        $save_tugas->upload = $request->img->store('images','public');
        $save_tugas->tgl_upload = date('Y-m-d');
        $save_tugas->nilai_tugas = 0;
        $save_tugas->save();

        return redirect()->back()->with('success','Berhasil Di Kirim');
    }
}
