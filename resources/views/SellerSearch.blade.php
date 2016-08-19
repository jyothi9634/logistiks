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
                <div class="cell-1"> Seller > Services >  FTL Search </div>
                <div class="cell-1"> </div>
              </div>
            </div>
          </div>
          <!--Content Start-->
        <?php echo Form::open(array('url' => '/SellerSearchList')); ?>
          <div class="bg-sec1">
            <div class="tabs-1">
              <div class="tbl-2">
                <div class="row-2">
                  <div class="cell-2">
                    <div class="nav-setps">
                      <ul>
                        <li class="active-1"><span>1</span><a href="#" >Search</a></li>
                        <li><span>2</span><a href="#">Book</a></li>
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
                  <li><div class="select-box1 from_location">
                    <select name="from_location" id="combobox"  required>
                        <option value="">From Location* (Auto Fill)</option>
                        <option value="1">Bangalore</option>
                        <option value="2">Mysore</option>
                        <option value="3">Dharwad</option>
                        <option value="4">Mangalore</option>
                        <option value="5">Hassan</option>
                      </select>
                    </div></li>
                 <li><div class="select-box1 to_location" >
                    <select name="to_location" id="combobox"  required="required">
                        <option value="">To Location* (Auto Fill)</option>
                        <option value="1">Bangalore</option>
                        <option value="2">Mysore</option>
                        <option value="3">Dharwad</option>
                        <option value="4">Mangalore</option>
                        <option value=5>Hassan</option>
                      </select>
                    </div></li>
                  <li>
                    <input type="text" class="datepicker" placeholder="Dispatch Date* (Flex dates option)" name="dispatch_date" required>
                  </li>
                </ul>
              </div>
              <div class="grid-3">
                <ul>
                  <li>
                  <input type="text" class="datepicker" placeholder="Delivery Date * (Flex dates option)" name="delivery_date" required>
                  </li>
                  <li>
                  <div class="select-box1 load_type">
                      <select name="load_type"  class="load_type" required>
                        <option value="">Load Type* (Auto Fill)</option>
                        @foreach($data['loadTypesData'] as $load)
                          <option value="<?php echo $load->id;?>"><?php echo $load->load_type; ?></option>
                        @endforeach
                      </select>
                    </div>
                 </li>
                  <li class="relative-ps">
                  <div class="uom">UoM</div>
                     <span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="input-4" name="quantity" />
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="input-4"> <span class="animated-label-content animated-label-content-logistiks">Quantity *</span> </label>
                    </span>
                  </li>
                </ul>
              </div>
              
              <div class="grid-3">
                <ul>
                  <li>
                  <div class="select-box1 vehicle_type">
                      <select name="vehicle_type"  class="vehicle_type" required> 
                        <option value="">Vehicle Type* (Auto Fill)</option>
                        @foreach($data['vehicleTypesData']as $veh)
                          <option value="<?php echo $veh->id;?>"><?php echo $veh->vehicle_type; ?></option>
                        @endforeach
                      </select>
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
                <tr>
                  <td align="right" valign="middle"></td>
                  <td width="130" align="right" valign="middle">
<!--                      <input type="button" value="Search" class="button-red-1">-->
                       <?php echo Form::submit('Search',array('class' => 'button-red-1')); ?>
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
<script src="../js/text-field/text-filed-1-shartcode.js"></script> 
<script src="../js/main.js"></script>
</body>
</html>