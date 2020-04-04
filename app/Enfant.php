<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    public function age()
    {
        $dateNaissance = new \DateTime($this->date_naissance);
        $dateJour = new \DateTime(date("Y-m-d"));
        $interval =$dateJour->diff($dateNaissance);
        return $interval->format('%y ans et %m mois');
    }

    public function getGenreAttribute($genre)
    {
        return ['1'=>'Fille','0'=>'Garçon'][$genre];
    }
}
