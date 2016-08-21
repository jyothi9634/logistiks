$(document).ready(function(){
// $('#add').on('click',function(){
//     var title = $('.post_title').val();
//     var delivery_dt = $('.delivery_dt').val();
//     var dispatch_dt = $('.dispatch_dt').val();
//     var frm_loc = $('.frm_loc :selected').text();
//     var to_loc = $('.to_loc :selected').text();
//     var load_typ = $('.load_typ').val();
//     var veh_typ = $('.veh_typ').val();
//     var transit_days = $('.transit_days').val();
//     var price = $('.price').val();
//     var load_limit = $('.load_limit').val();
//     var book_cutoff = $('.book_cutoff').val();
//    
//     $('.table-1').append('')
// });

$("#submit").on('click',function(){
        var check = $('.test').is(":checked");
        var check4 = $('#checkbox_5').is(":checked");
        var check5 = $('#checkbox_6').is(":checked");
        //alert(check);
            if(check){
                    console.log("hi");
            }else{
                //alert('please select the payment terms ');
                   
            }
        if( check4 === true){
                    console.log("hi");
            }else{
               // alert('please select the Post type');
                   
            }
        if( check5 === true ){
                    console.log("hi");
            }else{
                //alert('please agree for Terms and conditions ');
                   
            }
    });


$('.ratecard,#rate_card').hide();

$('#test').hide();


     var itm = [];
      // Add Button Click Function
          $("#Options1").hide();
$("#Options2").hide();
 var favorite = [];
$("#subOptions1").on('click',function(){
          $("#Options1").show();
          $("#Options2").hide();
          favorite.pop();
          console.log(favorite);
       });

$("#subOptions2").on('click',function(){
      $("#Options1").hide();
           $("#Options2").show();
                     favorite.pop();

    });

    // $("input[name='payment']:checked").each(function(){
    //     favorite.push($(this).val());
    //     alert(this.value);
    //      $("#payValues").val(favorite);
    //    });


     $(".test").on('click',function(){
         $("#payValues").val($(this).val());
       });
     
      $('#Options1 input:checkbox').click(function() {
    $('#Options1 input:checkbox').not(this).prop('checked', false);
        });  


      $('#addroute').click(function () {

         var s = $('.frm_loc :selected').html();
          var i = 0;
          if ($('.frm_loc :selected').text() == '') {
              $('.frm_loc :selected').siblings('span.error').css('visibility', 'visible');
          } else {
              $('.frm_loc :selected').siblings('span.error').css('visibility', 'hidden');
              i++;
          }
          
           if ($('.to_loc :selected').text() == '') {
              $('.to_loc :selected').siblings('span.error').css('visibility', 'visible');
          } else {
              $('.to_loc :selected').siblings('span.error').css('visibility', 'hidden');
              i++;
          } 
          
          if ($('.veh_typ :selected').text() == '') {
              $('.veh_typ :selected').siblings('span.error').css('visibility', 'visible');
          } else {
              $('.veh_typ :selected').siblings('span.error').css('visibility', 'hidden');
              i++;
          } 
          
          if ($('.load_typ :selected').text() == '') {
              $('.load_typ :selected').siblings('span.error').css('visibility', 'visible');
          } else {
              $('.load_typ :selected').siblings('span.error').css('visibility', 'hidden');
              i++;
          }
          
          
          if ($('#prices').val() == '') {
              $('#prices').siblings('span.error').css('visibility', 'visible');
          } else {
              $('#prices').siblings('span.error').css('visibility', 'hidden');
              i++;
          }

         
   
          
          if (i == 5) {
              //alert(i);
              itm.push({
                  frm_loc: $('.frm_loc :selected').val(),
                    from_loc: $('.frm_loc :selected').html(),
                  to_loc: $('.to_loc :selected').val(),
                    to_location: $('.to_loc :selected').html(),
                  veh_typ: $('.veh_typ :selected').val(),
                    veh_type: $('.veh_typ :selected').html(),
                  load_typ: $('.load_typ :selected').val(),
                    load_type: $('.load_typ :selected').html(),
                  price: $('#prices').val()
               });
              
              $('.frm_loc').val($('.frm_loc :selected').val()).focus();
              $('.to_loc').val($('.to_loc :selected').val());
              $('.veh_typ').val($('.veh_typ :selected').val()),
              $('.load_typ').val($('.load_typ :selected').val()),
              $('#prices').val($('#prices').val());

      }
          addroute(itm);
      });
        
        //second discount btn will be appened here
          // Function For Show Added Items in Table
      function addroute(itm) {
         
         
          if (itm.length > 0) {

             $('#test').show();
              $('.ratecard,#rate_card').show();
              var $table = $('<table width="100%" border="0" cellspacing="0" cellpadding="0" id="tbUser"/>');
              $table.append('<thead><tr class="delsite"><th width="16%" align="left" valign="top">From Location</th><th width="16%" align="left" valign="top">To Location</th><th width="16%" align="left" valign="top">Load Type</th><th width="16%" align="left" valign="top">Vehicle Type</th><th width="16%" align="left" valign="top">Price</th><th width="16%" align="left" valign="top">Buyers</th></tr></thead>');
              
              var $tbody = $('<tbody/>');
              $.each(itm, function (i, val) {
                 
                  var $row = $('<tr/>');
                  $row.append($('<td align="left" valign="top"/><input type="hidden" name="jhfrm_loc[]" value="'+val.frm_loc+'"/>').html(val.from_loc));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" name="jhto_loc[]" value="'+val.to_loc+'"/>').html(val.to_location));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" name="jhload_typ[]" value="'+val.load_typ+'"/>').html(val.load_type));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" name="jhveh_typ[]" value="'+val.veh_typ+'"/>').html(val.veh_type));
                  
                  $row.append($('<td align="left" valign="top"/><input type="hidden" name="jhprice[]" value="'+val.price+'"/>').html(val.price));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" name="jhbuyer[]" value="0"/>').html('0')); 




            $row.append($('<td align="left" valign="top"><table border="0" align="left" cellpadding="0" cellspacing="0"> <tr><td align="left" valign="top"><a href="#" class="link-1">Edit</a></td><td width="10" align="left" valign="top"></td><td align="left" valign="top"><a href="#"  class="btnDelete"><img src="../images/delete-1.png"  alt="Delete" ></a></td></tr></table>'));
                $tbody.append($row);
              });
              
              $table.append($tbody);
              $('#OrderItems').html($table);
          }
          
          $('#tbUser').on('click','tr a',function(e){
              if(itm.length > 0){
                  e.preventDefault();
                  $(this).parents('tr').remove();
                  //$('#OrderItems').hide();
                  //$('.ratecard,#rate_card').hide();
              } 
        });
    }
    
    //customise













   
});