@extends('layouts.default')
@section('content')
<div class="container-1">
  <div class="tbl-1">
    <div class="row-1">
      <div class="cell-1">
        <div class="content-area-1">
          <div class="bread-crumb-1">
            <div class="tbl-1">
              <div class="row-1">
                <div class="cell-1"> Seller &gt; Order Confirmation Pop up</div>
                <!-- <div class="cell-1 text-right"> <a href="http://psmprojects.net//logistiks/ver7/buyer/Buyer_Order_confirmation_18.html#" style="color:#ff0000">Back to Posts</a></div> -->
              </div>
            </div>
          </div>
          <!--Content Start-->
          <div class="bg-sec1">
          <div class="">
          	<div class="order-confirmation-heading text-center relative-ps">
            <div class="close-2"><a href="http://psmprojects.net//logistiks/ver7/buyer/Buyer_Order_confirmation_18.html#"><img src="/images/close-1.png" alt="close"></a></div>
            	<h2 class="order-confirmation-1">
                THANK YOU FOR YOUR ORDER
                <br>
                <span>You can manage your Order in the Orders Master</span>
                </h2>

            </div>
          
          
          </div>
          
          
             <div class="column-1 field-main">
             <h2 class="order-confirmation-1">ORDER DETAILS</h2>
             <div class="new-table-1">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td>VENDOR NAME</td>
    <td>ORDER No.</td>
    <td>FROM</td>
    <td>TO</td>
    <td>DISPATCH DATE</td>
    <td>SERVICE</td>
    <td>PRICE</td>
    </tr>
  @foreach($orderConfirmation as $Orders)
  <tr>
    <td>{{$Orders->seller_name}}</td>
    <td>LGTKS56789201608</td>
    <td>{{$Orders->from_loc}}</td>
    <td>{{$Orders->to_loc}}</td>
    <td>{{date("Y-m-d", strtotime($Orders->dispatch_dt))}}</td>
    <td>Road FTL</td>
    <td>{{$Orders->price}}</td>
    </tr>
   @endforeach 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total Amount</td>
    <td>{{$total_sum}}</td>
    </tr>
               </tbody></table>

             </div>
             
             
             </div>
             
             <!--<div class="column-2">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                  <td align="left" valign="middle">
                  <input type="button" value="Continue Shopping" class="button-gray-1">
                  <input type="button" value="Clear Cart" class="button-gray-1">
                  
                  </td>
                  <td width="250" align="right" valign="middle"><input type="button" value="Check out" class="button-red-1"></td>
                </tr>
              </tbody></table>
            </div>-->
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>
<script src="/js/text-filed-1-shartcode.js"></script> 
<script src="/js/buyerconfirm_files/main.js"></script>
@stop