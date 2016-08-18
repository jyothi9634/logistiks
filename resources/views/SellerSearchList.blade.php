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
                <div class="cell-1"> <a href="#">Buyer </a> > <a href="#">Services</a> >  <a href="#">FTL Search List</a> </div>
                <div class="cell-1 text-right"> 
                  <div class="post-get-quote"><a href="#">Post & Get Quote</a></div>
                </div>
              </div>
            </div>
          </div>
          <!--Content Start-->
            <?php foreach($result as $list){ ?>
               
               
          <div class="bg-sec1">
               
            <div class="post-master-1">
              <div class="tbl-1">
                <div class="row-1">
                  <div class="cell-1">
                    <ul>
                        <li><a href="#"><?= $data['from_location'] ?></a></li>
                        <li><a href="#"><?= $data['to_location'] ?></a></li>
                        <li><a href="#"><?= $data['dispatch_date'] ?></a></li>
                        <li><a href="#"><?= $data['delivery_date'] ?></a></li>
                        <li><a href="#">
                        </a></li>
                        <li><a href="#">
                    </a></li>
                         </ul>
                  </div>
                  <div class="cell-1">
                    <ul class="pull-right">
                      <li class="modify-button"><a href="#" >Modify Search</a></li>
                      <li><a href="#" id="showhide-btn-3"><img src="../images/filter.png" width="14" height="10" alt="filter">Filters</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="post-master-2" id="showhide-content-3">
              <div class="tbl-1">
                <div class="row-1">
                  <div class="cell-1">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="buyer-search-5-table">
                      <tr>
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
        
        <div id="slider-range"></div>
      <input type="text" id="amount" readonly style="border:0; color:#4b4e54; font-weight:noenal; background:none;">
      </p>
      
      
      
      </td>
    <td align="left" valign="top">
    	 <span>
        <input type="checkbox" name="checkbox_5" id="checkbox_5" class="css-checkbox" />
        <label for="checkbox_5" class="checkbox_label">Advance</label>
        </span> <span class="margin-left-1">
          <input type="checkbox" name="checkbox_6" id="checkbox_6" class="css-checkbox" />
          <label for="checkbox_6" class="checkbox_label">Credits</label>
          </span>
    
    </td>
    <td align="left" valign="top"> <span>
      <input type="checkbox" name="checkbox_1" id="checkbox_1" class="css-checkbox" />
      <label for="checkbox_1" class="checkbox_label">Milestone</label>
      </span> <span class="margin-left-1">
        <input type="checkbox" name="checkbox_2" id="checkbox_2" class="css-checkbox" />
        <label for="checkbox_2" class="checkbox_label">Top Sellers (Orders)</label>
        </span>
        <br>

      <span>
        <input type="checkbox" name="checkbox_3" id="checkbox_3" class="css-checkbox" />
        <label for="checkbox_3" class="checkbox_label">Real Time</label>
        </span> <span class="margin-left-1">
          <input type="checkbox" name="checkbox_4" id="checkbox_4" class="css-checkbox" />
          <label for="checkbox_4" class="checkbox_label">Top Sellers (Rated)</label>
          </span></td>
  </tr>
  </table>

                  
                    
                  </div>
                  <div class="cell-1"><a href="#" id="close-btn-3"><img src="../images/close-1.png" alt="Close"></a> </div>
                </div>
              </div>
            </div>
       
            <div class="post-master-3">
              <div class="post-master-tbl-padding">
                <div class="post-master-tbl-main bold-upper">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-2">
                    <tr>
                      <td class="c-1">NAME <a href="#"><img src="../images/arrow-increase.png" width="12" height="8" alt="Arrow"></a></td>
                      <td class="c-2">VALID FROM</td>
                      <td class="c-3">valid to</td>
                      <td class="c-4">PRICE(&#8377)</td>
                      <td class="c-5">AVAILABILITY </td>
                      <td class="c-6">CAPACITY</td>
                      <td class="c-7"></td>
                    </tr>
                  </table>
                </div>
                        <?php  
          $id=0; 
                foreach($list as $res){ ?>
                <div class="post-master-tbl-main">
				
           
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-2">
                      <tr>
                          <td class="c-1"><?php echo $res->name; ?></td>
                        <td class="c-2"><?php echo $res->load_type; ?></td>
                        <td class="c-3"><?php echo $res->valid_from;?></td>
                        <td class="c-4"><?php echo $res->valid_to; ?></td>
                        <td class="c-5">10 Loads</td>
                        <td class="c-6">20 Loads</td>
                        <td class="c-7"><input type="button" value="Book Now" class="button-red-2 margin-tl-1 "></td>
                      </tr>
                      
                      <tr>
                        <td class="c-1"><img src="../images/ellipse-1.png" alt="ellipse" width="36" height="6"></td>
                        <td class="c-2">&nbsp;</td>
                        <td class="c-3"><span>
                        <td class="c-4">&nbsp;</td>
                        <td class="c-5">&nbsp;</td>
                        <td class="c-6">&nbsp;</td>
                         <td align="right" valign="top">
                        
                         <a href="#collapse<?php echo $id;?>" class="details-link-2 nav-toggle">- Details  </a><img src="../images/message-icon3.png" width="12" height="9" alt="Message"></td>
                      </tr>
                    </table>
				                        

                    <div  id="collapse<?php echo $id; ?>" style="display:block">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="post-table-3">
                      <tr>
                        <td class="c-1">POST TYPE</td>
                        <td class="c-2">LOAD TYPE</td>
                        <td class="c-3">VEHICLE TYPE</td>
                        <td class="c-4">TRANSIT DAYS</td>
                        <td class="c-5">TRACKING</td>
                        <td class="c-6">PAYMENT TERM</td>
                        <td class="c-7">T&amp;C</td>
                      </tr>
                      <tr>
                        <td class="c-1"><span class="c-3"><span></span><?php if($res->private_public_flag == 0){ echo "public"; }else {
    echo $res->name;
} ?></span></td>
                        <td class="c-2"><span class="c-3"><span></span><?php echo $res->load_type; ?></span></td>
                        <td class="c-3"><span></span><?php echo $res->vehicle_type; ?></td>
                        <td class="c-4"><span class="c-3"><span></span><?php echo $res->transit_days; ?></span></td>
                        <td class="c-5"><span class="c-3"><span></span><?php echo $res->tracking_type; ?></span></td>
                        <td class="c-6"><span class="c-3"><span><br>
                        </span></span></td>
                         <td align="right" valign="top">&nbsp;</td>
                      </tr>
                    </table>
                    </div>
                      
                </div>
                   <?php $id++; } ?>
                </div>
            </div>
                
          </div>
          
           <?php } ?>
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