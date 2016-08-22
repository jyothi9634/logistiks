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
                <div class="cell-1"> Seller &gt; Book Now &gt;  GSA </div>
                <div class="cell-1"> </div>
              </div>
            </div>
          </div>
          <!--Content Start-->
          <div class="bg-sec1">
            <div class="column-1 field-main normal-font-1">
              <h1 class="margin-1 text-center">General Services Agreement</h1>
              <h2>Disclaimer</h2>
              <p>Logistiks.com is acting as the market place” means the central online portal established for providing logistics service
                offerings like but not limited to transportation, warehouse, handling, packaging &amp; packers and movers services, on a pan
                india level. Both the parties to this GSA that means the buyer and the seller should ensure that the information provided by
                them is accurate to do the transaction on the portal.</p>
              <p>The information given by buyer and seller on the sign up page is true and fair to the best of their knowledge and
                logistiks.com is not responsible in case of discrepancy if any.</p>
              <div class="gsa-table-main">
                <div class="gsa-table-1">
                  <div class="gsa-row-1">
                    <div class="gsa-cell-1">
                      <h2>Buyer Details</h2>
                      <div class="list-1">
                        <ul>
                          @foreach($seller_post_details as $key=>$value)
                          <li>Buyer Name:{{$buyerconfirmorders[0]->name}}</li>
                          <li>Consignment Type:Commercial</li>
                          <li>From Location:{{$value->from_loc}}</li>
                          <li>To Location:{{$value->to_loc}}</li>
                          <li>Dispatch Date:{{date("Y-m-d", strtotime($value->dispatch_dt))}}</li>
                          <li>Delivery Date:{{date("Y-m-d", strtotime($value->delivery_dt))}}</li>
                          <li>Load Type3:{{$value->load_type}}</li>
                          <li>Quantity:{{$value->qty}}</li>
                          <li>Vehicle Type:{{$value->vehicle_type}}</li>
                          <li>Source Location Type:{{$buyerconfirmorders[0]->source_loc}}</li>
                          <li>Destination Type:{{$buyerconfirmorders[0]->dest_loc}}</li>
                          <li>Consignor Name:{{$buyerconfirmorders[0]->consignor_name}}</li>
                          <li>Consignor Mobile:{{$buyerconfirmorders[0]->consignor_mobile_number}}</li>
                          <li>Consignor Address:{{$buyerconfirmorders[0]->consignor_address1}}</li>
                          <li>Consignee Name:{{$buyerconfirmorders[0]->consignee_name}}</li>
                          <li>Consignee Mobile:{{$buyerconfirmorders[0]->consignee_mobile_number}}</li>
                          <li>Consignee Address:{{$buyerconfirmorders[0]->consignee_address1}},{{$buyerconfirmorders[0]->consignee_address2}},{{$buyerconfirmorders[0]->consignee_address3}}</li>
                          <li>Seller Details</li>
                          <li>Seller Name:{{$getsellerInfo[0]->first_name}}</li>
                          <li>Year of ESTD.:{{$getsellerInfo[0]->year_of_establishment}}
                          </li><li>Seller Address:{{$getsellerInfo[0]->comp_address_line1}} {{$getsellerInfo[0]->comp_address_line2}}</li>
                          <li>GTA Number:{{$getsellerInfo[0]->gta_number}}</li>
                          <li>Service Tax Number:{{$getsellerInfo[0]->service_tax_no}}</li>
                          <li>TIN Number:{{$getsellerInfo[0]->tin_no}}</li>
                          <li>Place of Business:{{$getsellerInfo[0]->place_of_business}}</li>
                          <li>Contact Number:{{$getsellerInfo[0]->mobile_number}}</li>
                          <li>Mobile Number:{{$getsellerInfo[0]->mobile_number}}</li>
                          <li>Email ID:{{$getsellerInfo[0]->apllicant_email_id}}</li>
                          <li>Order Total:Rs. {{$price}}/-</li>
                        </ul>
                      </div>
                    </div>
                    <div class="gsa-cell-1">
                      <h2>Seller Terms &amp; Conditions</h2>
                      <h2>Documentation</h2>
                      <p>Any commercial shipment picked up for transit on Indian Ground network should have the following documents:<br>
                        1. TIN / CST no. of shipper &amp; consignee in case of commercial transaction is mandatory in all states<br>
                        2. Shipper is under obligation to mention valid TIN / CST no of self and consignee on the commercial invoice and
                        regulatory paperwork at the time of handing over the shipment to Transport service provider<br>
                        3. Shipments consigned to individuals who do not have TIN no, a declaration from consignee / shipper that the goods are
                        not for sale and for personal consumption apart from other conditions as laid down in respective States VAT Regulations.<br>
                        4. E-waybill generation has been implemented in most of the states. Consignee/ shipper is expected to comply registration
                        process and follow online process for e-waybill generation</p>
                      <h2>Disclaimer:</h2>
                      <p>State VAT Rules &amp; Regulations are subject to change from time to time. Shippers / Consignees are, therefore, advised to seek
                        independent verification before tendering any consignment Regulatory paperwork is based on the Rules and Regulations of
                        the State concerned. Practice could be different than the Rules &amp; Regulations in some of the States<br>
                        For this transaction from Hyderabad to Chennai the buyer has to give the following documents:</p>
                      <div class="list-1">
                       <p><b>To be provided by seller</b></p>
                        <ul>
                          
                          <li>Lorry ReceiptI</li>
                          &nbsp;
                          &nbsp;
                        </ul>
                        <p><b>To be provided by buyer</b></p>
                        <ul>
                          
                          <li>Seller InvoiceI</li>
                          <li>Form X or 600I</li>
                          <li>FORM JJ /KK /LLI</li>
                          </ul>
                      </div>
                      @endforeach
                       <div class="text-right">
              <form method="post" action="/paymentPost/<?php echo $buyer_id;?>" name="subscription" id="subscription">
             
                <input type="hidden" name="amount" value="{{$price}}"  class="css-radiobtn">
                <input name="account_id" type="hidden" value="20150"/>
                <input name="secretkey" type="hidden" value="209b9b0bffc0ddafbbd0047a892b9dd3" size="35"/>
                <input name="return_url" type="hidden" size="60" value="http://www.logistiks.com/new/paymentBookResponse" />
                <input name="channel" type="hidden"  value="10" />
                <input name="reference_no" type="hidden" value="<?php echo time();?>" />
                <input name="currency" type="hidden" value="INR" />
                <input name="mode" type="hidden" value="LIVE" />
                <input name="description" type="hidden" value="Test Product" />
                <input name="name" type="hidden" value="Test Name" /></td>
                <input name="address" type="hidden" value="Test Address" /></td>
                <input name="city" type="hidden" value="Mumbai" />
                <input name="state" type="hidden" value="MH" />
                <input name="postal_code" type="hidden" value="400069" />
                <input name="country" type="hidden" value="IND" />
                <input name="email" type="hidden" value="test@test.com" />
                <input name="phone" type="hidden" value="2211112222" />
                <input name="paymetType" type="hidden" value="booknow" />
                  <input type="submit" id="acceptGsa" class="button-red-1" value="I ACCEPT">
              </form>
                </div>
                    </div>
                  </div>
                </div>
                <div class="text-right">
                  
                </div>
              </div>
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
<script>
    $('body').on('click','#acceptGsa',function(){
        
    });
</script>
@stop