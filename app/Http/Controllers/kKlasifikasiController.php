<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\kKlasifikasiModel;

class kKlasifikasiController extends Controller
{
    public function __construct(){
        $this->kKlasifikasiModel = new kKlasifikasiModel();
    }

    public function index(){
        $dbKlasifikasi = DB::table('t_klasifikasi')->get();
        $dbInArsip = DB::table('in_arsip')->get();
        $kodeKlas = Request()->k_klasifikasi;

        //$keterangan=DB::select('select ket from t_klasifikasi where k_klasifikasi="KS.00"');

        return view('input', ['iniKlasifikasi' => $dbKlasifikasi, 'inArsip'=>$dbInArsip]);
    }

    public function validTambahData(){
        //validasi data yang akan ditambahkan
        Request()->validate([
            'k_kepegawaian' => 'required',
            'k_formasi' => 'required',
            'ket_klasifikasi' => 'required',
            'no_berkas' => 'required',
            'no_item' => 'required',
            'uraian' => 'required',
            'tgl' => 'required',
            'jml' => 'required',
            'akses_arsip' => 'required',
        ],[
            'k_kepegawaian.required'=>'Kode Kepegawaian Wajib Diisi',
            'k_formasi.required'=>'Kode Formasi Wajib Diisi',
            'no_berkas.required'=>'Nomor Berkas Wajib Diisi',
            'no_item.required'=>'Nomor Item Arsip Wajib Diisi',
            'uraian.required'=>'Uraian Arsip Wajib Diisi',
            'tgl.required'=>'Tanggal Wajib Diisi',
            'jml.required'=>'Jumlah Lembar Surat Wajib Diisi',
            'akses_arsip.required'=>'Akses Arsip Wajib Diisi',
        ]);

        //validasi berhasil maka simpan data
        $data=[
            'k_kepegawaian'=>Request()->k_kepegawaian,
            'k_formasi'=>Request()->k_formasi,
            'ket_klasifikasi'=>Request()->ket_klasifikasi,
            'no_berkas'=>Request()->no_berkas,
            'no_item'=>Request()->no_item,
            'uraian'=>Request()->uraian,
            'tgl'=>Request()->tgl,
            'jml'=>Request()->jml,
            'akses_arsip'=>Request()->akses_arsip,
        ];
        $this->kKlasifikasiModel->addData($data);
        return redirect()->route('input')->with('pesan', 'Data Berhasil Disiimpan!!!');
    }
}
