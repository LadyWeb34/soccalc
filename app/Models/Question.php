<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function questionOptions(){
        return $this->hasMany(Option::class);
    }
}
