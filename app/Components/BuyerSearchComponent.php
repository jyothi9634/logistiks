<?php 
namespace App\Components;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\BuyerSearch;


class BuyerSearchComponent{
    
    public static function SellerPosts($data){
        
       $buyer_search = BuyerSearch::SearchForSellerPost($data);
       
       return $buyer_search;
       
    }
      public function getloadType($inputData) {
        return DB::table('load_types')->where('id',$inputData['load_type'])->first();
    }
    public function getvehType($inputData) {
        return DB::table('vehicle_types')->where('id',$inputData['veh_type'])->first();
    }
   
}