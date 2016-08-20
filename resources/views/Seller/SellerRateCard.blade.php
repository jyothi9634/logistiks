@extends('layouts.default')
@section('content');

<script language="javascript">
    
    
$(document).ready(function() {
 
    $("#submit").on('click',function(){
       
     
        var check1 = $('#checkbox1').is(":checked");
        var check2 = $('#checkbox2').is(":checked");
        var check3 = $('#checkbox3').is(":checked");
        var check4 = $('#checkbox_5').is(":checked");
        var check5 = $('#checkbox_6').is(":checked");
            if( check1 === true || check2 === true || check3 === true){
                    console.log("hi");
            }else{
                alert('please select the payment terms ');
                   
            }
        if( check4 === true){
                    console.log("hi");
            }else{
                alert('please select the Post type');
                   
            }
        if( check5 === true ){
                    console.log("hi");
            }else{
                alert('please agree for Terms and conditions ');
                   
            }
    });
       
     

});
</script>

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
                <div class="cell-1"> Seller > Services >  FTL Post </div>
                <div class="cell-1"> </div>
              </div>
            </div>
          </div>
          <!--Content Start-->
             <?php echo Form::open(array('url' => '/check')); ?>
          <div class="bg-sec1">
            <div class="tabs-1">
              <div class="tbl-2">
                <div class="row-2">
                  <div class="cell-2">
                    <div class="nav-setps">
                      <ul>
                        <li class="active-1"><span>1</span><a href="#" >Post</a></li>
                        <li><span>2</span><a href="#">Enquiries</a></li>
                        <li><span>3</span><a href="#">Orders</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="cell-2">
                    <div class="menu-nav-3">
                      <ul>
                        <li><a href="#"><img src="../images/xlsx.png" alt="xsls">Download</a></li>
                        <li><a href="#"><img src="../images/xlsx.png" alt="xsls">Upload</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column-1 field-main">
              <div class="grid-3">
                <ul>
                  <li><span class="input input-logistiks">
                        <input class="animated-field animated-field-logistiks post_title" type="text" id="post_title" name="post_title" pattern="[a-zA-Z ]{1,50}" placeholder="Title" required/>
                        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class=""></span> 
                      </label>
                    </span></li>
                  <li>
                    <input type="text" class="datepicker dispatch_dt" name='dispatch_dt' id="dispatch_dt" placeholder="Valid From *" required>
                  </li>
                  <li> 
                    <input type="text" class="datepicker delivery_dt" name='delivery_dt' id="delivery_dt"  placeholder="Valid To *" required>
                  </li>
                </ul>
              </div>
              <div class="grid-3">
                <ul>
                  <li><div class="select-box1 frm_loc">
                    <select name="frm_loc" id="combobox" required>
                        <option value="">From Location* (Auto Fill)</option>
                        <option value="52176">A F Station Yelahanka S.O</option>
                        <option value="52177">Agram S.O</option>
                        <option value="52178">Air Force Hospital S.O</option>
                        <option value="52179">Amruthahalli B.O</option>
                        <option value="52181">Arabic College S.O</option>
                    </select>
                    </div></li>
                  <li><div class="select-box1 to_loc" >
                    <select name="to_loc" id="combobox"  required>
                        <option value="">To Location* (Auto Fill)</option>
                        <option value="52176">A F Station Yelahanka S.O</option>
                        <option value="52177">Agram S.O</option>
                        <option value="52178">Air Force Hospital S.O</option>
                        <option value="52179">Amruthahalli B.O</option>
                        <option value="52181">Arabic College S.O</option>
                      </select>
                    </div></li>
                  <li>
                    <div class="select-box1 load_typ">
                      <select name="load_typ"  class="load_typ" required>
                        <option value="">Load Type* (Auto Fill)</option>
                        @foreach($data['loadTypesData'] as $load)
                          <option value="<?php echo $load->id;?>"><?php echo $load->load_type; ?></option>
                        @endforeach
                      </select>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="grid-3">
                <ul>
                  <li><div class="select-box1 veh_typ">
                      <select name="veh_typ"  class="veh_typ" required> 
                        <option value="">Vehicle Type* (Auto Fill)</option>
                        @foreach($data['vehicleTypesData'] as $veh)
                          <option value="<?php echo $veh->id;?>"><?php echo $veh->vehicle_type; ?></option>
                        @endforeach
                      </select>
                    </div></li>
                  <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks transit_days" type="text" id="input-4" name="transit_days" pattern="[0-9]*" maxlength="3" placeholder="Transit Days" required/>
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class=""></span> </label>
                    </span></li>
                  <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks price" type="text" id="input-4" 
                           name="price"  pattern="[0-9]*" maxlength="5"  placeholder="Price*" required/>
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4" > <span class=""></span> </label>
                    </span></li>
                </ul>
              </div>
              <div class="grid-3">
                <ul>
                  <li>
                    <p class="normal-font-1 margin-top-1">Vehicle Dimensions*  20x8x12</p>
                  </li>
                  <li>
                    <span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks load_limit" type="text" id="input-4" name="load_limit" pattern="[0-9]*" maxlength="3"  placeholder="Load Commitment Limit per day*" required/>
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class=""></span> 
                      </label>
                    </span>
                  </li>
                  <li>
                    <div class="select-box1 book_cutoff" >
                      <select name="book_cutoff" required>
                        <option value="">Booking Cutoff Time</option>
                        <option value="1">before 8 am</option>
                        <option value="2">8am-10am</option>
                        <option value="3">10am-12pm</option>
                        <option value="4">12 noon- 14pm</option>
                      </select>
                    </div>
                  </li>
                </ul>
              </div>
            
            </div>
            <div class="column-2">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
