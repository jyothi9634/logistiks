@extends('includes.registrationheader')
@section('content')

 <div class="main-container">
	
<!-- LeftNav Content Starts Here -->

 <div class="clearfix"></div>
<div class="main">
    <div class="container">
        
        <div class="col-md-12 landing-page disclaimer-policy">
            <div>
               
                <h3> Cancellation Policy</h3>

    
<p>Cancellation And Refund Policy</p>
<p>•	Order cancellation allowed only for buyers</p>
<p>•	Only Indents (till truck placements) are allowed to be cancelled. In-case after truck allotment and before consignment pickup if the order has to be cancelled, it has to be done by buyer with vendor & there will be no refund from Logistiks.</p>
<p>Subject to Truck Not Allotted by Seller </p>
<p>1.	If the cancellation happens 1 day before despatch date, then the refund amount is 50% of the freight value. Service Tax collected will also be refunded subject to statutory norms</p>
<p>2.	If the cancellation happens 2 days before despatch date, then the refund amount is 75% of the freight value. Service Tax collected will also be refunded subject to statutory norms</p>
<p>3.	If the cancellation happens  3 days before despatch date, then the refund amount is 80% of the freight value. Service Tax collected will also be refunded subject to statutory norms</p>
<p>4.	If the cancellation happens  before 4 days and above from despatch date, then the refund amount is 90% of the freight value. Service Tax collected will also be refunded subject to statutory norms</p>
<p>System Process flow:</p>
<p>Buyer  Search Input  Search List  Select a vendor and Book Now  GSA  Add to Cart  Check out  Payment  Order Creation  Order Indent </p>
<p>Buyer  Search Input  Post & Get quote  Offers (Quotes)  Select a vendor and Book Now GSA  Add to Cart  Check out  Payment  Order Creation  Order Indent</p>
<p>Cancel button to be  provided under details section of each Indent. On click of cancel button the system validates above mentioned checks and business rules.</p>
<p>System pop-up is shown “Do you really want to cancel order No -----------“ (Yes / No). On clicking No the system will go back to Order Indent Page.</p>
<p>On Clicking Yes, Pop-up with a text box – Reason For Cancellation ( user input max 100 character - Mandatory ) and cancellation policy, refund policy and disclaimer for logistiks will appear with a button “ Accept” or “Decline”. On clicking “Decline” the system will go back to Order Indent Page.</p>
<p>On clicking “Accept”, another popup with message showing the details of refundable amount with statement stating refund will be credited back to his transacted account within 7 working days. </p>
<p>System will send alert message to seller, buyer, call centre, IT Admin, respective franchisee and P&L head through SMS and MAIL.</p>
<p>The status of the order in Indents will show cancelled.</p>
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

@stop