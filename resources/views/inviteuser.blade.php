@extends('layouts.default')
@section('content')
<div class="container-1">
<div class="bread-crumb-2">
            <div class="tbl-1">
              <div class="row-1">
                <div class="cell-1"> Home &gt; Profile &gt;  Corporate
 </div>
                <div class="cell-1 text-right">
                  <!--<div class="post-get-quote"><a href="#">Post & Get Quote</a></div>-->
                </div>
              </div>
            </div>
          </div>

  <div class="tbl-1">
    <div class="row-1">
      <div class="cell-1 menu-width-1">
       <div class="report-person-icon">
       <div class="report-table-1">
       	<div class="report-row-1">
        	<div class="report-cell-1"><img src="/images/report_2-icon.png" alt="img"></div>
            <div class="report-cell-1">CSN Murthy</div>
        </div>
       </div>
       
       </div>        <ul id="new-accordian-menu">
          <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#"></a></li>
          <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="act"><p>Profile</p></a>
          <ul style="display:none;">
              
              <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">Market Profile </a></li>
              <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">Conditions</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#"><b style="text-decoration:underline">Privacy</b></a></li>
            </ul>
          </li>
          
          
          
                        
<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="act active"><p>Users</p></a></li>
<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="act "><p>Customers</p></a></li>
<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="act"><p>Suppliers</p></a></li>
<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="act"><p>Inventory</p></a></li>
<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="act"><p>Sales</p></a></li>
<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="act"><p>Purchases</p></a></li>
<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="act"><p>Documents</p></a></li>
        </ul>
      </div>
      <div class="cell-1">
        <div class="content-area-1">
          
          <!--Content Start-->
         <div class="bg-sec1">
         	<div class="column-1">
            
            <div class="report-2-ul">
                	<div class="report-2-ul-1">
                    	<ul>
                        	<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="active">Users </a></li>
                            <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">Rights Management</a></li>
                        </ul>
                    </div>
                    
                    <div class="report-2-ul-2">
                    	<ul>
                        	<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">Download</a></li>
                            <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">PDF</a></li>
                            <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">CSV</a></li>
                            <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">XL</a></li>
                            <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">Email</a></li>
                            <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">Print</a></li>
                        </ul>
                    </div>
                    
                    
              </div>
                <div class="clearfix"></div>
                <br>

                
                <table width="70%" border="0" cellspacing="0" cellpadding="0" class="report-4-table-2">
  <tbody><tr>
    <td><strong>Name</strong></td>
    <td><strong>Designation</strong></td>
    <td><strong>Services</strong></td>
    <td><strong>Rights</strong></td>
    <td><strong>Activity</strong></td>
    <td>&nbsp;</td>
  </tr>
  @foreach($getInviteusers as $key=>$value)
  <tr>
    <td>{{$value->first_name}}*</td>
    <td>{{$value->designation}}</td>
    <td>All</td>
    <td>Create &amp; Post </td>
    <td>History</td>
    <td><img src="/images/message-icon2.png" alt="setting" width="17" height="13"></td>
  </tr>
  @endforeach
  <tr>
    <td class="report-4-table-5">Vijay</td>
    <td>Manager</td>
    <td>FTL All </td>
    <td>All</td>
    <td>&nbsp;</td>
    <td><img src="/images/message-icon2.png" alt="setting" width="17" height="13"></td>
  </tr>
  </tbody></table><div class="clearfix"></div>
                <br>
            	
                <div class="report-2-ul">
                	<div class="report-2-ul-1">
                    	<ul>
                        	<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">Users </a></li>
                            <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="active">Rights Management</a></li>
                        </ul>
                  </div>
                    
                    
                    
                    
              </div>
                
                <table width="80%" border="0" cellspacing="0" cellpadding="0" class="report-4-table-1">
              <tbody><tr>
                <td><input type="text" id="user_name" name="user_name" class="text-fileld-2" placeholder="User Name "></td>
                 <td><input type="text" id="user_designation" name="user_designation" class="text-fileld-2" placeholder="Designation"></td>
                  <td><input type="text" id="email_id" name="email_id" class="text-fileld-2" placeholder="Email ID "></td>
                  <td><input type="password" id="user_password" name="user_password" class="text-fileld-2" placeholder="Password"></td>
                <td><input type="button" id="user_invite" name="user_invite" value="Invite"  class="button-red-1"></td>
              </tr>
            </tbody></table>
                
                
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="report-4-table-5">
  <tbody><tr>
    <td><strong>USER </strong></td>
    <td width="9%"><strong>SERVICES </strong></td>
    <td width="9%"><strong>DRAFT</strong></td>
    <td width="9%"><strong>EDIT</strong></td>
    <td width="9%"><strong>APPROVE</strong></td>
    <td width="9%"><strong>DISPLAY</strong></td>
    <td width="9%"><strong>DELETE </strong></td>
    <td width="9%"><strong>FIN.LIMIT</strong></td>
    <td width="9%"><strong>QTY. LIMIT</strong></td>
    <td width="9%"><strong> QTY. LIMIT</strong></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>CSN Admin*</td>
    <td>All</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>To Set</td>
    <td>To Set</td>
    <td>Yes</td>
    <td><img src="/images/setting-icon-2.png" alt="setting" width="13" height="13"></td>
  </tr>
  </tbody></table><br>
