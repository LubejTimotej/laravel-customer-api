<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stranka extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_priimek',
        'ime',
        'priimek',
        'naslov',
        'postna_stevilka',
        'naziv_poste',
        'postna_stevilka_naziv_poste',
        'davcna_stevilka',
        'telefonska_stevilka'
    ];


}