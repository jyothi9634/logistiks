@extends('includes.registrationheader')
@section('content')
<div class="menu min-height-1">
  <div class="wrapper-1">
    <div class="tbl-1">
      <div class="row-1">
        <div class="cell-1 ">
          <div class="menu-nav-1"> </div>
        </div>
        <div class="cell-1 ">
          <div class="menu-nav-2 ">
            <ul>
              <li><a href="http://psmprojects.net/logistiks/ver8/seller/Registration-Individual-4.html#">Help</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-1 gray-bg-1">
  <div class="registration-main-1">
    <h1 style="font-size:28px">Thank you for joining LOGISTIKS.COM</h1><br>
    
    
    <div class="ri-tbl">
        <form method="post" action="/paymentPost/<?php echo $user_id;?>" name="subscription" id="subscription">
        <div class="ri-table-1">
            <div class="ri-row-1">
                <div class="ri-cell-1"><h3 class="black">Choose your subscription</h3></div>
                <div class="ri-cell-1 text-right"><input type="button" class="button-white-1" value="Renewal "></div>
            </div>
            <div class="ri-row-1">
                <div class="ri-cell-1"><input type="radio" name="amount" id="radio1" value="500" class="css-radiobtn">
              <label for="radio1" class="radio-label set-1">Three Months  ` 500.00</label></div>
                <div class="ri-cell-1"><input type="radio" name="amount" id="radio2" value="750" class="css-radiobtn">
              <label for="radio2" class="radio-label set-1">Six Months  ` 750.00</label></div>
            </div>
            
            <div class="ri-row-1">
                <div class="ri-cell-1"><input type="radio" name="amount" value="1000" id="radio3" class="css-radiobtn">
              <label for="radio3" class="radio-label set-2">One Year ` 1000.00</label></div>
                <div class="ri-cell-1"><input type="radio" name="amount" value="4000" id="radio4" class="css-radiobtn">
              <label for="radio4" class="radio-label set-2">Five Years ` 4000.00</label></div>
                <input name="account_id" type="hidden" value="20150"/>
                <input name="secretkey" type="hidden" value="209b9b0bffc0ddafbbd0047a892b9dd3" size="35"/>
                <input name="return_url" type="hidden" size="60" value="http://www.logistiks.com/paymentResponse">
                <input name="channel" type="hidden"  value="10" />
                <input name="reference_no" type="hidden" value="<?php echo time();?>" />
                <input name="currency" type="hidden" value="INR" />
                <input name="mode" type="hidden" value="LIVE" />
                <input name="description" type="hidden" value="Test Product" />
                <input name="name" type="hidden" value="Test Name" /></td>
                <input name="address" type="hidden" value="Test Address" /></td>
                <input name="city" type="hidden" value="Mumbai" />
                <input name="state" type="hidden" value="MH" />
                <input name="postal_code" type="hidden" value="400069" />
                <input name="country" type="hidden" value="IND" />
                <input name="email" type="hidden" value="test@test.com" />
                <input name="phone" type="hidden" value="2211112222" />
            </div>
            
            
            
        </div>
    </div>
    
     
       <div class="registration-individual-row2">
       Logistiks.com Terms and conditions<br><br>
<input type="submit" value="I/we accept" class="button-white-1">&nbsp;&nbsp;
<input type="reset" value="Cancel" class="button-white-1">
       
        </div><br>

        
        <div class="registration-individual-row2">
        <h3 class="red">Payment Gateway </h3>
        On payment success, direct to seller home page 
        
        </div>
      
      <br>

  </div>
</div>
<script src="/js/text-filed-1-shartcode.js"></script>
<script src="/js/main.js"></script>


