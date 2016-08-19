$(document).ready(function(){
    
// $('#discount_add').on('click',function(){
//         var title = $('.disc_name').val();
//             var title1 = $('.disc_type').val();
//             var title2 = $('.discount').val();
//             var title3 = $('.crid_day').val();
//          
//          alert(title);
//          alert(title1);
//          alert(title2);
//          alert(title3);
//     
// });
$('#add_discount').hide();
     var itm = [];
      // Add Button Click Function
      $('#discount_add').on('click',function(){
          
         var title = $('.disc_name').val();
             var title1 = $('.disc_name :selected').html();
             var title2 = $('.discount').val();
             var title3 = $('.crid_day').val();
          
          
          
          
          var i = 0;
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
              
              $('.disc_name').text('');
              $('.disc_type').text('');
              $('.discount').text('');
              $('.crid_day').text('');
                      

          }
          GenratedItemTable(itm);
          
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