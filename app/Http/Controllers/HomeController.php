<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cetakArsipModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->cetakArsipModel = new cetakArsipModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=[
            'arsipTerinput'=>$this->cetakArsipModel->ambilData(),
        ];
        return view('home', $data);
    }
}
