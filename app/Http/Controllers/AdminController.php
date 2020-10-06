<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use DataTables;
use Auth;
class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function dashboard(){
        
        return view('admin.content.dashboard');
    }

    public function kategori(){
        $kategori = \App\Kategori::paginate(25);
        return view('admin.content.kategori',compact('kategori'));
    }

    public function save_kategori(Request $request){
        try {
            //code...
            $save_kategori = new \App\Kategori;
            $save_kategori->nama = $request->nama;
            $save_kategori->save();
    
            return redirect()->back()->with('success', 'Berhasil!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('toast_error', 'Simpan Data Gagal');;
        }
       
    }

    public function delete_kategori($id){
        try {
            //code...
            $delete_kategori = \App\Kategori::where('id',$id)->delete();

            return redirect()->back()->with('success', 'Berhasil!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('toast_error', 'Hapus Data Gagal');;

        }
       
    }

    public function data_murid(){
        $data_murid = DB::table('kelas')
            ->join('data_murids', 'data_murids.id_kelas', '=', 'kelas.id')
            ->select('data_murids.id',
                    'data_murids.nama_murid',
                    'data_murids.NISN',
                    'data_murids.NIS',
                    'data_murids.tempat_lahir',
                    'data_murids.tanggal_lahir',
                    'data_murids.alamat',
                    'data_murids.no_tlp',
                    'data_murids.nama_ortu',
                    'kelas.kelas',
                    'data_murids.created_at')
            ->orderBy('data_murids.created_at','DESC')
            ->get();

        $kelas = \App\Kelas::all();
        return view('admin.content.datamurid',compact('kelas','data_murid'));
    }
    

    public function save_murid(Request $request){
        try {
            //code...
            $savemurid = new \App\DataMurid;
            $savemurid->nama_murid = $request->namamurid;
            $savemurid->NISN = $request->nisn;
            $savemurid->NIS	= $request->nis;
            $savemurid->tempat_lahir = $request->tmp_lahir;
            $savemurid->tanggal_lahir = $request->tgl_lahir;
            $savemurid->id_kelas = $request->kelas;
            $savemurid->nama_ortu = $request->wali_murid;
            $savemurid->alamat = $request->alamatmurid;
            $savemurid->no_tlp	= $request->nomertlpmurid;
            $savemurid->save();
    
            return redirect()->back()->with('success', 'Berhasil!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('toast_error', 'Simpan Data Gagal');;

        }
       
    }

    public function delete_murid($id){
        try {
            //code...
            $delete_murid = \App\DataMurid::where('id',$id)->delete();

            return redirect()->back()->with('success', 'Berhasil!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('toast_error', 'Hapus Data Gagal');;

        }
      
    }

    public function edit_murid($id){
        $update_murid = DB::table('kelas')
        ->join('data_murids', 'data_murids.id_kelas', '=', 'kelas.id')
        ->select('data_murids.id',
                'data_murids.nama_murid',
                'data_murids.NISN',
                'data_murids.NIS',
                'data_murids.tempat_lahir',
                'data_murids.tanggal_lahir',
                'data_murids.alamat',
                'data_murids.no_tlp',
                'data_murids.nama_ortu',
                'kelas.kelas',
                'data_murids.created_at')
        ->where('data_murids.id',$id)
        ->first();

        $data_murid = DB::table('kelas')
        ->join('data_murids', 'data_murids.id_kelas', '=', 'kelas.id')
        ->select('data_murids.id',
                'data_murids.nama_murid',
                'data_murids.NISN',
                'data_murids.NIS',
                'data_murids.tempat_lahir',
                'data_murids.tanggal_lahir',
                'data_murids.alamat',
                'data_murids.no_tlp',
                'data_murids.nama_ortu',
                'kelas.kelas',
                'data_murids.created_at')
        ->orderBy('data_murids.created_at','DESC')
        ->where('data_murids.id',$id)
        ->get();

    $kelas = \App\Kelas::all();
    return view('admin.content.updatemurid',compact('kelas','data_murid','update_murid'));
    }

    public function update_murid(Request $request,$id){
        // return $request->nomertlpmurid;
        try {
            //code...
            $update_murid = \App\DataMurid::findOrFail($id);
            $update_murid->nama_murid = $request->namamurid;
            $update_murid->NISN = $request->nisn;
            $update_murid->NIS	= $request->nis;
            $update_murid->tempat_lahir = $request->tmp_lahir;
            $update_murid->tanggal_lahir = $request->tgl_lahir;
            $update_murid->id_kelas = $request->kelas;
            $update_murid->nama_ortu = $request->wali_murid;
            $update_murid->alamat = $request->alamatmurid;
            $update_murid->no_tlp	= $request->nomertlpmurid;
            $update_murid->save();
    
            return redirect()->back()->with('success', 'Berhasil!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('toast_error', 'Update Gagal');
        }
       
    }

    public function naik(Request $request){
        try {
            //code...
            $ids = $request->id;
         $dt = \App\DataMurid::whereIn('id',$ids)->get();
         foreach ($dt as $key => $value) {
             # code...
             $k = $value->id_kelas;
             $hasil = $k+1;
         }
        DB::table('data_murids')->whereIn('id', $ids)
        ->update(['id_kelas' => $hasil]);

        return redirect()->back()->with('success', 'Berhasil!:Selamat Atas Kenaikan Murid Anda :)');
        } catch (\Exception $e) {
            //throw $th;
        return redirect()->back()->with('toast_error', 'Update Data Gagal');; 
        }
         

    }

    public function search(Request $request){
        $kelas = $request->kelas;
        if ($kelas == null) {
            return redirect('dashboard/data_murid');
        }else{
            $data_murid = DB::table('kelas')
            ->join('data_murids', 'data_murids.id_kelas', '=', 'kelas.id')
            ->select('data_murids.id',
                    'data_murids.nama_murid',
                    'data_murids.NISN',
                    'data_murids.NIS',
                    'data_murids.tempat_lahir',
                    'data_murids.tanggal_lahir',
                    'data_murids.alamat',
                    'data_murids.no_tlp',
                    'data_murids.nama_ortu',
                    'kelas.kelas',
                    'data_murids.created_at')
            ->orderBy('data_murids.created_at','DESC')
            ->whereIn('kelas.kelas',$kelas)
            ->get();
        
            $kelas = \App\Kelas::all();
            return view('admin.content.datamurid',compact('kelas','data_murid'));
        }
    }

    public function databuku(){

        $buku = \App\Book::all();

        return view('admin.content.databuku');
    }

    public function data_guru(){
        $dataguru = \App\DataGuru::all();

        return view('admin.content.dataguru',compact('dataguru'));
    }

    public function save_guru(Request $request){
        // return $request->all();
        try {
            //code...
            $saveguru = new \App\DataGuru;
            $saveguru->nama = $request->nama;
            $saveguru->tempat_lahir = $request->tempat_lahir;
            $saveguru->tanggal_lahir = $request->tanggal_lahir;
            $saveguru->nip = $request->nip;
            $saveguru->nuptk = $request->nuptk;
            $saveguru->no_hp = $request->no_hp;
            $saveguru->alamat = $request->alamat;
            $saveguru->pangkat = $request->pangkat;
            $saveguru->masa_kerja	= $request->masa_kerja;
            $saveguru->save();
    
           $id = $saveguru->id;
    
            $emailguru = new \App\User;
            $emailguru->id = $id;
            $emailguru->role = "guru";
            $emailguru->name = $request->nama;
            $emailguru->email = $request->nip."@System.com";
            $emailguru->password = Hash::make($request->tanggal_lahir);
            $emailguru->save();
    
    
            return redirect()->back()->with('success', 'Berhasil!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('toast_error', 'Simpan Data Gagal');;

        }
      
    }

    public function delete_guru($id){
        try {
            //code...
            $delete_guru = \App\DataGuru::where('id',$id)->delete();
            $delete_guru = \App\user::where('id',$id)->delete();
    
            return redirect()->back()->with('success', 'Berhasil!');
        } catch (\Exception $e) {
            //throw $th;
            return redirect()->back()->with('toast_error', 'Hapus Data Gagal');;

        }
       
    }

    public function buat_tugas(){
        $header_tugas = \App\HeaderTugas::all();
        return view('admin.content.headertugas',compact('header_tugas'));
    }

    public function save_tugas(Request $request){
        
        $d = date('d');
        $m = date('m');
        $kelas = $request->kelas;
        $data = \App\HeaderTugas::whereYear('created_at',date('Y'))->whereMonth('created_at',date('m'))->count();
        $invID = str_pad(  $data + 1, 2, "0", STR_PAD_LEFT );

        $kode = "4a".$m."0".$kelas.$invID;
        // return $kode;
        $save_tugas = new \App\HeaderTugas;
        $save_tugas->kode_tugas = $kode;
        $save_tugas->kelas = $kelas;
        $save_tugas->judul = $request->judul;
        $save_tugas->dikumpulkan = $request->dikumpulkan;
        $save_tugas->created_by = Auth::user()->id;
        $save_tugas->save();

        return redirect()->back()->with('success', 'Berhasil!');

    }

}
