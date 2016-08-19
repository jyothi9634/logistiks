@extends('includes.registrationheader')
@section('content')

<div class="container-1 gray-bg-1">
  <form action="individualRegistration/store" method="post" name="formId" id="formId" autocomplete="off">

    @foreach($reg_details as $value)
   <div class="registration-main-1">
     @if($status == 1)
    <h2><b>Thank You for confirmation.</b></br></h2>
    @endif
    <h1>Welcome to <span>LOGISTIKS.COM</span></h1>
    <h2>Please fill the form below to register for Membership</h2>
    <div class="registration-individual-row1">
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="first_name" name="first_name" maxlength="50">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="first_name"> <span class="">First Name</span> </label>
        </span> </div>
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="last_name" name="last_name" maxlength="50">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="last_name"> <span class="">Last Name</span> </label>
        </span> </div>
    </div>
    <div class="registration-individual-row1">
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="pincode" name="pincode">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="pincode"> <span class="">Pincode</span> </label>
        </span> </div>
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="location" name="location">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="location"> <span class="">Location</span> </label>
        </span> </div>
    </div>
    <div class="registration-individual-row1">
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="city" name="city">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="city"> <span class="">City</span> </label>
        </span> </div>
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="district" name="district">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="district"> <span class="">District</span> </label>
        </span> </div>
    </div>
    <div class="registration-individual-row3">
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="state" name="state">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="state"> <span class="">State</span> </label>
        </span> </div>
    </div>
    <div class="registration-individual-row1"> <span class="input input-logistiks">
      <input class="animated-field animated-field-logistiks" type="text" id="address1" name="address1" maxlength="50">
      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="address1"> <span class="">Address Line 1* </span> </label>
      </span> </div>
    <div class="registration-individual-row1"> <span class="input input-logistiks">
      <input class="animated-field animated-field-logistiks" type="text" id="address2" name="address2" maxlength="50">
      <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="address2"> <span class="">Address Line 2*</span> </label>
      </span> </div>
    <div class="registration-individual-row1">
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="landline_number" name="landline_number">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="landline_number"> <span class="">Landline number</span> </label>
        </span> </div>
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="mobile_number" name="mobile_number" value="{{$value->mobile_number}}" readonly>
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="mobile_number"> <span class="">Mobile number (RMN)</span> </label>
        </span> </div>
    </div>
    <div class="registration-individual-row1">
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="alternate_mobile_number" name="alternate_mobile_number">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="alternate_mobile_number"> <span class="">Alternate Mobile number </span> </label>
        </span> </div>
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="email" name="email" value="{{$value->email_id}}" readonly>
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="email"> <span class="">E Mail ID*</span> </label>
        </span> </div>
    </div>
    <div class="registration-individual-row1">
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="alternate_email" name="alternate_email">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="alternate_email"> <span class="">Alternate E Mail ID*</span> </label>
        </span> </div>
      <div class="sec-1">
        <div class="select-box1">
          <select name="id_proof" id="id_proof">
            <option value="">ID Proof*</option>
            <option value="1">Adhar card</option>
            <option value="2">Driving Lic</option>
            <option value="3">Passport</option>
            <option value="4">Pancard</option>
            <option value="5">Voter Id</option>
          </select>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="registration-individual-row1">
    <div class="sec-1">.</div>
      <div class="sec-1"> <span class="input input-logistiks">
        <input class="animated-field animated-field-logistiks" type="text" id="id_proof_value" name="id_proof_value">
        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="id_proof_value"> <span class="">Enter Id Value*</span> </label>
        </span> </div>
    </div>
    <div class="clearfix"></div>
    <div class="registration-individual-row2">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody><tr>
          <td><input type="checkbox" name="checkbox_1" id="checkbox_1" class="">
            <label for="checkbox_1" class="">Logistiks.com Terms and conditions</label></td>
          <td align="right"><input type="submit" id="submit_id" name="submit_id" style="display:none;"class="button-red-1" value="Update"></td>
        </tr>
      </tbody></table>
    </div>
  </div>
  @endforeach
</form>
</div>
<script src="/js/text-filed-1-shartcode.js"></script> 
<script src="/js/main.js"></script>
<script>

$(document).ready(function () {

        
  $('#formId').validate({ 
        //alert($("#id_proof").val());
        rules: {

        alternate_email: {
                required: true,
                email:true
              },
                        
        address1: {
                required: true
                
              },

         address2: {
                required: true
                
               },

          email: {
                required: true,
                email:true
                
            },
            
        id_proof: {
               required: true,
               //notEqulToEmail: true
            },
        id_proof_value: {
            required: true,
            idProofFormate:true
        },
        first_name: {

          lettersonly: true,
           
           },  
        last_name: {

          lettersonly: true,
           
           },  

        mobile_number:  {

          required : true,
          mobileNumber: true

        },    
         
         pincode: {

                required: true,
                pincode:true
            },
                         
  },
       /*     
        submitHandler: function (marketformId) {
            return false;
        }*/
    });

 $('#pincode').blur(function(){
      
      var pincode = $('#pincode').val();

  $.ajax
        (
          {
            url: '/getlocationdetails',
            type: "GET", 
            data: "pincode=" + pincode,
            success: function(result)
            {
               
               $('#location').val(result[0].village);
               $('#city').val(result[0].division_name);
               $('#district').val(result[0].district_name);
               $('#state').val(result[0].state_name);

               
            },
            error:function()
            {
              //console.log("AJAX request was a failure");
            }   
          }
        );

});

 $('#checkbox_1').change(function(){
    
    var c = this.checked ;

    if(c == true){
       
       var e = document.getElementById('submit_id');

       e.style.display = 'block';
     }
     else{
      
      var e = document.getElementById('submit_id');

       e.style.display = 'none';

     }

      
});

   $("#mobile_number").keypress(function (e) {
      
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
               return false;
        }

   });

    $('#first_name').keydown(function (e) {
  if (e.shiftKey || e.ctrlKey || e.altKey) {
   e.preventDefault();
  } else {
   var key = e.keyCode;
   if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
    e.preventDefault();
   }
  }
 });
 

   $('#last_name').keydown(function (e) {
  if (e.shiftKey || e.ctrlKey || e.altKey) {
   e.preventDefault();
  } else {
   var key = e.keyCode;
   if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
    e.preventDefault();
   }
  }
 });
   

});

/*$(document).ready(function() {
    $("#mobile_number").keydown(function (e) {
      // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });*/


    



</script>
@stop



