$(document).ready(function(){
$('#discount-content-1').hide();


     var itm = [];
    var user_itm=[];
      // Add Button Click Function
     $('#discount-btn-1').on('click',function(){
      $('#discount-content-1').show();
        //table to enter discounts
      $('#user_discount_add').on('click',function(){  

             var i = 0;
             var title = $('.user_name :selected').text();
             var title1 = $('.user_name :selected').html();
             var title2 = $('.user_discount_type :selected').html();
             var title3 = $('.user_discount').val();
             var title4 = $('.user_crid_day').val();

             if ($('.user_name :selected').text()== '') {
              $('.user_name :selected').siblings('span.error').css('visibility', 'visible');
          } else {
              $('.user_name :selected').siblings('span.error').css('visibility', 'hidden');
              i++;
          }

          if ($('.user_discount_type :selected').text() == '') {
              $('.user_discount_type :selected').siblings('span.error').css('visibility', 'visible');

          } else {
              $('.user_discount_type :selected').siblings('span.error').css('visibility', 'hidden');
              i++;
          }
          
         if ($('.user_discount').val() == '') {
              $('.user_discount').siblings('span.error').css('visibility', 'visible');

          } else {
              $('.user_discount').siblings('span.error').css('visibility', 'hidden');
              i++;
          }
          
          if ( $('.user_crid_day').val() == '') {
              $('.user_crid_day').siblings('span.error').css('visibility', 'visible');

          } else {
              $('.user_crid_day').siblings('span.error').css('visibility', 'hidden');
              i++;
          }



              if (i == 4) {
              user_itm.push({
                  user_disc_name: $('.user_name :selected').val(),
                  user_disc_name_text: $('.user_name :selected').html(),
                  user_disc_type: $('.user_discount_type :selected').val(),
                  user_disc_type_title : $('.user_discount_type :selected').html(),
                  user_discount: $('.user_discount').val(),
                  user_crid_day: $('.user_crid_day').val(),
                              
              });
              
              $('.user_name').val($('.user_name :selected').html());
              $('.user_discount_type').val($('.user_discount_type :selected').html());
              $('.user_discount').val($('.user_discount').val());
              $('.user_crid_day').val($('.user_crid_day').val());
          }
              userdiscounts(user_itm);


        });
    
    });




     function userdiscounts(user_itm) {

          if (user_itm.length > 0) {

              var $table = $('<table width="100%" border="0" cellspacing="0" cellpadding="0" id="user_add_discount">');
              $table.append('<thead> <tr><th width="18%" align="left" valign="top">Name</th><th width="18%" align="left" valign="top">Discount Type</th><th width="185" align="left" valign="top">Discount</th><th width="18%" align="left" valign="top">Credit Days</th><th width="18%" align="left" valign="top">Net Price</th><th align="left" valign="top">&nbsp;</th></tr></thead>');
   
              var $tbody = $('<tbody/>');
              $.each(user_itm, function (i, val) {

                  var $row = $('<tr/>');
                  $row.append($('<td align="left" valign="top"/><input type="hidden" value="'+val.user_disc_name+'" name="user_disc_name[]"/>').html(val.user_disc_name_text));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" value="'+val.user_disc_type+'" name="user_disc_type[]"/>').html(val.user_disc_type_title));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" value="'+val.user_discount+'" name="user_discount[]"/>').html(val.user_discount));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" value="'+val.user_crid_day+'" name="user_crid_day[]"/>').html(val.user_crid_day));
                  $row.append($('<td align="left" valign="top"/>').html('100'));
                 
                  $row.append($('<td align="left" valign="top"><table border="0" align="left" cellpadding="0" cellspacing="0"> <tr><td align="left" valign="top"><a href="#" class="link-1">Edit</a></td><td width="10" align="left" valign="top"></td><td align="left" valign="top"><a href="#"  class="delRoutes"><img src="../images/delete-1.png"  alt="Delete" ></a></td></tr></table>'));
                $tbody.append($row);
              });
              
              $table.append($tbody);
              $('#user_add_discount').html($table);
          }
          $('#user_add_discount').on('click','tr a',function(e){
              if(itm.length > 0){
                  e.preventDefault();
                  $(this).parents('tr').remove();
                  //$('#OrderItems').hide();
                  //$('.ratecard,#rate_card').hide();
              } 
        });
    }

















































