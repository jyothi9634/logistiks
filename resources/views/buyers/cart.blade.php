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
                <div class="cell-1"> Seller &gt; Cart</div>
                <div class="cell-1 text-right"> <a href="#" style="color:#ff0000">Back to Posts</a></div>
              </div>
            </div>
          </div>
          <!--Content Start-->
          <div class="bg-sec1  relative-ps">
           <div class="close-2"><a href="#"><img src="/images/close-1.png" alt="close"></a></div>
             <div class="column-1 field-main">
             
             <div class="new-table-1">
			 			 
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
{!! Form::open(array('url' => 'buyer/buyerGsa'.'/'.$buyer_id.'/'.$seller_id)) !!} 
  <tbody><tr>
    <td>VENDOR NAME</td>
    <td>FROM</td>
    <td>TO</td>
    <td>DISPATCH DATE</td>
    <td>SERVICE</td>
    <td>PRICE</td>
    <td>&nbsp;</td>
  </tr>
  @foreach($cart_data as $data)
  <tr>
    <td>{{$data->consignor_name}}</td>
    <td>{{$data->from_loc}}</td>
    <td>{{$data->to_loc}}</td>
    <td>{{date("Y-m-d", strtotime($data->consignment_pickup_date))}}</td>
    <td>Road FTL</td>
    <td>{{$data->price}}</td>
    <td><a href="#"><img src="/images/delete-1.png" width="20" height="21" alt="delete"></a></td>
  </tr>
  @endforeach
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Total Amount</td>
    <td>{{$total_sum}}</td>
    <td>&nbsp;</td>
  </tr>
               </tbody></table>
			   


             </div>
             
             
             </div>
             
             <div class="column-2">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                  <td align="left" valign="middle">
                  <input type="button" value="Continue Shopping" class="button-gray-1">
                  <input type="button" value="Clear Cart" class="button-gray-1">
                  </td>
                  <td width="250" align="right" valign="middle">
                  	<?php echo Form::submit('CHECK OUT',array('class' => 'button-red-1')); ?>
                  </td>
                </tr>
              </tbody>
          </table>
          {!! Form::close() !!}
            </div>
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>
<script src="/js/text-filed-1-shartcode.js"></script> 
<script src="/js/main.js"></script>
@stop
