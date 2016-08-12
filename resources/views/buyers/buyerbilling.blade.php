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
                <div class="cell-1"> <a href="#">Buyer </a> &gt; <a href="#">Services</a> &gt; <a href="#"> Order FTL</a> &gt; <a href="#"> FTL Multi</a></div>
                <div class="cell-1 text-right">
                  <div class="post-get-quote"><a href="#">Post &amp; Get Quote</a></div>
                </div>
              </div>
            </div>
          </div>
          <!--Content Start-->
          <div class="bg-sec1">
            <div class="column-1 border-bottom-1">
              <div class="text-right"><a href="#" class="normal-link" style="color:#ff0000;">Back to Orders</a></div>
              <br>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-text-left">
                <tbody><tr>
                  <td width="13%">VENDOR</td>
                  <td width="13%">ROUTES</td>
                  <td width="13%">DESPATCH DATE</td>
                  <td width="13%">DELIVERY DATE</td>
                  <td width="13%">LOAD TYPE</td>
                  <td width="13%">VEHICLE TYPE</td>
                  <td width="13%">QUANTITY</td>
                  <td align="right">Views 7</td>
                </tr>
                
                <tr>
                  <td height="30" valign="middle"><span>{{$data['seller_name']}}</span></td>
                  <td valign="middle"><span>{{$data['from_loc']}} - {{$data['to_loc']}}</span></td>
                  <td valign="middle"><span>{{$data['dispatch_dt']}}</span></td>
                  <td valign="middle"><span>{{$data['delivery_dt']}}</span></td>
                  <td valign="middle"><span>{{$data['load_type']}}</span></td>
                  <td valign="middle"><span>{{$data['veh_type']}}</span></td>
                  <td valign="middle"><span>{{$data['qty']}}</span></td>
                  <td align="right" valign="middle">&nbsp;</td>
                </tr>
              </tbody></table>
              <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" class="table-text-left">
                <tbody><tr>
                  <td width="13%">No. of LOADS</td>
                  <td width="13%">TRANSIT DAYS</td>
                  <td width="13%">PRICING</td>
                  <td width="13%">TRACKING</td>
                  <td width="13%">PAYMENT TERM</td>
                  <td width="13%">T&amp;C</td>
                  <td width="13%">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td height="30" valign="middle"><span>{{$data['no_of_loads']}}</span></td>
                  <td height="30" valign="middle"><span>{{$data['transit_days']}}</span></td>
                  <td height="30" valign="middle"><span>{{$data['price']}}</span></td>
                  <td height="30" valign="middle"><span>{{$data['tracking_type']}}</span></td>
                  <td height="30" valign="middle"><span>{{$data['payment_term']}}</span></td>
                  <td height="30" valign="middle">&nbsp;</td>
                  <td align="right" valign="top">&nbsp;</td>
                  <td align="right" valign="top">&nbsp;</td>
                </tr>
                
              </tbody></table>
            </div>
            <div class="post-master-1">
              <div class="tbl-1">
                <div class="row-1">
                  <div class="cell-1">
                    <ul>
                      <li><a href="#">NOTIFICATIONS</a></li>
                      <li><a href="#" class="relative-ps">
                        <div class="alert-3">5</div>
                        <img src="/images/message-icon2.png" width="17" height="13" alt="message">MESSAGES</a></li>
                      <li><a href="#" class="relative-ps">
                        <div class="alert-3">3</div>
                        <img src="/images/edit-2.png" width="16" height="16" alt="edit">INDENTS</a></li>
                      <li><a href="#" class="relative-ps ">
                        <div class="alert-3">1</div>
                        <img src="/images/globe-icon-1.png" alt="STATUS">STATUS</a></li>
                      <li><a href="#" class="active"><img src="/images/price-icon-1.png" alt="BILLING">BILLING</a></li>
                      <li><a href="#"><img src="/images/notification-icon1.png" width="14" height="17" alt="DOCUMENTATION">DOCUMENTS</a></li>
                    </ul>
                  </div>
                  <div class="cell-1">
                    <ul class="pull-right">
                      <li><a href="#" id="showhide-btn-3"><img src="/images/filter.png" width="14" height="10" alt="filter">Filters</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-master-2" id="showhide-content-3">
              <div class="tbl-1">
                <div class="row-1">
                  <div class="cell-1">
                    <ul>
                      <li><a href="#">Seller</a></li>
                      <li><a href="#">Date</a></li>
                      <li><a href="#">Vehicle Type</a></li>
                      <li><a href="#">Load Type</a></li>
                      <li><a href="#">From Location</a></li>
                      <li><a href="#">To Location</a></li>
                    </ul>
                  </div>
                  <div class="cell-1"><a href="#" id="close-btn-3"><img src="/images/close-1.png" alt="Close"></a> </div>
                </div>
              </div>
            </div>
            <div class="post-master-3">
              <div class="post-master-tbl-padding">
                <div class="post-master-tbl-main bold-upper">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-8">
                    <tbody><tr>
                      <td class="c-1">Seller</td>
                      <td class="c-2">FROM</td>
                      <td class="c-3">TO</td>
                      <td class="c-4">CONSIGNOR</td>
                      <td class="c-5">CONSIGNEE</td>
                      <td class="c-6">STATUS</td>
                      <td class="c-7"></td>
                    </tr>
                  </tbody></table>
                </div>
                <div class="post-master-tbl-main">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-8">
                    <tbody><tr>
                      <td class="c-1">{{$data['seller_name']}}</td>
                      <td class="c-2">{{$data['from_loc']}}</td>
                      <td class="c-3">{{$data['to_loc']}}</td>
                      <td class="c-4">{{$data['seller_name']}}</td>
                      <td class="c-5">{{$data['buyer_name']}}</td>
                      <td class="c-6">{{$data['order_status']}}</td>
                      <td class="c-7">&nbsp;</td>
                    </tr>
                    <tr>
                      <td class="c-1"></td>
                      <td class="c-2"><span>Spot</span></td>
                      <td class="c-3"></td>
                      <td class="c-4">&nbsp;</td>
                      <td class="c-5">&nbsp;</td>
                      <td class="c-6">&nbsp;</td>
                      <td align="right" valign="top">&nbsp;</td>
                    </tr>
                  </tbody></table>
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
<script src="/js/buyerbilling_files/main.js"></script>

@stop