<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    
    protected $guarded = [];

    // protected $with = ['company'];

    public function company() {
        return $this->belongsTo(Company::class);
    }
}