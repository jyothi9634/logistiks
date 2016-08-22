
<title>Logi stiks</title>
<link rel="stylesheet" href="/css/normalize.min.css">
<link rel="stylesheet" href="/css/styles.css">
<script src="/js/jquery-3.1.0.min.js"></script>
<link rel="stylesheet" href="/css/text-filed-1.css">
<script src="/js/text-filed-1.js"></script>
<link rel="stylesheet" href="/css/jquery-ui.css">
<script src="/js/jquery-ui.js"></script>
<script src="/js/datepicker-shortcode.js"></script>
<link rel="stylesheet" href="/css/accordian.css">
<script src="/js/accordian-shortcode.js"></script>
<!-- <script src="/js/text-filed-1-shartcode.js"></script>  -->
<script src="/js/main.js"></script>
<script src="/js/addroute.js"></script> 
<script src="/js/customizeRoute.js"></script> 
<script src="/js/jquery.validate.min.js"></script>
<script src="/js/additionalMethods.js"></script>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

<body>
<header>
 <div class="header-wrapper">
    <div class="tbl-1">
      <div class="row-1">
        <div class="cell-1"><img src="/images/logo.png" alt="Logo"></div>
        <div class="cell-1">
          <div class="header-nav-1">
            <ul>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">Market Place</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">Community</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">Dealers</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">Tools</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#"><img src="/images/search.png" width="19" height="19" alt="Search"></a></li>
            </ul>
          </div>
        </div>
        <div class="cell-1">
          <div class="header-nav-2">
            <ul>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">
                <div class="header-icon-1" style="position:relative;">
                  <div style="position:absolute; z-index:999; background:#ff0000; width:20px; height:20px; left:15px; top:-10px; border-radius:100px; line-height:20px; font-size:14px; color:#fff; text-align:center;">5</div>
                  <img src="/images/messages-header.png" alt="Message"></div>
                Messages</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">
                <div class="header-icon-1"><img src="/images/posts-header.png" alt="Posts"></div>
                Posts</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">
                <div class="header-icon-1"><img src="/images/orders-header.png" alt="Orders"></div>
                Orders</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">
                <div class="header-icon-1"><img src="/images/network-header.png" alt="Network"></div>
                Network</a></li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
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
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</header>

 <div class="main-container">
	
<!-- LeftNav Content Starts Here -->

 <div class="clearfix"></div>
<div class="main">
    <div class="container">
        
        <div class="col-md-12 landing-page disclaimer-policy">
            <div>
               
           <h2> About Us</h2>

           <h4>The most comprehensive Online Marketplace for Logistics.</h4>
           
           <ul>

            <li>Full Spectrum Logistics Services Market Place.</li><br>
			 
			<li>Digital Contract & Digital Payment. </li><br>
			 
			<li>Digital Insurance & Digital Claim Process.</li><br>

			<li>Workflow automation and analytics</li><br>

          </ul>

             </div>
       
       </div>
    
    </div>
   
   
</div>	
</div>
	
    <!-- Modal for New message -->
    <div class="modal fade" id="new_message_modal" role="dialog" style="display: none">
        <form method="POST" action="http://stagenew.logistiks.com/setmessagedetails" accept-charset="UTF-8" id="sendmessage" name="sendmessage" enctype="multipart/form-data" novalidate="novalidate"><input name="_token" type="hidden" value="DyQJeQKPpdNbjoqNQZin4Q7HpSNQKvcsEWx9KH9M">
        <div class="modal-dialog confirmation-message">
            <div class="modal-content">     
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <div class="modal-body">
                	<h4 class="sub-head red margin-left-none margin-bottom">New Message</h4>
                    <div>
                        <input id="from_name" class="form-control form-control1" placeholder="From *" readonly="readonly" name="" type="text" value="">
                        </div>
                    <div>
                        <input id="message_to" class="form-control form-control1" placeholder="To *" name="message_to" type="hidden" value="" multiple="multiple" style="margin: 0px; padding: 0px; border: 0px; display: none;"><div class="Tokenize"><ul class="TokensContainer"><li class="TokenSearch"><input name="user_ids" id="user_ids" class="form-control form-control1" size="5"></li></ul><ul class="Dropdown" style="display: none;"></ul></div>
                    </div>
                    <div>
                        <input id="message_subject" class="form-control form-control1 margin-bottom-4" placeholder="Subject *" readonly="readonly" name="message_subject" type="text" value="">
                    </div>
                    <div>
                        <input id="is_term" class="form-control form-control1" name="is_term" type="hidden" value="">
                        <input id="buyer_quote" class="form-control form-control1" name="buyer_quote" type="hidden" value="">
                        <input id="seller_post" class="form-control form-control1" name="seller_post" type="hidden" value="">
                        <input id="buyer_quote_item" class="form-control" name="buyer_quote_item" type="hidden" value="">
                        <input id="buyer_quote_item_leads" class="form-control" name="buyer_quote_item_leads" type="hidden" value="">
                        <input id="buyer_quote_item_seller" class="form-control" name="buyer_quote_item_seller" type="hidden" value="">
                        <input id="buyer_quote_item_seller_leads" class="form-control" name="buyer_quote_item_seller_leads" type="hidden" value="">
                        <input id="order_id_for_model" class="form-control" name="order_id_for_model" type="hidden" value="">
                        <input id="contract_id_for_model" class="form-control" name="contract_id_for_model" type="hidden" value="">
                        <input id="buyer_quote_item_for_search" class="form-control" name="buyer_quote_item_for_search" type="hidden" value="">
                        <input id="buyer_quote_item_for_search_seller" class="form-control" name="buyer_quote_item_for_search_seller" type="hidden" value="">
                        <input id="order_id_for_model_seller" class="form-control" name="order_id_for_model_seller" type="hidden" value="">
                        <input id="message_id" class="form-control" name="message_id" type="hidden" value="">
                    </div>
		<div><textarea id="message_body" class="form-control form-control1 message-body" placeholder="Body *" name="message_body" cols="50" rows="10"></textarea></div>
                    
                    <div class=""><i class="fa fa-paperclip"></i>

                        <label for="message_attachment" class="">Attachment </label>
                        <div>
                            <input id="message_attachment" class="filestyle btn-file file-upload" multiple="1" name="message_attachment[]" type="file">
                            
                            <div id="message_attachment_display"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
<!--                    
                    <input type="submit" name="save_as_draft" class="btn add-btn flat-btn ok-btn message_save_button" data-toggle="modal" data-target="#new_message_modal" value="Save as Draft">-->
                                        <input type="submit" name="send_message" class="btn red-btn flat-btn ok-btn message_send_button" value="Send"> 
                                    </div>
                <div class="clearfix"></div>
            </div>
        </div>
        </form>
    </div>
	
	    <!-- Confirm Modal window for cancel booking -->
	
	<!-- Confirm Modal window for cancel seller post -->
	<!-- Confirm Modal window for cancel buyer post -->
	<!-- Confirm Modal window for buyer seller switch -->
	

	<!-- Confirm Modal window for seller toggler -->
</div>
<script src="/js/text-filed-1-shartcode.js"></script>
<script src="/js/main.js"></script>

