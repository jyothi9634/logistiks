<?php 
namespace App\Components;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Seller;


class SellerSearchComponent{
    public static function SearchList($data){
       $Searchlist=Seller::SearchPost($data);
		return $Searchlist;
   }
}