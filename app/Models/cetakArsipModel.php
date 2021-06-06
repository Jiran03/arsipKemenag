<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class cetakArsipModel extends Model
{
    public function ambilData(){
        return DB::table('in_arsip')->get();
    }
}
