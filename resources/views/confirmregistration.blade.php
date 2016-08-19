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
              <li><a href="http://psmprojects.net/logistiks/ver8/seller/Registration-Individual-3.html#">Help</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-1 gray-bg-1">
  <div class="registration-main-1">
    <h1>Thank you for <span>REGISTRATION</span></h1>
    @if($status == 0)
    <h2>Confirmation mail has been sent to registered mail id.</br>
Please verify email-id by clicking on activation link to complete registration process.</h2>
     @endif

       @if($status == 1)
       <h2>Thank You for confirmation.</br></h2>
        <div class="registration-individual-row2 text-center">
        <a href="/marketplaceRegistration/<?php echo $registered_id;?>" class="button-red-1">Update PROFILE</a>
     	  <input class="button-gray-1" value="ASK ME  LATER" type="button">
      </div>
       @endif 
       
      <br>

  </div>
</div>
<script src="/js/text-filed-1-shartcode.js"></script>
<script src="/js/main.js"></script>
@stop
