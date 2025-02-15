<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'service_name',
    ];

    // relation avec la table employes
    public function employes()
    {
        // relation de type OneToMany
        // pour une relation OneToOne : hasOne()
        return $this->hasMany(Employe::class);
    }
}
