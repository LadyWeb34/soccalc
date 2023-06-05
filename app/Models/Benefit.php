<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    use HasFactory;

    protected $table = 'benefits';

    protected $fillable = [
        'category_id',
        'name',
        'type',
        'frequency',
        'start_date',
        'end_date',
        'estimated_amount',
        'estimated_amount',
        'level_of_regulation',
        'footing',
        'condition'
    ];

    public function category(){
        return $this -> belongsTo(Category::class, 'category_id','id');
    }
}
