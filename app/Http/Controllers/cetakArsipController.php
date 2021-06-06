<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cetakArsipModel;

class cetakArsipController extends Controller
{
    public function __construct(){
        $this->cetakArsipModel = new cetakArsipModel();
    }

    public function indexDIB(){
        $data=[
            'indexDIB'=>$this->cetakArsipModel->ambilData(),
        ];
        return view('cetakDIB', $data);
    }

    public function indexDB(){
        $data=[
            'indexDB'=>$this->cetakArsipModel->ambilData(),
        ];
        return view('cetakDB', $data);
    }

}
