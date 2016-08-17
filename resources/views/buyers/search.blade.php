@extends('layouts.default')
@section('content')
@include('errors.error');
<script language="javascript">
	var i= false;
	var j= false;
$(document).ready(function() {

$('#submit').attr('disabled','disabled');
$('#from_loc , #to_loc, #dispatch_dt,#delivery_dt,#qty').bind('change keyup', function() {
if(allFilled()) {
   $('#veh_type , #load_type').bind('change', function() {
	if(allSelected()) {
		    $('#submit').removeAttr('disabled')
		} else {
			$('#submit').attr('disabled','disabled');
	   }
      });
 } else {
		$('#submit').attr('disabled','disabled');
	}

    });
});
function allFilled() {
    var filled = true;
    $('body input').each(function() {
        if($(this).val() == '') filled = false;
    });
	 
    return filled;
}

function allSelected() {
	
    var selected = true;
      $('body select').each(function() {
		 alert("dfsdfsdf");
        if($(this).val() == '') selected = false;
    });
    return selected;
}
</script>
  <div class="menu">
  <div class="wrapper-1">
    <div class="tbl-1">
      <div class="row-1">
        <div class="cell-1">
          <div class="menu-nav-1">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Products</a></li>
            </ul>
          </div>
        </div>
        <div class="cell-1">
          <div class="menu-nav-2">
            <ul>
              <li><a href="#" class="select-1">Buyer</a></li>
              <li><a href="#">Help</a></li>
              <li><a href="#"><img src="/images/shoping-cart-1.png" alt="Shoping-cart"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
                <div class="cell-1"> Seller &gt; Services &gt;  FTL Search </div>
                <div class="cell-1"> </div>
              </div>
            </div>
          </div>
          <!--Content Start-->
          <div class="bg-sec1">
            <div class="tabs-1">
              <div class="tbl-2">
                <div class="row-2">
                  <div class="cell-2">
                    <div class="nav-setps">
                      <ul>
                        <li class="active-1"><span>1</span><a href="#">Search</a></li>
                        <li><span>2</span><a href="#">Book</a></li>
                        <li><span>3</span><a href="#">Orders</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="cell-2">
                    <div class="menu-nav-3">
                      <ul>
                        <li><a href="#"><img src="/images/xlsx.png" alt="xsls">Download</a></li>
                        <li><a href="#"><img src="/images/xlsx.png" alt="xsls">Upload</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column-1 field-main">
			
                {!! Form::open(array('url' => 'buyer/srchPost')) !!}
                <div class="grid-3">
                <ul>
                  <li><span class="input input-logistiks">
                     {!! $errors->first('from_loc', 'From Location Mandatory Field') !!}
                    <input class="animated-field animated-field-logistiks" type="text" id="from_loc" placeholder="From Location *" name="from_loc">
                  <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="from_loc"> <span class="animated-label-content animated-label-content-logistiks"></span></label>
                 </span></li>
                <li><span class="input input-logistiks">
                     {!! $errors->first('to_loc', 'To Location Mandatory Field') !!}
                    <input class="animated-field animated-field-logistiks" type="text"  id="to_loc" placeholder="To Location *" name="to_loc">
                  <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="to_loc"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
                    </span></li>
                  <li>
				    {!! $errors->first('dispatch_dt', 'Dispatch Date Mandatory Field') !!}
                    <input type="text" class="datepicker  calendar form-control" placeholder="Dispatch Date* (Flex dates option)"  id="dispatch_dt" name="dispatch_dt">
												<input type="hidden" name="is_flexiable_hidden" id="is_flexiable_hidden" value="0">
                  </li>
                </ul>
                    
              </div>
                
              <div class="grid-3">
                <ul>
                  <li>
				  {!! $errors->first('delivery_dt', 'Delivery Date Mandatory Field') !!}
                  <input type="text" class="datepicker  calendar form-control"   placeholder="Delivery Date * (Flex dates option)" id="delivery_dt" name="delivery_dt">
				  							<input type="hidden" name="is_flexiable_hidden1" id="is_flexiable_hidden1" value="0">
                  </li>
                  <li>
                  <div class="select-box1">
                     {!! $errors->first('load_type', 'Load Type Mandatory Field') !!}
                      <select name="load_type" id="load_type" required="required">
					    <option value="" >Load Type * </option>
                        @foreach($data['loadTypesData'] as $loadTD)
                          <option value="<?php echo $loadTD->id;?>"><?php echo $loadTD->load_type; ?></option>
                        @endforeach
                      </select>
					  {{ $errors->first('load_type') }}
                    </div>
                 </li>
                  <li class="relative-ps">
                  <div class="uom">UoM</div>
                     <span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="qty" name="qty" required="required" placeholder="Quantity *">
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks"></span> </label>
                    </span>
                  </li>
                </ul>
              </div>
              
              <div class="grid-3">
                <ul>
                  <li>
                      <div class="select-box1">
                       {!! $errors->first('veh_type', 'Vehicle Type Mandatory Field') !!}
                      <select name="veh_type" id="veh_type" required="required">
					    <option value="" >Vehicle Type * </option>
                        @foreach($data['vehicleTypesData'] as $vehicleTD)
                          <option value="<?php echo $vehicleTD->id;?>"><?php echo $vehicleTD->vehicle_type; ?></option>
                        @endforeach
                      </select>
					  {{ $errors->first('veh_type') }}
                    </div>
                    
                  </li>
                  <li>
                    <p class="normal-font-1 margin-top-1">Vehicle Dimensions*  20x8x12</p>
                  </li>
                  <li>
                    
                  </li>
                </ul>
              </div>
			
               </div>
            <div class="column-2">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody><tr>
                  <td align="right" valign="middle"></td>
                  <td width="130" align="right" valign="middle">
				  <?php echo Form::submit('Search',array('class' => 'button-red-1','id'=>'submit','name'=>'submit')); ?>
				  </td>
                </tr>
              </tbody></table>
            </div>
            
            {!! Form::close() !!}
            
            
          </div>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>

<!--<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div> -->
@stop
