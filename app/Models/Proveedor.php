<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table = 'productoes';
    public $timestamps= false;
    protected $primaryKey= 'idproducto';
    public $incrementing= false;
}
