<?php

/* * **********************************
 * Purpose : Member , Individual , MarketPlace Registrations
 * Author : Nikhil Kishore
 * Company : Logistiks
 * Description : In the controller we are implementing Buyer Search Functionality
 * Created At : 06th Aug 2016
 * 
 *
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Console\IlluminateCaster;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\BuyerSearch;
use App\Components\BuyerSearchComponent;
use App\Components\SellerPostComponent;
use App\Components\EmailHelper;
use App\Components\EmailSender;
use App\Components\Helper;
use Validator;
use App\Models\PincodeLocationDetails;


class BuyerSearchController extends BaseController {
   
    /*
     * Method Name :Construct
     * Purpose : Configuring Model 
     * 
     */
    
       public function __construct(BuyerSearch $BuyerSearch,BuyerSearchComponent $buyerSearchComponent,PincodeLocationDetails $pincodeLocationDetails){
        
        $this->buyer = $BuyerSearch;
        $this->buyerSearchComponent = $buyerSearchComponent;
        $this->pincodeLocationDetails = $pincodeLocationDetails;
    }
    /*
    /*
     * Method Name :Index
     * Purpose : Redirection to Buyer Search View
     * 
     */
    public function index() {
        
        $data = SellerPostComponent::GetData();
        $message ="";
		    $inputData=array();
        $session_id = Session::get('user_id');
        $buyer = SellerPostComponent::SellerSession($session_id);
        
        Session::put('is_seller',$buyer[0]->is_seller);  
        Session::put('name',$buyer[0]->name);

        return view('buyers.search', ['data' => $data,'message'=>$message,'inputData'=>$inputData]);
       
    }
    
    /*
     * Method Name :SearchBuyer
     * Purpose : Buyer Search results with required elements
     * 
     */

    public function buyerSearch() {
        try {           
          $inputData = Input::all();

			 $data = SellerPostComponent::GetData();
			 $validator = Validator::make($inputData,[
						'from_loc' => 'required',
						'to_loc' => 'required',
						'dispatch_dt' => 'required',
						'delivery_dt' => 'required',
						'load_type' => 'required',
						'veh_type' => 'required'
					
			]);
			if ($validator->fails ()) {
				//echo "ur in validator page";
				
				   	 return Redirect::to('buyer/search' )->withErrors($validator)->withInput();
					
            } else {
                    $inputData['searchType'] = "noramlSearch";
                    $BuyerSearchResult = BuyerSearchComponent::SellerPosts($inputData);
                    $loadType = $this->buyerSearchComponent->getLoadType($inputData);
                    //print_r($BuyerSearchResult);exit;
                    $vehicleType = $this->buyerSearchComponent->getVehType($inputData);
                    
                    $inputData['load_type'] = $loadType->load_type;
                    $inputData['veh_type'] = $vehicleType->vehicle_type;

                    if(is_array($BuyerSearchResult))	{			
                    return view('buyers.ftlSearchList',['searchResults'=>$BuyerSearchResult,'data'=>$inputData]);
					} else{
					return view('buyers.ftlSearchList',['searchResults'=>$BuyerSearchResult,'data'=>$inputData]);	
					}
            }
		
        } catch (Exception $ex) {
             
	
            return Redirect::to ( 'buyer/search' )->withInput(['data',$data])->withErrors(array('message' => 'Some thing went wrong. Please try again!!'));
        }
    }
    

     public function buyerFtlFilter() {

        $filterInputs = Input::all();
        $fromLoc = $this->pincodeLocationDetails->find($filterInputs['from_loc']);
        $filterInputs['from_loc'] = $fromLoc->village;
        $toLoc = $this->pincodeLocationDetails->find($filterInputs['to_loc']);
        $filterInputs['to_loc'] = $toLoc->village;
        $filterInputs['searchType'] = "advancedFilter";
        
        $buyerSearchResult = BuyerSearchComponent::SellerPosts($filterInputs);
        
        return $buyerSearchResult;
    }
 
    /*
     * Method Name :BookNow
     * Purpose : Redirect to BuyerBookNow View page
     * 
     */
    
    public function bookNow($seller_user_id,$lgtks_post_id){
        try{
            
            $buyer_id = Session::get('user_id') ;
            
            $seller_post_details   = $this->buyer->getPostdata($lgtks_post_id,$seller_user_id);
            
            $buyer_booknow_details = $this->buyer->buyerBooknow($seller_user_id);
            
            $buyer_details = $this->buyer->buyerInfo($buyer_id);

            return view('Buyers.booknow',['data'=>$seller_post_details,'buyer_booknow_details'=>$buyer_booknow_details,'buyer_user_id'=>$buyer_id,'seller_user_id'=>$seller_user_id,'lgtks_post_id'=>$lgtks_post_id,'buyer_details'=>$buyer_details]);
            
        
        } catch (Exception $ex) {
            
           return $ex->getMessage();
        }
    }
    
    public function Cart($buyer_user_id,$seller_id,$lgtks_post_id){
        try{
            
            $buyerCartDetails = Input::all();
            
            $getCart = $this->buyer->getcartDetails($buyer_user_id,$buyerCartDetails,$seller_id,$lgtks_post_id);
            

            $total_sum = 0;
            
            

            foreach($getCart as $value){
                
                $total_sum = $total_sum + $value->price;

                $seller_name = DB::table('lgtks_users as lu')
                              ->leftjoin('lgtks_posts as lp','lp.user_id','=','lu.id')
                              ->where('lp.id',$value->lgtks_post_id)
                              ->pluck('lu.name');

                 $value->seller_name =   $seller_name[0];          

                                            
            }       
            

            return view('Buyers.cart',['cart_data'=>$getCart,'total_sum'=>$total_sum,'seller_id'=>$seller_id,'buyer_id'=>$buyer_user_id,'lgtks_post_id'=>$lgtks_post_id]);
        
        }
        catch(Exception $ex){
            
            return $ex->getMessage();
        
        }
    }

    public function deleteOrder($order_id){

        $this->buyer->deleteOrder($order_id);

    }
    
    public function buyerGsa($buyer_id,$seller_id,$lgtks_post_id){
        try{
            
            //$getGsadetails = $this->buyer->getGsadetails($buyer_id,$seller_id);

            $buyerconfirmorders = $this->buyer->getOrders($buyer_id);
            
            $seller_post_details   = $this->buyer->getPostdata($lgtks_post_id,$seller_id);
           
            $getsellerInfo = $this->buyer->getsellerInfo($seller_id);
           
            //print_r($getsellerInfo);exit;
            //$buyer_booknow_details = $this->buyer->buyerBooknow($seller_user_id);

            $total_sum = 0;
            
            foreach($buyerconfirmorders as $value){
                
                $total_sum = $total_sum + $value->price;

                $seller_name = DB::table('lgtks_users as lu')
                              ->leftjoin('lgtks_posts as lp','lp.user_id','=','lu.id')
                              ->where('lp.id',$value->lgtks_post_id)
                              ->pluck('lu.name');

                 $value->seller_name =   $seller_name[0];  

               }  


            return view('Buyers.buyergsa',['buyerconfirmorders'=>$buyerconfirmorders,'buyer_id'=>$buyer_id,'price'=>$total_sum,'seller_post_details'=>$seller_post_details,'getsellerInfo'=>$getsellerInfo]);
            
        }
        catch(Exception $ex){
            
            return $ex->getMessage();
        }
    }

    public function buyerConfirmation($buyer_id){
        try{

            $buyerconfirmorders = $this->buyer->getOrders($buyer_id);
            
            $updateOrder = $this->buyer->updateOrder($buyerconfirmorders,$buyer_id);

            $total_sum = 0;
            
            foreach($buyerconfirmorders as $value){
                
                $total_sum = $total_sum + $value->price;

                $seller_name = DB::table('lgtks_users as lu')
                              ->leftjoin('lgtks_posts as lp','lp.user_id','=','lu.id')
                              ->where('lp.id',$value->lgtks_post_id)
                              ->pluck('lu.name');

                 $value->seller_name =   $seller_name[0]; 
                                            
            }      
            
            return view('Buyers.buyerconfirm',['orderConfirmation'=>$buyerconfirmorders,'total_sum'=>$total_sum]);

        }
        catch(Exception $ex){

            return $ex->getMessage();
        }
    }

    public function buyerBilling(){
        try{

            $billing_data = ['seller_name'   =>'nikhil kishore',
                              'from_loc'     =>'hyderabad',
                              'to_loc'       =>'bangalore',
                              'dispatch_dt'  =>'01/06/2016',
                              'delivery_dt'  =>'21/06/2016',
                              'load_type'    =>'Fertiliser',
                              'veh_type'     =>'LPT 9 MT',
                              'qty'          =>'1',
                              'no_of_loads'  =>'1',
                              'transit_days' =>'1',
                              'price'        =>'1000',
                              'tracking_type' =>'Real Time',
                              'payment_term'  =>'Advance',
                              'buyer_name'    =>'suresh',
                              'order_status'  =>'billing completed' 
                            ];
                         
            return view('Buyers.buyerbilling',['data'=>$billing_data]);
        }
        catch(Exception $ex){

            return $ex->getMessage();
        
        }
    }
	
	   public function getUserDeatils(Request $request) {
        $inputs = $request->all();
        
        return $this->user->getUserDetails($inputs);
    }
    
    public function newMail() {
        $inputs = Input::all();
        $inputs['datetime'] = date("Y-m-d h:i:sa");
        $inputs['buyer_seller_flag'] = 1;
        
        //$inputs['message_from'] = Auth::user()->id;
        $inputs['message_from'] = 2;
        if(count($inputs)>0) {
            $this->postIntraction->savePostIntractions($inputs);
            try{
                $this->emailsender->sendMailToSeller($inputs);
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
    }
    
}
