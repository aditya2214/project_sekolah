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
        $head = \App\HeaderTugas::all();
        return view('kirim-tugas',compact('head'));
    }

    public function save_tugas(Request $request){
        try {
            //code...
            $kode = $request->kode;
            $nisn = $request->nisn;

            $data_m = \App\HeaderTugas::where('kode_tugas',$kode)->first();
            $kls = $data_m->kelas;
            $dt_ln = $data_m->dikumpulkan;

            $data_s = \App\DataMurid::where('NISN',$nisn)->first();
            if ($data_s == null) {
                # code...
                return redirect()->back()->with('toast_error', 'nik ini '.$nisn.' tidak terdaftar');
            }
            $kls2 = $data_s->kelas->kelas;

            if ($kls != $kls2) {
                # code...
                return redirect()->back()->with('toast_error', 'Gagal Kirim Tugas : Ini Tugas kelas '.$kls.', kamu kelas '.$kls2.'!! tolong cek kembali judul tugas yang dipilih!!!');
            }

            $tgl= date('Y-m-d');
            if ($tgl > $dt_ln) {
                # code...
                return redirect()->back()->with('toast_error', 'Batas Pengumpulan Berakhir : Silahkan Hubungi Guru!!!');
            }

            $save_tugas = new \App\BodyTugas;
            $save_tugas->kode = $request->kode; 
            $save_tugas->nisn = $request->nisn;
            $save_tugas->upload = $request->img->store('images','public');
            $save_tugas->tgl_upload = date('Y-m-d');
            $save_tugas->nilai_tugas = 0;
            $save_tugas->save();

            return redirect()->back()->with('success','Berhasil Di Kirim');
        } catch (\Exception $e) {
            //throw $th;
            return view('error',compact('e'));

        }
        
    }


    public function absen(){

        return view('absen');
    }

    public function lihatnilai(){
        return view('lihatnilai');
    }

    public function checknilai(Request $request){
        $nisn =$request->nisn;

        $data_s = \App\DataMurid::where('NISN',$nisn)->first();
        if ($data_s == null) {
            return redirect()->back()->with('toast_error', 'nik ini '.$nisn.' tidak terdaftar');
        }else{
            $semua_body = \App\BodyTugas::where('nisn',$request->nisn)->orderBY('tgl_upload','DESC')->paginate(15);
            return view('checknilai',compact('semua_body'));
        }
    }
}
