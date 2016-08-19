/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    
    $("#mobile_number,#pincode,#alternate_mobile_number,#landline_number").keypress(function (e) {

        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
               return false;
        }

   });
    
    $('#formId').validate({ 
        rules: {
           email: {
                required: true,
                email:true
            },
            retype_email: {
                required: true,
                email:true,
                equalTo: '#email'
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 30,
                pwscheck: true
            },
            retype_password: {
              required: true,
              pwscheck: true,
              equalTo: 'password'
            },
            mobile_number: {
                required: true,
                maxlength: 10,
                mobileNumber: true
            },
            
        },
            
        submitHandler: function (form) {
            return false;
        }
    });
    
    $('#individualRegistration').validate({ 
        rules: {
            /*first_name: {
                required: true,
                lettersonly: true,
                minlength: 3,
                maxlength: 30
            },
                last_name: {
                required: true,
                lettersonly: true,
                minlength: 3,
                maxlength: 30
            },
            pincode: {
                required: true,
                pincode: true
            },*/
            address1: {
                required: true,
                
                
            },
             address2: {
                required: true,
                
                
            },
            
           alternate_email: {
                required: true,
                email:true
            },
            id_proof: {
               id_proof: true,
               //notEqulToEmail: true
            },
            
        },
        submitHandler: function (form) {
            return false;
        }
    });    

     
    $('#marketplaceRegistration').validate({ 

        rules: {
             
             name: {
                required: true,
              },

            address1: {
                required: true,
              },
             address2: {
                required: true,
                
                
            },
            
           alternate_email: {
                required: true,
                email:true
            },
            id_proof: {
               id_proof: true,
               //notEqulToEmail: true
            },
            business_id: {
               business_id: true,
               //notEqulToEmail: true
            },
            
        },
        submitHandler: function (form) {
            return false;
        }
    });    

});