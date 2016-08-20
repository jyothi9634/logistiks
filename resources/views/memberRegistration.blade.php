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
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-1 gray-bg-1">
    <form action="registration/store" id="formId" name="formId">
        <div class="registration-main-1">
            <div id="uservalidation" style="display:none;">

                <p><b>Email Already Exists</b></p>
            </div> 
            @if($status == 1)
            <div id="otpvalidation">
                <p><b>Otp is Incorrect</b></p>
            </div>  
            @endif
            <h1>Welcome to <span>LOGISTIKS.COM</span></h1>
            <h2>Please fill the form below to register for Membership</h2>
            <div class="registration-individual-row1"> <span class="input input-logistiks">
                    @if(isset($new_email_id))
                    <input class="animated-field animated-field-logistiks" type="text" id="email" name="email" value="{{$new_email_id[0]}}" onblur="validateEmail(this.value)">
                    @else
                    <input class="animated-field animated-field-logistiks" type="text" id="email" name="email" onblur="validateEmail(this.value)">
                    @endif
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="email_id"> <span class="animated-label-content animated-label-content-logistiks">Email*</span> </label>
                </span></div>
            <div class="registration-individual-row1"> <span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="retype_email" name="retype_email">
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="retype_email"> <span class="animated-label-content animated-label-content-logistiks">Re-Enter Email *</span> </label>
                </span> </div>

            <div class="registration-individual-row1"> <span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="password" id="password" name="password">
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="password"> <span class="animated-label-content animated-label-content-logistiks">Password 
                        </span> </label>
                </span> </div>

            <div class="registration-individual-row1"> <span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="password" id="retype_password" name="retype_password">
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="retype_password"> <span class="animated-label-content animated-label-content-logistiks">Re-enter Password 
                        </span> </label>
                </span> </div>

            <div class="registration-individual-row1"> <span class="input input-logistiks">
                    <input class="animated-field animated-field-logistiks" type="text" id="mobile_number" name="mobile_number" onblur="sendOtp()" maxlength="10">
                    <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="mobile_number"> <span class="animated-label-content animated-label-content-logistiks">Mobile Number*</span> </label>
                </span> </div>

            <div class="registration-individual-row2">
                <input type="submit" id="submit_id" name="submit_id" class="button-red-3" value="SUBMIT">
            </div>



            <div class="registration-individual-row2">
                By clicking "<a href="#" class="link-red">Sign up</a>" or "<a href="#" class="link-red">Sign In</a>" <br>
        I acknowledge and agree to the <a href="memberRegistration/termsOfuse" class="normal-link-line" target="_blank"><i>Terms of use.</i></a> ,<br>
         <a href="memberRegistration/privacyPolicy" class="normal-link-line" target="_blank"><i>Privacy Policy.</i></a> and 
         <a href="memberRegistration/cancellationPolicy" class="normal-link-line" target="_blank"><i>Cancellation Policy.</i></a>
             </div>
            
            <div id="otp_signup" style="display:none;">

                <div class="registration-individual-row2"> <span class="input input-logistiks">
                        <input class="animated-field animated-field-logistiks" type="text" id="otp" name="otp">
                        <label class="animated-label animated-label-logistiks animated-label-logistiks-color-1" for="otp"> <span class="animated-label-content animated-label-content-logistiks">Enter OTP
                            </span> </label>
                    </span> </div>
                <a href="#signup_id" onclick="sendOtp()" class="link-red">Re-Generate OTP</a><br>
                <div class="registration-individual-row2">
                    <input type="button" id="signup_id" name="signup_id" class="button-red-3" value="Signup" type="button">
                </div>
            </div>
            
            <div class="registration-individual-row2">
                Need Help ? Helpdesk  | Call  (040) 394 12345 
            </div>



        </div>
    </form>
</div>
<script src="/js/text-filed-1-shartcode.js"></script>
<script src="/js/main.js"></script>
<script>

                        $(document).ready(function () {

                            $('#formId').validate({
                                rules: {
                                    mobile_number: {
                                        required: true,
                                        mobileNumber: true,
                                        maxlength: 10,
                                    },
                                    email: {
                                        required: true,
                                        email: true
                                    },
                                    retype_email: {
                                        required: true,
                                        equalTo: '#email'

                                    },
                                    password: {
                                        required: true,
                                        minlength: 8,
                                        maxlength: 16,
                                        pwscheck: true

                                    },
                                    retype_password: {
                                        required: true,
                                        equalTo: "#password",
                                        pwscheck: true
                                    },
                                },
                                /*     
                                 submitHandler: function (marketformId) {
                                 return false;
                                 }*/
                            });



                        });

                        $('input').bind("cut copy paste", function (e) {

                            e.preventDefault();
                        });

                        function validateEmail(email) {

                            if (email != "") {

                                var url = "/validateUserEmail";
                                var data = "email=" + email;

                                var ajax = ajaxCall(url, data);


                            }

                        }

                        function sendOtp() {

                            var mobile_number = $('#mobile_number').val();

                            if ($('#mobile_number').valid() == true && $('#email').valid() == true && $('#retype_email').valid() == true
                                    && $('#password').valid() == true && $('#retype_password').valid() == true)
                            {

                                $("#submit_id").click(function () {

                                    $(this).prop('type', 'button');

                                });

                                $("#signup_id").click(function () {

                                    $(this).prop('type', 'submit');

                                });

                                var url = "/sendOtp";
                                var data = "mobile_number=" + mobile_number;

                                var ajax = ajaxCall(url, data);


                            }

                        }

                        function ajaxCall(url, data) {

                            $.ajax
                                    (
                                            {
                                                url: url,
                                                type: "GET",
                                                data: data,
                                                success: function (result)
                                                {

                                                    if (url == "/sendOtp") {

                                                        var e = document.getElementById('otp_signup');

                                                        e.style.display = 'block';

                                                        // $('input[type="submit"]').prop('disabled', true);



                                                    } else {

                                                        var e = document.getElementById('uservalidation');

                                                        if (result == 'true') {

                                                            e.style.display = 'block';

                                                            $('input[type="submit"]').prop('disabled', true);

                                                        } else {

                                                            e.style.display = 'none';

                                                            $('input[type="submit"]').prop('disabled', false);
                                                        }

                                                    }

                                                },
                                                error: function ()
                                                {
                                                    //console.log("AJAX request was a failure");
                                                }
                                            }
                                    );
                        }

                        /*function validateEmail(){
                         
                         var email = $('#email').val() ;
                         var mobile_number = $('#mobile_number').val();
                         
                         if(mobile_number){
                         
                         var e = document.getElementById('otp_signup');
                         e.style.display = 'block';
                         
                         $.ajax
                         (
                         {
                         url: "/sendOtp",
                         type: "GET", 
                         data: "mobile_number=" + mobile_number,
                         success: function(result)
                         {
                         
                         
                         },
                         error:function()
                         {
                         //console.log("AJAX request was a failure");
                         }   
                         }
                         );
                         
                         }
                         else{
                         
                         $.ajax
                         (
                         {
                         url: "/validateUserEmail",
                         type: "GET", 
                         data: "email=" + email,
                         success: function(result)
                         {
                         
                         if(result == 'true'){
                         
                         var e = document.getElementById('uservalidation');
                         
                         e.style.display = 'block';
                         
                         }
                         
                         },
                         error:function()
                         {
                         //console.log("AJAX request was a failure");
                         }   
                         }
                         );
                         }
                         }
                         */

                        $(document).ready(function () {
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
                                    });
                        });

</script>

@stop
