<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar extends Model
{
    protected $table = 'bayar';
    protected $fillable = ['nama', 'tarif', 'jumlah', 'total'];
    use HasFactory;
}
