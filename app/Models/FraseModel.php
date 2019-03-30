<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FraseModel extends Model
{
    protected $table = 'frase';
    protected $primaryKey = 'id';
    protected $fillable = [
        'frase', 'autor'
    ];
    public $timestamps = false;
}
