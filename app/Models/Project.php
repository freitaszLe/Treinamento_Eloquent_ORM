<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class); // Um projeto pertence a um cliente
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class); // Um projeto pertence a vavrios funcionários
    }
}
