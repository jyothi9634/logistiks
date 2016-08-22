<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PincodeLocationDetails extends Model
{
    protected $table = 'pincode_location_details';
    protected $primaryKey = 'id';
    
    public function loactionDetails() {
        return $this->groupBy('division_name')->take(10000)->get();
    }
}