<br>

  
                
                <div class="report-2-ul">
                	<div class="report-2-ul-1">
                    	<ul>
                        	<li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#">De-Activate User </a></li>
                            <li><a href="http://psmprojects.net/logistiks/ver13/report/report-4.html#" class="active">Re Set Password </a></li>
                        </ul>
                    </div>
                </div>
                
                
                <table width="80%" border="0" cellspacing="0" cellpadding="0" class="report-4-table-1">
              <tbody><tr>
                <td><input type="text" class="text-fileld-2" placeholder="User Name "></td>
                 <td><input type="text" class="text-fileld-2" placeholder="New Password "></td>
                  <td><input type="text" class="text-fileld-2" placeholder="Email ID "></td>
                <td><input type="button" value="Reset" class="button-red-1"></td>
              </tr>
            </tbody></table>
            <div class="clearfix"></div>
            
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="report-4-table-5">
  <tbody><tr>
    <td>Ram Admin*</td>
    <td width="9%">All</td>
    <td width="9%">Yes</td>
    <td width="9%">Yes</td>
    <td width="9%">Yes</td>
    <td width="9%">Yes</td>
    <td width="9%">Yes</td>
    <td width="9%">To Set</td>
    <td width="9%">To Set</td>
    <td width="9%">Yes</td>
    <td><img src="/images/setting-icon.png" alt="setting" width="13" height="13"></td>
  </tr>
  <tr>
    <td>Anand </td>
    <td>FTL</td>
    <td>Rate card</td>
    <td>Yes</td>
    <td>No</td>
    <td>Yes</td>
    <td>No</td>
    <td>25 L</td>
    <td>10000</td>
    <td>No</td>
    <td><img src="/images/setting-icon.png" alt="setting" width="13" height="13"></td>
  </tr>
  <tr>
    <td>Bala</td>
    <td>FTL</td>
    <td>Quote</td>
    <td>Yes</td>
    <td>No</td>
    <td>Yes</td>
    <td>No</td>
    <td>15 L</td>
    <td>5000</td>
    <td>No</td>
    <td><img src="/images/setting-icon.png" alt="setting" width="13" height="13"></td>
  </tr>
  <tr>
    <td>Vijay</td>
    <td>FTL</td>
    <td>All</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>No</td>
    <td>50 L</td>
    <td>20000 </td>
    <td>&nbsp;</td>
    <td><img src="/images/setting-icon.png" alt="setting" width="13" height="13"></td>
  </tr>
  </tbody></table>

            

            </div> 
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
<script src="/js/text-filed-1-shartcode.js"></script>
<script src="/js/main.js"></script>
<script>
$('#user_invite').on('click',function(){

    var user_name = $('#user_name').val();
    var user_designation = $('#user_designation').val();
    var email_id = $('#email_id').val();
    var user_password = $('#user_password').val();

      $.ajax
        (
          {
            url: '/sendMail',
            type: "GET", 
            data: "user_name=" + user_name + "&user_designation=" + user_designation + "&email_id=" + email_id + "&user_password=" + user_password,
            success: function(result)
            {
              
              alert(result);
               
            },
            error:function()
            {
              //console.log("AJAX request was a failure");
            }   
          }
        );    

});
</script>

@stop