<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'tb_pessoas';

    protected $fillable = ['nome', 'idade', 'dt_inclusao', 'dt_exclusao'];
}
