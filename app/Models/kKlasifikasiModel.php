<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class kKlasifikasiModel extends Model
{
    public function allData(){
        return DB::table('t_klasifikasi')->get();
    }

    public function addData($data){
        DB::table('in_arsip')->insert($data);
    }

}
