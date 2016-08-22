@extends('includes.registrationheader')
@section('content')
<div class="container-1 gray-bg-1">
  <div class="registration-main-1" style="width:900px; margin:25px auto">
    <div style="width:580px; margin:0 auto">
      <h1>Thank you for <span>REGISTRATION</span></h1>
      <div id="uservalidation" >
          <p></p>
      </div> 
      <form action="/saveMarketplaceReg" id="marketformId" name="marketformId" autocomplete="off">
      @foreach($registration_details as $details)
      <div class="text-right ask-me-2"><a href="/memberRegistration" class="button-white-1">Ask me later</a></div>
      <div class="registration-individual-row1">
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_name" name="business_name" maxlength="50" placeholder="Name of the Business">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_name"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
          <input type="hidden" id="registered_id" name="registered_id" value="{{$registered_id}}">
      </div>
      <div class="registration-individual-row1">
        <div class="sec-1">
          <div class="select-box1">
            <select id="business_const" name="business_const">
              <option value="">Constitution of Business</option>
              <option value="Proprietorship">Proprietorship</option>
              <option value="Private Limited">Private Limited</option>
              <option value="Public Limited">Public Limited</option>
              <option value="MNC">MNC</option>
              <option value="Partnership Firm">Partnership Firm</option>
              <option value="Government/Quas Government">Government/Quas Government</option>
              <option value="HUF">HUF</option>
              <option value="Partnership Firm">Partnership Firm</option>
              <option value="Others">Others</option>
            </select>
          </div>
        </div>
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="uin_no" name="uin_no" onblur="validateId()" style="display:none;" placeholder="UIN Number">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-1"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
      </div>
      <div class="registration-individual-row1">
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_place" name="business_place" placeholder="Principal Place of Business">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-1"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_pincode" name="business_pincode" placeholder="Pincode*">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_pincode"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
      </div>
      <div class="registration-individual-row1">
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_location" name="business_location" placeholder="Location ">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_location"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_city" name="business_city" placeholder="City">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_city"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
      </div>
      <div class="registration-individual-row1">
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_district" name="business_district"  placeholder="District">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_district"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_state" name="business_state" placeholder="State">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_state"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
      </div>
      <div class="registration-individual-row1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="address1" name="address1" placeholder="Address Line 1*" maxlength="50">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="address1"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
        </span> </div>
      <div class="registration-individual-row1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="address2" name="address2" placeholder="Address Line 2*"  maxlength="50">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="address2"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
        </span> </div>
      <div class="registration-individual-row2">
        <table width="100%" border="0" cellspacing="0" id="year_est" cellpadding="0" class="ri-table-2">
          <tbody><tr>
            <td align="left" valign="bottom">Year of Establishment*</td>
            <td width="80" align="left" valign="bottom"><div class="select-box2">
                
                <select name="year_of_est" id="year_of_est" >
                <option value="">Year of Establishment</option>  
                <option value="2016">2016</option>
                 <option value="2015">2015</option>
                  <option value="2014">2014</option>
                </select>
              </div></td>
            <td width="150" align="left" valign="bottom">&nbsp;</td>
            <td width="50" align="left" valign="bottom">&nbsp;</td>
          </tr>
        </tbody></table>
      </div>
      <div class="registration-individual-row2">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="myTable" class="ri-table-2">
          <tbody><tr id="annual_turnover">
            <td align="left" valign="bottom">Annual Turn over</td>
            <td width="80" align="left" valign="bottom"><div class="select-box2">
                <select name="annual_turnover[]" id="annual_turnover[]" width="200%">>
                  <option value="turn_over_current_year">2016-2015</option> 
                  <option value="turn_over_Year1">2015-2014</option>
                  <option value="turn_over_Year2">2014-2013</option>
                  <option value="turn_over_Year3">2013-2012</option>
                  <option value="turn_over_year4">2012-2011</option>
                </select>
              </div></td>
            <td width="150" align="left" valign="bottom"><input type="text" id="annual_turnvalue[]" name="annual_turnvalue[]" class="text-fileld" placeholder="Rs in Lakhs"></td>
            <td width="50" align="right" valign="bottom"><input type="button" id="increment" value="Add" onclick="autoIncrement()"></td>
          </tr>
        </tbody></table>
      </div>
      <div class="registration-individual-row2">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="ri-table-2">
          <tbody><tr>
            <td align="left" valign="bottom">Contact Person</td>
            <td width="140" align="left" valign="bottom"><input type="text" class="text-fileld" id="contact_fname" name="contact_fname" placeholder="First Name" maxlength="20"></td>
            <td width="140" align="left" valign="bottom"><input type="text" class="text-fileld" id="contact_lname" name="contact_lname"  placeholder="Last Name" maxlength="30"></td>
          </tr>
        </tbody></table>
      </div>
      @endforeach
      <div class="registration-individual-row1">
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_designatn" name="business_designatn" placeholder="Designation">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_designatn"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_emailId" name="business_emailId" placeholder="Business Email ID*">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_emailId"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
      </div>
      
      <div class="registration-individual-row1">
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_mobile_no" name="business_mobile_no" placeholder="Mobile Number* (Official)">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_mobile_no"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_landline" name="business_landline" placeholder="Land line No. with STD Code*">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_landline"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
      </div>
      
      <h3>Business Info*</h3>
      <div class="registration-individual-row1">
        <div class="sec-1">
          <div class="select-box1">
            <select name="business_type_id" id="business_type_id">
              <option value="">Business Type*</option>
              @foreach($getbusiness['buisness_types'] as $bus_value)
              <option value="{{$bus_value->id}}">{{$bus_value->buisness_type}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="sec-1">
          <div class="select-box1">
            <select name="industry_type_name" id="industry_type_name">
              <option value="">Industry Type*</option>
              @foreach($getbusiness['industry_types'] as $ind_value)
              <option value="{{$ind_value->id}}">{{$ind_value->industry_type}}</option>
              @endforeach
              </select>
          </div>
        </div>
      </div>
      <div class="registration-individual-row1">
        <div class="sec-1">
          <div class="select-box1">
            <select name="sector_type" id="industry_type">
              <option value="">Sector Type*</option>
              <option value="1">two</option>
              <option value="2">three</option>
            </select>
          </div>
        </div>
        <div class="sec-1">
          <div class="select-box1">
            <select name="employee_strn" id="employee_strn">
              <option value="">Employee Strength</option>
              <option value="1">two</option>
              <option value="2">three</option>
            </select>
          </div>
        </div>
      </div>
      <div class="registration-individual-row1">
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="business_pan" name="business_pan" onblur="validateId()" placeholder="PAN (Business)*">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="business_pan"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
        <div class="sec-1"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="others_name" name="others_name" placeholder="Others (Specify)" maxlength="20">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="others"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
          </span> </div>
      </div>
      <div class="clearfix"></div>
      <div class="registration-individual-row1">
        <div class="sec-1" style="float:right"> <span class="input input-logistiks">
          <input class="animated-field animated-field-logistiks" type="text" id="others_text" name="others_text" maxlength="20">
          <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="others_text"> <span class=""></span> </label>
          </span> </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <br>
    
    <!-- --> 
    <!--Start-->
    <div class="registration-tabs-main">
    
    <div id="tabs-2" class="ui-tabs ui-corner-all ui-widget ui-widget-content">
      <div class="registration-tabmenu">
        <ul role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
          <li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="false" aria-expanded="false" id="tab-1" onclick="getPaging(this.id)"><a href="http://psmprojects.net/logistiks/ver8/registration/Registration-Individual-4.html#tabs-1" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1">Services offered</a></li>
          <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="tabs-2" aria-labelledby="ui-id-2"  aria-selected="true" aria-expanded="true" id="tab-2" onclick="getPaging(this.id)"><a href="#tabs-2" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2">Services required</a></li>
          <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false" id="tab-3" onclick="getPaging(this.id)"><a href="#tabs-3" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3">Product offered</a></li>
          <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-4" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false" id="tab-4" onclick="getPaging(this.id)"><a href="#tabs-4" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4">Product required</a></li>
        </ul>
      </div>
      <div class="registration-content ui-tabs-panel ui-corner-bottom ui-widget-content" id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
        <h3>Services offered </h3>
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="ri-table-3">
          <tbody>
            <tr>
              <td>
            <h4>Transportation</h4>
          </td>
           <td>
            <h4>Vehicle</h4>
          </td>
          <td>
            <h4>Relocation</h4>
          </td>
          </tr>
            <tr>

              <td><b>Road</b></td>
              <td><b>Vehicle_type</b></td>
              <td><b>Home</b></td>
              <td><b>Office</b></td>


            <tr>
            <td>
              @foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Road") 
            <input type="checkbox" name="off_road{{$service_value->sub_type_1}}" id="off_road{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_road" >{{$service_value->sub_type_1}}</label>
            <br>
           @endif
           @endforeach</td>
           <td> @foreach($getservices as $service_value)
           @if($service_value->type == "Vehicle" && $service_value->sub_type == "Vehicle_type") 
            <input type="checkbox" name="off_veh{{$service_value->sub_type_1}}" id="off_veh{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="off_veh" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
           <td>@foreach($getservices as $service_value)
           @if($service_value->type == "Relocation" && $service_value->sub_type == "Home") 
            <input type="checkbox" name="req_relocation{{$service_value->sub_type_1}}" id="req_relocation{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_relocation" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
           
           <td> @foreach($getservices as $service_value)
           @if($service_value->type == "Relocation" && $service_value->sub_type == "Office") 
            <input type="checkbox" name="req_relocation{{$service_value->sub_type_1}}" id="req_relocation{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_relocation" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
           <td><b>Rail</b></td>
           <tr>
            <td>@foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Rail") 
            <input type="checkbox" name="off_rail{{$service_value->sub_type_1}}" id="off_rail{{$service_value->id}}" value="{{$service_value->id}}">&nbsp;
            <label for="off_rail" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
           <td><b>Ocean</b></td>
           <tr>
            <td>@foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Ocean") 
            <input type="checkbox" name="off_ocean{{$service_value->sub_type_1}}" id="off_ocean{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="off_ocean" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
           <td><b>Air</b></td>
           <tr>
            <td>@foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Air") 
            <input type="checkbox" name="off_air{{$service_value->sub_type_1}}" id="off_air{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="off_air" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
          </tr>
          <tr>
            <td><b>Intracity</b></td>
            <tr>
            <td>  @foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Intracity") 
            <input type="checkbox" name="off_intracity{{$service_value->sub_type_1}}" id="off_intracity{{$service_value->id}}" value="{{$service_value->id}}">&nbsp;
            <label for="off_intracity" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
           <td><b>Courier</b></td>
           <tr>
            <td> @foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Courier") 
            <input type="checkbox" name="off_courier{{$service_value->sub_type_1}}" id="off_courier{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="off_courier" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
          </tr>
         


         </tbody></table>
      </div>
       <div class="registration-content ui-tabs-panel ui-corner-bottom ui-widget-content" id="tabs-2" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
        <h3>Services Required</h3>
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="ri-table-3">
          <tbody>
            <tr>
              <td>
            <h4>Transportation</h4>
          </td>
           <td>
            <h4>Vehicle</h4>
          </td>
          <td>
            <h4>Relocation</h4>
          </td>
          </tr>
            <tr>

              <td><b>Road</b></td>
              <td><b>Vehicle_type</b></td>
              <td><b>Home</b></td>
              <td><b>Office</b></td>


            <tr>
            <td>
              @foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Road") 
            <input type="checkbox" name="req_road{{$service_value->sub_type_1}}" id="req_road{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_road" >{{$service_value->sub_type_1}}</label>
            <br>
           @endif
           @endforeach</td>
           <td> @foreach($getservices as $service_value)
           @if($service_value->type == "Vehicle" && $service_value->sub_type == "Vehicle_type") 
            <input type="checkbox" name="req_veh{{$service_value->sub_type_1}}" id="req_veh{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_veh" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
           <td>@foreach($getservices as $service_value)
           @if($service_value->type == "Relocation" && $service_value->sub_type == "Home") 
            <input type="checkbox" name="req_relocation{{$service_value->sub_type_1}}" id="req_relocation{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_relocation" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
           
           <td> @foreach($getservices as $service_value)
           @if($service_value->type == "Relocation" && $service_value->sub_type == "Office") 
            <input type="checkbox" name="req_relocation{{$service_value->sub_type_1}}" id="req_relocation{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_relocation" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
           <td><b>Rail</b></td>
           <tr>
            <td>@foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Rail") 
            <input type="checkbox" name="req_rail{{$service_value->sub_type_1}}" id="req_rail{{$service_value->id}}" value="{{$service_value->id}}">&nbsp;
            <label for="req_rail" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
           <td><b>Ocean</b></td>
           <tr>
            <td>@foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Ocean") 
            <input type="checkbox" name="req_ocean{{$service_value->sub_type_1}}" id="req_ocean{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_ocean" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
           <td><b>Air</b></td>
           <tr>
            <td>@foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Air") 
            <input type="checkbox" name="req_air{{$service_value->sub_type_1}}" id="req_air{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_air" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
          </tr>
          <tr>
            <td><b>Intracity</b></td>
            <tr>
            <td>  @foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Intracity") 
            <input type="checkbox" name="req_intracity{{$service_value->sub_type_1}}" id="req_intracity{{$service_value->id}}" value="{{$service_value->id}}">&nbsp;
            <label for="req_intracity" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
           <td><b>Courier</b></td>
           <tr>
            <td> @foreach($getservices as $service_value)
           @if($service_value->type == "Transportation" && $service_value->sub_type == "Courier") 
            <input type="checkbox" name="req_courier{{$service_value->sub_type_1}}" id="req_courier{{$service_value->id}}" value="{{$service_value->id}}" >&nbsp;
            <label for="req_courier" >{{$service_value->sub_type_1}}</label>
              <br>
           @endif
           @endforeach</td>
         </tr>
          </tr>
         


         </tbody></table>
      </div>
      <div id="tabs-2" aria-labelledby="ui-id-2" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;"></div>
       <div id="tabs-3" aria-labelledby="ui-id-3" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;"></div>
        <div id="tabs-4" aria-labelledby="ui-id-4" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="true" style="display: none;"></div>
      
      
      
      </div>
    </div>
    <div class="registration-tabs-main-2">
      <table width="75%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td width="200" valign="bottom">Are you GTA Registered</td>
          <td width="80" valign="bottom"><input type="radio" name="gta" id="gta_yes" value="">
            <label for="gta_yes" >Yes</label></td>
          <td width="80" valign="bottom"><input type="radio" name="gta" id="gta_no" value="" checked="checked">
            <label for="gta_no" >No</label></td>
          <td valign="bottom"><input type="text" id="gta_number" name="gta_number" class="text-fileld" placeholder="GTA Number" style="display:none;" ></td>
        </tr>
        <input type="hidden" id="is_seller" name="is_seller" value='0'>
      </tbody></table>
      <br>
      <table width="60%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td valign="bottom"><input type="text" class="text-fileld" id="service_taxno"  name="service_taxno" value="" placeholder="Service Tax No.*" style="display:none;"></td>
          <td width="20" valign="bottom">&nbsp;</td>
          <td valign="bottom"><input type="text" class="text-fileld" id="tin_no"  name="tin_no" placeholder="TIN No."></td>
        </tr>
      </tbody></table>
      <br>
      <h4>Bank Details</h4>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" class="bank-detailes-1">
        <tbody><tr>
          <td><input type="text" id="bank_name" name="bank_name" class="text-fileld" placeholder="Bank Name"></td>
          <td><input type="text" id="bank_branch" name="bank_branch" class="text-fileld" placeholder="Bank Branch"></td>
          <td><input type="text" id="ifsc_code" name="ifsc_code" class="text-fileld" placeholder="IFSC Code"></td>
        </tr>
        <tr>
          <td><input type="text" id="account_type" name="account_type"  class="text-fileld" placeholder="Account Type"></td>
          <td><input type="text" id="account_no" name="account_no" class="text-fileld" placeholder="Account Number"></td>
          <td><input type="text" id="account_branch" name="account_branch" class="text-fileld" placeholder="Branch"></td>
        </tr>
      </tbody></table>
      <div class="registration-individual-row2">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody><tr>
            <td><input type="checkbox" name="terms_check" id="terms_check" class="">
              <label for="checkbox_1" class="">Logistiks.com Terms and conditions</label></td>
            <td align="right"><input type="submit" id="submit_id" name="submit_id" class="button-red-1" value="Submit" style="display:none;"></td>
          </tr>
        </tbody></table>
      </div>
    </div>
    </form>
    <!--End--> 
    
  </div>
</div>
<script src="/js/text-filed-1-shartcode.js"></script> 
<script src="/js/main.js"></script>
<script>
  $(document).ready(function () {
        
  $('#marketformId').validate({ 
        rules: {

           business_pincode: {
                required: true,
                pincode:true
            },
            address1: {
                required: true,
            
            },
            address2: {
                required: true,
               
            },
            year_of_est: {
                required: true,
              
            },
             business_emailId: {
                required: true,
                email:true
                
            },
            business_mobile_no: {
                required: true,
                minlength: 10,
                maxlength: 12
                
            },
             business_landline: {
                required: true,
                
                
            },
            business_type_id: {
                required: true
                
            },
            industry_type_name: {
                required: true,
                
            },
             sector_type: {
                required: true,
                
            },
             business_pan: {
              required :true,
              panCard:true
            
            },

            service_taxno: {

              required: true
                
            } ,
             
            business_landline: {

                integer : true,
                
            } ,
            
            ifsc_code: {

              alphanumeric : true,
                
            } ,
            
            contact_fname: {

              lettersonly : true,
                
            } ,
            contact_lname: {

              lettersonly : true,
                
            } ,
            tin_no: {
                
                required:true,
                tinNumber:true
            },

          account_no: {

              required:true

          }
            
        },
       /*     
        submitHandler: function (marketformId) {
            return false;
        }*/
      
        
    });

 $('#business_const').change(function(){
   var uin_no = document.getElementById('uin_no')

    if($(this).val()=="Private Limited" || $(this).val()=="Public Limited"){

      uin_no.style.display = 'block';

    }
    else{

      uin_no.style.display = 'none';

    }

 });

     jQuery.validator.addMethod("panCard", function(value, element) {
      return this.optional(element) || /^[A-Z]{4}\d{5}[A-Z]{1}$/.test(value);
    }, "Please enter valid Pan number"); 



     $("#contact_fname,#contact_lname,#others_name,#business_designatn,#business_name,#business_place").keydown(function (e) {
      if (e.shiftKey || e.ctrlKey || e.altKey) {
       e.preventDefault();
      } else {
       var key = e.keyCode;
       if (!((key == 8) || (key == 32) || (key == 38) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
        e.preventDefault();
       }
      }
     });

     jQuery.validator.addMethod("businessName", function(value, element) {
  return this.optional(element) || /^\w+$/.test(value);
}, "Letters and underscores only please");  



     $('#business_pincode').blur(function(){
          
          var pincode = $('#business_pincode').val();

      $.ajax
            (
              {
                url: '/getlocationdetails',
                type: "GET", 
                data: "pincode=" + pincode,
                success: function(result)
                {
                    
                   $('#business_location').val(result[0].village);
                   $('#business_city').val(result[0].division_name);
                   $('#business_district').val(result[0].district_name);
                   $('#business_state').val(result[0].state_name);

                   
                },
                error:function()
                {
                  //console.log("AJAX request was a failure");
                }   
              }
            );

    });  


    $("input[name='gta']").change(function(id){
        
        var gta_number = document.getElementById('gta_number');

        var service_taxno = document.getElementById('service_taxno');
        
        if($("input[id='gta_yes']:checked").length == 1){
          
          gta_number.style.display = 'block';

          service_taxno.style.display = 'block';
          
        }
        else{
          gta_number.style.display = 'none';

          service_taxno.style.display = 'none';
        }
    });


    $("#business_mobile_no,#business_landline").keypress(function (e) {
      
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
               return false;
        }

   });

});

    var i=0;

    function autoIncrement(){


       $("#myTable tr:first").clone().find("input").each(function() {
        $(this).val('').attr('id', function(_, id) { return id + i });
        $(this).val('').attr('value', function(_, value) { return value + 'Add'});
        }).end().appendTo("#myTable");
        i++;

      
    }

      function getPaging(tab_id){
        
         if(tab_id == 'tab-1')
          var is_seller = 1;

          if(tab_id == 'tab-2')
          var is_seller = 0;

          $('#is_seller').val(is_seller);      

      }



    function validateId(){

        if($('#uin_no').val() != "")
        var data = "uin_no=" + $('#uin_no').val();
          
        if($('#business_pan').val() != "")
        var data = "business_pan=" + $('#business_pan').val();

        ajaxCall(data);


    }

      function ajaxCall(data_val){

        $.ajax
              (
                {
                  url: '/validateId',
                  type: "GET", 
                  data: data_val,
                  success: function(result)
                  {
                        
                    if($('#uin_no').val() != ""){
                    
                    if(result == 'true') {
                      
                    $("#uservalidation > p").text('UIN Already Exists');

                      var e = document.getElementById('submit_id');
                      e.style.display = 'none';
                     
                     }
                     else{
                      
                      $("#uservalidation > p").text(' ');

                      var e = document.getElementById('submit_id');
                      e.style.display = 'block';

                     }
                     
                     }

                    if($('#business_pan').val() != ""){
                   
                    if(result == 'true') {

                     $("#uservalidation > p").text('Business Pan Already Exists');

                      var e = document.getElementById('submit_id');
                      e.style.display = 'none'; 

                     }
                     else{

                      $("#uservalidation > p").text(' ');

                      var e = document.getElementById('submit_id');
                      e.style.display = 'block';

                     }
                     
                    }

                     
                  },
                  error:function()
                  {
                    //console.log("AJAX request was a failure");
                  }   
                }
              );

      }

    $('#terms_check').on('click',function(){

    /*  if($("#mobile_number").valid() ==  true $("#business_pincode").valid() ==  true $("#address1").valid() ==  true $("#address2").valid() ==  true $("#year_of_est").valid() ==  true $("#business_emailId").valid() ==  true $("#business_mobile_no").valid() ==  true $("#business_landline").valid() ==  true $("#business_type_id").valid() ==  true $("#industry_type_name").valid() ==  true $("#sector_type").valid() ==  true $("#business_pan").valid() ==  true $("#service_taxno").valid() ==  true$("#business_landline").valid() ==  true$("#ifsc_code").valid() ==  true$("#contact_fname").valid() ==  true $("#contact_lname").valid() ==  true $("#tin_no").valid() ==  true $("#account_no").valid() == true)
      {
        alert('here');
      }*/
      /*if( == true )
      {
        alert('here');
      }
      */
      var test=$('input[name="terms_check"]:checked').length ;
    
      if(test ==1){
        
        var e = document.getElementById('submit_id');
        e.style.display = 'block';
      
      }
      else{
       
        var e = document.getElementById('submit_id');
        e.style.display = 'none';

      }

      
    });
</script>


@stop