<!--                  <td align="right" valign="middle"><a href="#" class="link-1" id="showhide-btn-2">Discounts</a></td>-->
                  <td width="130" align="right" valign="middle"><input type="button" value="ADD ROUTE" id="addroute" class="button-gray-1"></td>
                </tr>
              </table>
            </div>
            <div class="display-none" id="showhide-content-2">
              <div class="column-1">
                <div class="grid-5">
                  <ul>
                    <li><span class="input input-logistiks">
                      <input class="animated-field animated-field-logistiks" type="text" id="input-4"  />
                      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Name (Auto Fill)</span> </label>
                      </span></li>
                    <li><div class="select-box1 discount_type">
                    <select name="discount_type" id="combobox" >
                        <option value="">Discount Type* (Auto Fill)</option>
                        <?php foreach($data['discount'] as $dis) { print_r($dis);?>
                          <option value="<?php echo $dis->id;?>"><?php echo $dis->discount_type; ?></option>
                        <?php } ?>
                      </select>
                    </div></li>
                    <li><span class="input input-logistiks">
                      <input class="animated-field animated-field-logistiks" type="text" id="input-4" pattern="[1-9]" placeholder="Discount"/>
                      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"><span class=""></span></label>
                      </span></li>
                    <li><span class="input input-logistiks">
                      <input class="animated-field animated-field-logistiks" type="text" id="input-4"  placeholder="Credit Days"/>
                      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class=""></span> </label>
                      </span></li>
                    <li></li>
                    <li>
                      <input type="button" value="ADD" class="button-gray-1 margin-top-1" >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="column-2" style="margin-top:20px;">
                <div class="table-1">
<!--
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" id="discount_table">
             
                  </table>