$('#discount-content-2').hide();

    $("#discount-btn-2").on('click',function(){

        $('#discount-content-2').show();
          $('#discount_add').on('click',function(){
           var i = 0;
             var title = $('.disc_name').val();
             var title1 = $('.disc_name :selected').html();
             var title2 = $('.discount').val();
             var title3 = $('.crid_day').val();
            
          
          
          if ($('.disc_name :selected').text()== '') {
              $('.disc_name :selected').siblings('span.error').css('visibility', 'visible');

          } else {
              $('.disc_name :selected').siblings('span.error').css('visibility', 'hidden');
              i++;
          }
          if ($('.disc_type :selected').text() == '') {
              $('.disc_type :selected').siblings('span.error').css('visibility', 'visible');

          } else {
              $('.disc_type :selected').siblings('span.error').css('visibility', 'hidden');
              i++;
          }
          
         if ($('.discount').val() == '') {
              $('.discount').siblings('span.error').css('visibility', 'visible');

          } else {
              $('.discount').siblings('span.error').css('visibility', 'hidden');
              i++;
          }
          
          if ( $('.crid_day').val() == '') {
              $('.crid_day').siblings('span.error').css('visibility', 'visible');

          } else {
              $('.crid_day').siblings('span.error').css('visibility', 'hidden');
              i++;
          }
 
          if (i == 4) {
              itm.push({
                  disc_name: $('.disc_name :selected').val(),
                  disc_name_text: $('.disc_name :selected').html(),
                  disc_type: $('.disc_type :selected').val(),
                    disc_type_title : $('.disc_type :selected').html(),
                  discount: $('.discount').val(),
                  crid_day: $('.crid_day').val(),
                              
              });
              
              $('.disc_name').val($('.disc_name :selected').html());
              $('.disc_type').val($('.disc_type :selected').html());
              $('.discount').val($('.discount').val());
              $('.crid_day').val($('.crid_day').val());
          }
          GenratedItemTable(itm);
          
      });

  });
          // Function For Show Added Items in Table
      function GenratedItemTable(itm) {

         $('#add_discount').show();
          if (itm.length > 0) {
              var $table = $('<table width="100%" border="0" cellspacing="0" cellpadding="0" id="discount_table">');
              $table.append('<thead> <tr><th width="18%" align="left" valign="top">Name</th><th width="18%" align="left" valign="top">Discount Type</th><th width="185" align="left" valign="top">Discount</th><th width="18%" align="left" valign="top">Credit Days</th><th width="18%" align="left" valign="top">Net Price</th><th align="left" valign="top">&nbsp;</th></tr></thead>');
    
              var $tbody = $('<tbody/>');
              $.each(itm, function (i, val) {
                  //alert(val.disc_type);
                  var $row = $('<tr/>');
                  $row.append($('<td align="left" valign="top"/><input type="hidden" value="'+val.disc_name+'" name="disc_name[]"/>').html(val.disc_name_text));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" value="'+val.disc_type+'" name="disc_type[]"/>').html(val.disc_type_title));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" value="'+val.discount+'" name="discount[]"/>').html(val.discount));
                  $row.append($('<td align="left" valign="top"/><input type="hidden" value="'+val.crid_day+'" name="crid_day[]"/>').html(val.crid_day));
                  $row.append($('<td align="left" valign="top"/>').html('100'));
                 
                  $row.append($('<td align="left" valign="top"><table border="0" align="left" cellpadding="0" cellspacing="0"> <tr><td align="left" valign="top"><a href="#" class="link-1">Edit</a></td><td width="10" align="left" valign="top"></td><td align="left" valign="top"><a href="#"  class="delRoutes"><img src="../images/delete-1.png"  alt="Delete" ></a></td></tr></table>'));
                $tbody.append($row);
              });
              
              $table.append($tbody);
              $('#add_discount').html($table);
          }
          $('#discount_table').on('click','tr a',function(e){
              if(itm.length > 0){
                  alert(itm.length);
                  e.preventDefault();
                  $(this).parents('tr').remove();
                  //$('#OrderItems').hide();
                  //$('.ratecard,#rate_card').hide();
              } 
        });
    }
});