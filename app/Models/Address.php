<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ['logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'estado', 'cep'];

    /* * Mapeia o relacionamento com o funcionario
     *
     * @return BelongsTo
     */


    public function employee(){
        return $this->belongsTo(Employee::class); //um endereço pertence a um funcionário
    }


}
