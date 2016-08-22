@extends('layouts.default')

@section('content')
<!-- Don't forget to include jQuery ;) -->
  <script src="jquery.modal.js" type="text/javascript" charset="utf-8"></script>

<div class="container-1">
    <div class="tbl-1">
        <div class="row-1">
            <div class="cell-1 menu-width-1">
                <h2>SERVICES</h2>
                <ul id="new-accordian-menu">
                    <li><a href="#"></a></li>
                    <li><a href="#" class="act active">
                            <p>Full Truck Load</p>
                        </a></li>
                    <li><a href="#">
                            <p>Truck Haul</p>
                        </a></li>
                    <li><a href="#">
                            <p>Truck Lease</p>
                        </a></li>
                </ul>
            </div>
            <div class="cell-1">
                <div class="content-area-1">
                    <div class="bread-crumb-1">
                        <div class="tbl-1">
                            <div class="row-1">
                                <div class="cell-1"> <a href="#">Buyer </a> &gt; <a href="#">Services</a> &gt;  <a href="#">FTL Search List</a> </div>
                                <div class="cell-1 text-right"> 
                                    <div class="post-get-quote"><a href="#">Post &amp; Get Quote</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Content Start-->
                    <div class="bg-sec1">
                        <div class="post-master-1">
                            <div class="tbl-1">
                                <div class="row-1">
                                    <div class="cell-1">
                                        <ul>
                                            <li><a href="#">{{$data['from_loc']}} TO {{$data['to_loc']}}</a></li>
                                            
                                            <li><a href="#">DISPATCH DATE</a><br>{{dateFormateToDMY($data['dispatch_dt'])}}</li>
                                            <li><a href="#">DELIVERY DATE</a><br>{{dateFormateToDMY($data['delivery_dt'])}}</li>
                                            <li><a href="#">LOAD TYPE</a><br>{{$data['load_type']}}</li>
                                            <li><a href="#">VEHICLE TYPE</a><br>{{$data['veh_type']}}</li>
                                            <li><a href="#">QUANTITY</a><br>{{$data['qty']}}</li>
                                        </ul>
                                    </div>
                                    <div class="cell-1">
                                        <ul class="pull-right">
                                            <input type="button"  id="modify_search" name="modify_search"  value="Modify Search" class="modify-button" onclick="browserBack()">
                                            @if(!empty($searchResults))
                                            <!-- <li><a href="#" id="showhide-btn-3"><img src="/images/filter.png" width="14" height="10" alt="filter">Filters</a></li> -->
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-master-2" id="showhide-content-3" style="display: none;">
                            <div class="tbl-1">
                                <div class="row-1">
                                    <div class="cell-1">
                                        <form method="post" name="ftl_filter" id="ftl_filter" action="">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="buyer-search-5-table">
                                            <tbody><tr>
                                                    <th width="150" align="left" valign="top">Vehicle Type</th>
                                                    <th width="150" align="left" valign="top">Transit Days</th>
                                                    <th width="150" align="left" valign="top">Price Band</th>
                                                    <th width="150" align="left" valign="top">Payment Mode</th>
                                                    <th align="left" valign="top">Tracking</th>
                                                </tr>
                                                <tr>
                                                    <td align="left" valign="top">&nbsp;</td>
                                                    <td align="left" valign="top">&nbsp;</td>
                                                    <td align="left" valign="top">
                                                        <p>

                                                        </p><div id="slider-range" onchange="priceRange(this);" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 30%; width: 26.6667%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 30%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 56.6667%;"></span></div>
                                                        <input type="text" id="amount" readonly="" style="border:0; color:#4b4e54; font-weight:noenal; background:none;">
                                                        <p></p>
                                                        


                                                    </td>
                                                    <td align="left" valign="top">
                                                        <span>
                                                            <input type="checkbox" name="advance" id="advance" class="css-checkbox">
                                                            <label for="advance" class="checkbox_label">Advance</label>
                                                        </span> <span class="margin-left-1">
                                                            <input type="checkbox" name="credits" id="credits" class="css-checkbox">
                                                            <label for="credits" class="checkbox_label">Credits</label>
                                                        </span>

                                                    </td>
                                                    <td align="left" valign="top"> <span>
                                                            <input type="checkbox" name="mile_stone" id="mile_stone" value="mileStone" class="css-checkbox">
                                                            <label for="mile_stone" class="checkbox_label">Milestone</label>
                                                        </span> <span class="margin-left-1">
                                                            <input type="checkbox" name="top_sellers_orders" id="top_seller_orders" class="css-checkbox">
                                                            <label for="top_sellers_orders" class="checkbox_label">Top Sellers (Orders)</label>
                                                        </span>
                                                        <br>

                                                        <span>
                                                            <input type="checkbox" name="real_time" id="real_time" class="css-checkbox">
                                                            <label for="real_time" class="checkbox_label">Real Time</label>
                                                        </span> <span class="margin-left-1">
                                                            <input type="checkbox" name="to_sellers_rated" id="to_sellers_rated" class="css-checkbox">
                                                            <label for="to_sellers_rated" class="checkbox_label">Top Sellers (Rated)</label>
                                                        </span></td>
                                                </tr>
                                                
                                            </tbody></table>
                                        </form>

                                    </div>
                                    <div class="cell-1"><a href="#" id="close-btn-3"><img src="/images/close-1.png" alt="Close"></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-master-3">
                            <div class="post-master-tbl-padding">
                                <div class="post-master-tbl-main bold-upper">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-2">
                                        <tbody><tr>
                                                <td class="c-1">NAME <a href="#"><img src="/images/arrow-increase.png" width="12" height="8" alt="Arrow"></a></td>
                                                <td class="c-2">VALID FROM</td>
                                                <td class="c-3">valid to</td>
                                                <td class="c-4">PRICE(₹)</td>
                                                <td class="c-5">AVAILABILITY </td>
                                                <td class="c-6">CAPACITY</td>
                                                <td class="c-7"></td>
                                            </tr>
                                        </tbody></table>
                                </div>
                                 @if(!empty($searchResults))
                                <div class="ftlSearchList" id="ftlSearchList">
                                    <?php $i = 1; ?>
                                    @foreach($searchResults as $searchResult)
                                     <div class="post-master-tbl-main">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-2">
                                        <tbody><tr>
                                                <td class="c-1">{{$searchResult->name}}</td>
                                                <td class="c-2">@if($searchResult->dispatch_dt){{dateFormateToDMY($searchResult->dispatch_dt)}}@endif</td>
                                                <td class="c-3">@if($searchResult->delivery_dt){{dateFormateToDMY($searchResult->delivery_dt)}}@endif</td>
                                                <td class="c-4">{{$searchResult->price}}/-</td>
                                                <td class="c-5">{{$searchResult->load_commitment_per_day}} @if($searchResult->load_commitment_per_day == 1)Load @else Loads @endif</td>
                                                <td class="c-6">{{$searchResult->load_commitment_per_day}} @if($searchResult->load_commitment_per_day == 1)Load @else Loads @endif</td>
                                                <td class="c-7">
                                                    <a href="bookNow/<?php echo $searchResult->user_id .'/'. $searchResult->post_id; ?>" class="button-red-2 margin-tl-1">Book Now</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="c-1"><img src="/images/ellipse-1.png" alt="ellipse" width="36" height="6"></td>
                                                <td class="c-2">&nbsp;</td>
                                                <td class="c-3"><span></span></td>
                                                <td class="c-4">&nbsp;</td>
                                                <td class="c-5">&nbsp;</td>
                                                <td class="c-6">&nbsp;</td>
                                                <td align="right" valign="top">
                                                    <a href="#collapse<?php echo $i; ?>" class="details-link-2 nav-toggle">+ Details  </a><img class="newMessage" data_email_id="{{$searchResult->email_id}}" data_user_name="{{$searchResult->user_name}}" data_post_id="{{$searchResult->id}}" data_user_id="{{$searchResult->user_id}}" src="/images/message-icon3.png" width="12" height="9" alt="Message"></td>
                                            </tr>
                                        </tbody></table>

                                    <div id="collapse<?php echo $i; ?>" style="display:none">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-3">
                                            <tbody><tr>
                                                    <td class="c-1">POST TYPE</td>
                                                    <td class="c-2">LOAD TYPE</td>
                                                    <td class="c-3">VEHICLE TYPE</td>
                                                    <td class="c-4">TRANSIT DAYS</td>
                                                    <td class="c-5">TRACKING</td>
                                                    <td class="c-6">PAYMENT TERM</td>
                                                    <td class="c-7">T&amp;C</td>
                                                </tr>
                                                <tr>
                                                    <td class="c-1"><span class="c-3"><span>@if($searchResult->private_public_flag==0){{'Public'}} @elseif($searchResult->private_public_flag==1){{'Private'}}@endif</span></span></td>
                                                    <td class="c-2"><span class="c-3"><span>{{$searchResult->load_type}}</span></span></td>
                                                    <td class="c-3"><span>{{$searchResult->vehicle_type}}</span></td>
                                                    <td class="c-4"><span class="c-3"><span>{{$searchResult->transit_days}}</span></span></td>
                                                    <td class="c-5"><span class="c-3"><span>{{$searchResult->tracking_type}}</span></span></td>
                                                    <td class="c-6"><span class="c-3"><span>{{$searchResult->payment_term}}</span></td>
                                                    <td align="right" valign="top">&nbsp;</td>
                                                </tr>
                                            </tbody></table>
                                    </div>
                                     <?php $i++; ?>
                                     </div>
                                     @endforeach
                                </div>
                                @else
                                <div>
                                    <h2>No Records Found</h2>
                                </div>
                                @endif

                                
                               
                                
                                
                                <form name="ftlSearch" id="ftlSearch" method="post" action="#">
                                    <?php if(count($searchResults > 0)) { ?>
                                    <input type="hidden" name="from_loc" id="from_loc" value="{{$searchResults[0]->from_loc}}">
                                    <input type="hidden" name="to_loc" id="to_loc" value="{{$searchResults[0]->to_loc}}">
                                    <input type="hidden" name="dispatch_dt" id="dispatch_dt" value="{{$searchResults[0]->dispatch_dt}}">
                                    <input type="hidden" name="delivery_dt" id="delivery_dt" value="{{$searchResults[0]->delivery_dt}}">
                                    <input type="hidden" name="load_type" id="load_type" value="{{$data['load_type']}}">
                                    <input type="hidden" name="qty" id="qty" value="{{$searchResults[0]->qty}}">
                                    <input type="hidden" name="veh_type" id="veh_type" value="{{$data['veh_type']}}">
                                    <input type="hidden" name="vehicle_dimensions" id="vehicle_dimensions" value="20x8x12">
                                    <?php } ?>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<!-- Modal HTML embedded directly into document -->
  <div id="messageModel" style="display:none;">

      <form method="post" action="/newMail" name="sendMessage" id="newMessage">
<label for="firstname">FromAddress:</label>         <input type="text" name="from_user_name" id="from_user_name" value=""><br/>
<label for="surname">ToAddrss:</label>  <input type="text" name="to_user_name" id="to_user_name"><br/>
<input type="hidden" name="to_email" id="to_email" value="">
<input type="hidden" name="from_email" id="from_email" value="">
<label for="mobile">Subject:</label>    <input type="text" name="post_id" id="post_id"><br/>
<label for="work">Body: </label>        <textarea id="messageDescription" placeholder="Body *" name="messageDescription" cols="50" rows="10"></textarea><br/>
<br class="clear" />
<br />
<input type="submit" value="send" />
</form>
  </div>

<!-- <script src="/js/controller.js"></script> -->
<script src="/js/buyers/ftl_filter.js"></script>
<script>
function browserBack(){

    window.history.back();

}
</script>

@stop