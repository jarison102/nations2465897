<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{   
    protected $table = "languages";
    protected $primaryKey = "language_id";

    use HasFactory;


    //relacion muchos a muchos con paises
    public function paises(){

    
    return $this->belongsToMany(Country::class,
                                'country_languages',
                                'languague_id',
                                'Country_id' )
                                ->withPivot('official');
    }
}