-->
                </div>
              </div>
            </div>
            
            <div class="column-2">
              <h3 id="rate_card">Rate Card (Routes)</h3>
              <div class="table-1 ratecard" id="OrderItems">

              </div>
            </div>
            <div class="column-2">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="right" valign="middle"><a href="#" class="link-1" id="showhide-btn-1">Discounts</a></td>
                  <td width="130" align="right" valign="middle"></td>
                </tr>
              </table>
            </div>
            <div class="display-none" id="showhide-content-1">
              <div class="column-1">
                <div class="grid-5">
                  <ul>
                    <li>
                      <span>
                      <div class="select-box1 disc_name" >
                    <select name="disc_name" id="combobox">
                        <option value="">Names(Auto Fill)</option>
                        @foreach($data['buyers'] as $buyer)
                          <option value="<?php echo $buyer->id;?>"><?php echo  $buyer->name; ?></option>
                        @endforeach
                      </select>
                    </div> 
                  </span>
                      </li>
                          <li>
                            <span>
                            <div class="select-box1 disc_type">
                    <select name="disc_type" id="combobox" >
                        <option value="">Discount Type</option>
                        <option value="1">Flat</option>
                        <option value="2">Permanent</option>
                      </select>
                    </div>
                  </span>
                  </li>
                <li><span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks discount" type="text" id="input-4" pattern="[1-9]*" maxlength="2" placeholder="Discount *"/>
                      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class=""></span> </label>
                      </span></li>
                    <li><span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks crid_day" type="text" id="input-4" pattern="[1-9]*" maxlength="2" placeholder="Credit Days *"/>
                      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class=""></span> </label>
                      </span></li>
                    
                    <li>
                      <input type="button" value="ADD"  class="button-gray-1 margin-top-1" id="discount_add">
                    </li>
                  </ul>
                </div>
              </div>
              <div class="column-2" style="margin-top:20px;">
                <div class="table-1 discount_card" id="add_discount">
             
                </div>
              </div>
            </div>
            <div class="column-2">
              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="35%" valign="top"><h3>Feature</h3>
                    <div class="select-box1 tracking" style="margin-top:0px;">
                      <select name="tracking" class="tracking" style="margin-top:0px;" required>
                        <option value="">Tracking*</option>
                        @foreach($data['trackingTypeData'] as $trac)
                          <option value="<?php echo $trac->id;?>"><?php echo $trac->tracking_type; ?></option>
                        @endforeach
                      </select>
                    </div></td>
                  <td width="10%" valign="top">&nbsp;</td>
                  <td valign="top"><h3 style="padding-bottom:16px;">Payment Terms</h3>
                      <span>
                          <?php foreach($data['paymentTermData'] as $pay){for($i=0;$i<count($pay);$i++){ ?>
                          <input type="checkbox" name="checkbox[]" value='<?php echo $pay->id; ?>' id="checkbox<?php echo $pay->id; ?>" data-id="checkbox" class="css-checkbox str"/>
                          <label for="checkbox<?php echo $pay->id; ?>" class="checkbox_label"><?php echo $pay->payment_term;?></label>
                    </span>
                      <?php   } } ?></td>
                    
                    <!--<span>
                    <input type="checkbox" name="checkbox_1" id="checkbox_1" class="css-checkbox" />
                    <label for="checkbox_1" class="checkbox_label">Cash(Escrow*)</label>
                    </span> <span class="margin-left-1">
                    <input type="checkbox" name="checkbox_2" id="checkbox_2" class="css-checkbox" />
                    <label for="checkbox_2" class="checkbox_label">NEFT/RTGS</label>
                    </span> <span class="margin-left-1">
                    <input type="checkbox" name="checkbox_3" id="checkbox_3" class="css-checkbox" />
                    <label for="checkbox_3" class="checkbox_label">Credit Cart</label>
                    </span> <span class="margin-left-1">
                    <input type="checkbox" name="checkbox_4" id="checkbox_4" class="css-checkbox" />
                    <label for="checkbox_4" class="checkbox_label">Debit Card</label>
                    </span></td>-->
                </tr>
              </table>
            </div>
            <br>
            <div class="column-2">
              <textarea class="textarea-full-1" placeholder="Notes/ Terms & Conditions (Optional) - Max 500 words"></textarea>
            </div>
            <div class="column-2">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><span>
                    <input type="checkbox" required  name="checkbox_5" id="checkbox_5" class="css-checkbox"/>
                    <label for="checkbox_5" class="checkbox_label">Post Public</label>
                    </span> <span class="margin-left-1">
                    <input type="checkbox" required name="checkbox_6" id="checkbox_6" class="css-checkbox"/>
                    <label for="checkbox_6" class="checkbox_label"  >Accept Terms &amp; Conditions (Digital Contract)</label>
                    </span></td>
                    <td width="300" align="right">
                      <input type="button" value="SAVE AS DRAFT" class="button-gray-2">
                        &nbsp;&nbsp;&nbsp;
                   <?php echo Form::submit('SUBMIT',array('class' => 'button-red-1', 'id'=>'submit')); ?>
                    </td>
                </tr>
              </table>
            </div>
          </div>
         <?php echo Form::close(); ?>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>
<script src="/js/addroute.js"></script> 
<script src="/js/customizeRoute.js"></script> 
@stop