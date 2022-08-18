<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{   
    protected $table = "countries";
    protected $primaryKey = "country_id";
    
    use HasFactory;

    public function region(){

        return $this-> belongsTo(Region::class ,
                                "region_id" );
}
    public function idiomas(){
        //belongsToMany
        // tabla pivote o debil
        //fk del modelo pivote
        // fk de la tabla a relacionar con el pivote
        return $this->belongsToMany(Language::class, "country_languages", "country_id", "language_id");
    }
}