<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Logi stiks</title>
<link rel="stylesheet" href="../css/normalize.min.css">
<link rel="stylesheet" href="../css/styles.css">
<script src="../js/jquery-3.1.0.min.js"></script>
<link rel="stylesheet" href="../css/text-field/text-filed-1.css">
<script src="../js/text-field/text-filed-1.js"></script>
<link rel="stylesheet" href="../css/jquery-ui.css">
<script src="../js/jquery-ui.js"></script>
<script src="../js/datepicker-shortcode.js"></script>
<link rel="stylesheet" href="../css/accordian.css">
<script src="../js/accordian-shortcode.js"></script>
<!--[if lt IE 9]>
	<script src="../js/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div class="header-wrapper">
    <div class="tbl-1">
      <div class="row-1">
        <div class="cell-1"><img src="../images/logo.png" alt="Logo"></div>
        <div class="cell-1">
          <div class="header-nav-1">
            <ul>
              <li><a href="#">Market Place</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Dealers</a></li>
              <li><a href="#">Tools</a></li>
              <li><a href="#"><img src="../images/search.png" width="19" height="19" alt="Search"></a></li>
            </ul>
          </div>
        </div>
        <div class="cell-1" >
          <div class="header-nav-2">
            <ul>
              <li><a href="#">
                <div class="header-icon-1" style="position:relative;">
                  <div style="position:absolute; z-index:999; background:#ff0000; width:20px; height:20px; left:15px; top:-10px; border-radius:100px; line-height:20px; font-size:14px; color:#fff; text-align:center;">5</div>
                  <img src="../images/messages-header.png"alt="Message"></div>
                Messages</a></li>
              <li><a href="#">
                <div class="header-icon-1"><img src="../images/posts-header.png" alt="Posts"></div>
                Posts</a></li>
              <li><a href="#">
                <div class="header-icon-1"><img src="../images/orders-header.png"alt="Orders"></div>
                Orders</a></li>
              <li><a href="#">
                <div class="header-icon-1"><img src="../images/network-header.png" alt="Network"></div>
                Network</a></li>
              <li><a href="#">
                <div class="header-icon-1"><img src="../images/profile-pic-header.png"  alt="Profile"></div>
                Nair PV</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
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
              <li><a href="#"><img src="../images/shoping-cart-1.png" alt="Shoping-cart"></a></li>
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
      
      <div class="cell-1">
        <div class="content-area-1">
          <div class="bread-crumb-1">
            <div class="tbl-1">
              <div class="row-1">
                <div class="cell-1"> Seller > Services >  Book Now </div>
                <div class="cell-1"> </div>
              </div>
            </div>
          </div>
          <!--Content Start-->
          <div class="bg-sec1">
		   <?php echo Form::open(array('url' => '/PostMasterInsert')); ?>
		  
            <div class="column-1">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-4">
                <tr>
                  <td width="12%">VENDOR</td>
                  <td width="12%">ROUTES</td>
                  <td width="12%">DESPATCH DATE</td>
                  <td width="12%">DELIVERY DATE</td>
                  <td width="12%">LOAD TYPE</td>
                  <td width="12%">VEHICLE TYPE</td>
                  <td width="12%">QUANTITY</td>
                  <td  align="right">Views 7</td>
                </tr>
                <tr>
				 <?php foreach($data['lp'] as $d){  ?>
                  <td height="30" valign="middle">
					<?php //$d->name ?><span></span></td>
                  <td valign="middle"><span><?= $d->from_loc ?> - <?= $d->to_loc ?></span></td>
                  <td valign="middle"><span><?= $d->dispatch_dt ?></span></td>
                  <td valign="middle"><span><?= $d->delivery_dt ?></span></td>
                  <td valign="middle"><span><?= $d->load_type ?></span></td>
                  <td valign="middle"><span><?= $d->vehicle_type ?></span></td>
                  <td valign="middle"><span><?= $d->qty ?></span></td>
                  <td align="right" valign="middle">&nbsp;</td>
				 
                </tr>
              </table>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-4">
                  <tr>
                    <td width="12%">No. of LOADS</td>
                    <td width="12%">TRANSIT DAYS</td>
                    <td width="12%">PRICING</td>
                    <td width="12%">TRACKING</td>
                    <td width="12%">PAYMENT TERM</td>
                    <td width="12%">T&amp;C</td>
                    <td style="width:5%">&nbsp;</td>
                  </tr>
                  <tr>
                   <td height="30" valign="middle"><span><?= $d->load_type ?></span></td>
                    <td height="30" valign="middle"><span><?= $d->transit_days ?></span></td>
                    <td height="30" valign="middle"><span><?= $d->price ?></span></td>
                    <td height="30" valign="middle"><span><?= $d->tracking_type ?></span></td>
                    <td height="30" valign="middle"><span><?= $d->payment_term ?><br>
                    (<?= $d->adv_payment_type ?>)</span></td>
                    <td height="30" valign="middle">&nbsp;</td>
                    <td align="right" valign="top">&nbsp;</td>
					<input type="hidden" name="payment_term" value="<?= $d->pytmid ?>"/>
					 <input type="hidden" name="adv_payment_type" value="<?= $d->aptid ?>"/>
					 <input type="hidden" name="price" value="<?= $d->price ?>"/>
					 <input type="hidden" name="tracking_type" value="<?= $d->trtid ?>"/>
					 <input type="hidden" name="post_id" value="<?= $d->post_id ?>"/>
					 <input type="hidden" name="user_id" value="<?= $d->user_id ?>"/>
					 <?php } ?>
                  </tr>
				 
                </table>
				
            </div>

            
            
            
            <div class="column-1 field-main">
              <div class="grid-3">
                <ul>
                  <li>
                  <div class="select-box1">
                      <select name="frm_loc" id="combobox"  required>
                        <option value="">From Location* (Auto Fill)</option>
                        <option value="1">Bangalore</option>
                        <option value="2">Mysore</option>
                        <option value="3">Dharwad</option>
                        <option value="4">Mangalore</option>
                        <option value="5">Hassan</option>
                      </select>
                    </div>
                  </li>
                  <li>
                  <div class="select-box1">
                     <select name="to_loc" id="combobox"  required="required">
                        <option value="">To Location* (Auto Fill)</option>
                        <option value="1">Bangalore</option>
                        <option value="2">Mysore</option>
                        <option value="3">Dharwad</option>
                        <option value="4">Mangalore</option>
                        <option value="5">Hassan</option>
                      </select>
                    </div>
                  </li>
                  <li>
                  <div class="select-box1">
                      <select name="package_type">
                        <option value="">Packaging Type*</option>
						<?php foreach($data['pt'] as $d){  ?>
							<option value="<?= $d->id ?>"><?= $d->packaging_type ?></option>
						<?php } ?>
                       </select>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="grid-3">
                <ul>
                  <li>
                  <input type="text" class="datepicker" name="ordered_date" placeholder="Consignment Pick up Date*">
                  </li>
                  <li>
                  <div class="select-box1">
                      <select name="consignment_type">
                        <option value="0">Consignment Type*</option>
                       <?php foreach($data['ct'] as $d){  ?>
							<option value="<?= $d->id ?>"><?= $d->type ?></option>
						<?php } ?>
                      </select>
                    </div>
                 </li>
                  <li>
                  <div class="select-box1">
                      <select name="consignment_value">
                        <option value="0">Consignment Value*</option>
                        <option value="1">two</option>
                        <option value="2">three</option>
                      </select>
                    </div>
                 </li>
                </ul>
              </div>
              
              <div class="grid-3 margin-top-1">
                <ul>
                  <li>
                 
                  </li>
                  <li>
                    
                  </li>
                  <li>
                    <input type="checkbox" name="need_insurance" id="checkbox_1" value="1" class="css-checkbox" />
                    <label for="checkbox_1" class="checkbox_label">Need Insurance</label>
                  </li>
                </ul>
              </div>
            </div>
            <div class="column-2">
            	<h4>Consignor Details</h4>
                
                
                
                <div class="grid-3">
                <ul>
                  <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="consignor_name"  />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Name*</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="consignor_mobile_number" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Mobile Number*</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="consignor_email" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">E Mail</span> </label>
                    </span></li>
                </ul>
              </div>
              
              <div class="grid-3">
                <ul>
                  <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="consignor_address1" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Address 1</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="consignor_address2" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Address 2</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="consignor_address3" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Address 3</span> </label>
                    </span></li>
                </ul>
              </div>
              
              <div class="grid-3">
                <ul>
                  <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignor_pincode" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Pincode*</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignor_city"/>
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">City</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="consignor_state" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">State</span> </label>
                    </span></li>
                </ul>
              </div>
              
            </div>
            
            
            
            
            <br><div class="column-2">
            	<h4>Consignee Details</h4>
                
                
                
                <div class="grid-3">
                <ul>
                  <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignee_name"/>
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Name*</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignee_mobile_number" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Mobile Number*</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignee_email" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">E Mail</span> </label>
                    </span></li>
                </ul>
              </div>
              
              <div class="grid-3">
                <ul>
                  <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignee_address1"/>
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Address 1</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignee_address2"/>
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Address 2</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="consignee_address3" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Address 3</span> </label>
                    </span></li>
                </ul>
              </div>
              
              <div class="grid-3">
                <ul>
                  <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignee_pincode" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Pincode*</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignee_city"/>
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">City</span> </label>
                    </span></li>
                    
                    <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="consignee_state"/>
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">State</span> </label>
                    </span></li>
                </ul>
              </div>
              
              <div class="grid-3">
                <ul>
                  <li><span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="additional_details" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Additional Details</span> </label>
                    </span></li>
                    
                   
                </ul>
              </div>
              
            </div>
            
            
            <div class="column-2">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="right" valign="middle"></td>
                  <td width="250" align="right" valign="middle">
				 <!-- <input type="button" value="ADD TO CART" class="button-red-1"> --> 
				   <?php echo Form::submit('SUBMIT',array('class' => 'button-red-1')); ?>
				  <input type="button" value="CHECK OUT" class="button-red-1"></td>
                </tr>
              </table>
            </div>
            <div class="display-none" id="showhide-content-2">
              <div class="column-1">
                <div class="grid-5">
                  <ul>
                    <li><span class="input input-logistiks">
                      <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="pm_ccname"/>
                      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Name (Auto Fill)</span> </label>
                      </span></li>
                    <li><span class="input input-logistiks">
                      <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="pm_ccdisctype" />
                      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Discount Type</span> </label>
                      </span></li>
                    <li><span class="input input-logistiks">
                      <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="pm_ccdisc" />
                      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Discount</span> </label>
                      </span></li>
                    <li><span class="input input-logistiks">
                      <input class="animated-field animated-field-logistiks" type="text" id="input-4"  name="pm_cccreditday" />
                      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Credit Days</span> </label>
                      </span></li>
                    <li></li>
                    <li>
                      <input type="button" value="ADD" class="button-gray-1 margin-top-1">
                    </li>
                  </ul>
                </div>
              </div>
              <div class="column-2" style="margin-top:20px;">
                <div class="table-1">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <th width="18%" align="left" valign="top">Name</th>
                      <th width="18%" align="left" valign="top">Discount Type</th>
                      <th width="185" align="left" valign="top">Discount</th>
                      <th width="18%" align="left" valign="top">Credit Days</th>
                      <th width="18%" align="left" valign="top">Net Price</th>
                      <th align="left" valign="top">&nbsp;</th>
                    </tr>
                    <tr>
                      <td align="left" valign="top">NFCL</td>
                      <td align="left" valign="top">Flat</td>
                      <td align="left" valign="top">500.00</td>
                      <td align="left" valign="top"></td>
                      <td align="left" valign="top">4500.00</td>
                      <td align="left" valign="top"><table border="0" align="left" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="left" valign="top"><a href="#" class="link-1">Edit</a></td>
                            <td width="10" align="left" valign="top"></td>
                            <td align="left" valign="top"><a href="#"><img src="../images/delete-1.png"  alt="Delete"></a></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">FERTIS</td>
                      <td align="left" valign="top">Percentage</td>
                      <td align="left" valign="top">1.5%</td>
                      <td align="left" valign="top">&nbsp;</td>
                      <td align="left" valign="top">4925.00</td>
                      <td align="left" valign="top"><table border="0" align="left" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="left" valign="top"><a href="#" class="link-1">Edit</a></td>
                            <td width="10" align="left" valign="top"></td>
                            <td align="left" valign="top"><a href="#"><img src="../images/delete-1.png"  alt="Delete"></a></td>
                          </tr>
                        </table></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top">NFCL</td>
                      <td align="left" valign="top">Flat</td>
                      <td align="left" valign="top">500.00</td>
                      <td align="left" valign="top">&nbsp;</td>
                      <td align="left" valign="top">4500.00</td>
                      <td align="left" valign="top"><table border="0" align="left" cellpadding="0" cellspacing="0">
                          <tr>
                            <td align="left" valign="top"><a href="#" class="link-1">Edit</a></td>
                            <td width="10" align="left" valign="top"></td>
                            <td align="left" valign="top"><a href="#"><img src="../images/delete-1.png"  alt="Delete"></a></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            
          </div>
        
		 <?php echo Form::close(); ?>
		</div>
        <br>
      </div>
    </div>
  </div>
</div>
<script src="../js/text-field/text-filed-1-shartcode.js"></script> 
<script src="../js/main.js"></script>
</body>
</html>