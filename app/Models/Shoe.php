<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeSearch($query, $terms){
        collect(explode(" " , $terms))->filter()->each(function($term) use($query){
            $term = '%'. $term . '%';

            $query->where('brand', 'like', $term)
                ->orWhere('store', 'like', $term)
                ->orWhere('quantity', 'like', $term);
        });
    }
}
