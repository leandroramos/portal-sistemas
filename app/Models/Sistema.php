<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    use HasFactory;

    /**
     * Relacionamento com grupo
     */
    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'sistema_grupo');
    }

}