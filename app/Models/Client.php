<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'descricao',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class); // Um cliente pode ter vários projetos
    }
}
