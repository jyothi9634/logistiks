<?php

namespace App\Components;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\LoadTypes;
use App\Models\VehicleTypes;
use App\Models\PriceTypes;

class BaseComponent{
    
    public function __construct(LoadTypes $loadTypes,VehicleTypes $vehicleTypes,PriceTypes $priceTypes) {
        $this->loadTypes = $loadTypes;
        $this->vehicleTypes = $vehicleTypes;
        $this->priceTypes = $priceTypes;
    }

    public function getLoadTypes() {
        return $this->loadTypes->loadTypes();
    }
    
    public function getVehicleTypes() {
        return $this->vehicleTypes->vehicleTypes();
    }
    
    public function getPriceTypes() {
        return $this->priceTypes->priceTypes();
    }
}