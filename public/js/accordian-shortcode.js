$(document).ready(function () {
  $('#new-accordian-menu > li > a.act').click(function(e){
     if ($(this).attr('class') != 'active'){
       $('#new-accordian-menu li ul').not($(this).next()).slideUp(500);
	   $(this).next().slideToggle();
	   $('#new-accordian-menu li a.act').removeClass('active');
	   $(this).addClass('active');
	 }
	 e.preventDefault();
  });
});