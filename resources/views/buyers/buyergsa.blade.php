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
              <h2>Buyer Details</h2>
              <div class="list-1">
                @foreach($buyer_gsa as $key=>$value)
                <ul>
                  <li>Buyer Name:{{$value['buyer_details']->consignee_name}}</li>
                  <li>Consignment Type:Commercial</li>
                  <li>From Location:{{$value['seller_details']->from_loct}}</li>
                  <li>To Location:{{$value['seller_details']->to_loct}}</li>
                  <li>Dispatch Date:{{date("Y-m-d", strtotime($value['buyer_details']->consignment_pickup_date))}}</li>
                  <li>Delivery Date:</li>
                  <li>Load Type3:{{$value['seller_details']->load_type}}</li>
                  <li>Quantity:9</li>
                  <li>Vehicle Type:{{$value['seller_details']->vehicle_type}}</li>
                  <li>Location Type:{{$value['buyer_details']->from_loc}}</li>
                  <li>Destination Type:{{$value['buyer_details']->to_loc}}</li>
                  <li>Consignor Name:{{$value['buyer_details']->consignor_name}}</li>
                  <li>Consignor Mobile:{{$value['buyer_details']->consignor_mobile_number}}</li>
                  <li>Consignor Address:{{$value['buyer_details']->consignor_address}}</li>
                  <li>Consignee Name:{{$value['buyer_details']->consignee_name}}</li>
                  <li>Consignee Mobile:{{$value['buyer_details']->consignee_mobile_number}}</li>
                  <li>Consignee Address:ttt</li>
                  <br style="clear:both;"/>
                  <h2>Seller Details</h2>
                  <li>Seller Name:{{$value['buyer_details']->consignor_name}}</li>
                  <li>Year of ESTD.:2006
                  </li><li>Seller Address:{{$value['buyer_details']->consignor_address}}</li>
                  <li>GTA Number:123456</li>
                  <li>Service Tax Number:TS01</li>
                  <li>TIN Number:TS02</li>
                  <li>Place of Business:Hyderabad</li>
                  <li>Contact Number:{{$value['buyer_details']->consignor_mobile_number}}</li>
                  <li>Mobile Number:{{$value['buyer_details']->consignor_mobile_number}}</li>
                  <li>Email ID:{{$value['buyer_details']->consignor_email}}</li>
                  <li>Order Total:{{$value['buyer_details']->price}}/-</li>
                </ul>
                @endforeach
              </div>
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
<ul>
	<li>To be provided by sellerI</li>
<li>Lorry ReceiptI</li>
<li>To be provided by buyerI</li>
<li>Seller InvoiceI</li>
<li>Form X or 600I</li>
<li>FORM JJ /KK /LLI</li>
</ul>
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
@stop