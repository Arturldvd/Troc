<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $table = "pays";
    protected $primarykey = "indicatiftelpays";
    public $timestamps = false;
}
