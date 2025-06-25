<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;
//  protected $fillable = [
//      'name',
//      'cpf',
//      'data_contratacao',
//      'data_demissao',
//    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];


    /* Mapeia o relacionamento entre Employee e Address
    @return HasOne
    */
    public function address()
    {
        return $this->hasOne(Address::class);  //um funcionário tem um endereço
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class); // Um funcionario pertence a muitos projetos
    }
}
