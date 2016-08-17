
<title>Logi stiks</title>
<link rel="stylesheet" href="/css/normalize.min.css">
<link rel="stylesheet" href="/css/styles.css">
 <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script> -->
<script src="/js/jquery-3.1.0.min.js"></script> 
<link rel="stylesheet" href="/css/text-filed-1.css">
<script src="/js/text-filed-1.js"></script>
<link rel="stylesheet" href="/css/jquery-ui.css">
<script src="/js/jquery-ui.js"></script>
<script src="/js/datepicker-shortcode.js"></script>
<link rel="stylesheet" href="/css/accordian.css">
<script src="/js/accordian-shortcode.js"></script>
<script src="/js/text-filed-1-shartcode.js"></script> 
<script src="/js/main.js"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  
 
  
  <script>
    $( function() {
    $( "#dispatch_dt" ).datepicker();
	$( "#delivery_dt" ).datepicker();
  } );
  
  var src = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "BASIC",
    "C",
    "C++",
    "Clojure",
    "COBOL",
    "ColdFusion",
    "Erlang",
    "Fortran",
    "Groovy",
    "Haskell",
    "Java",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python",
    "Ruby",
    "Scala",
    "Scheme"];

$("#auto").autocomplete({ 

    maxResults: 6,
    source: function(request, response) {
        var results = $.ui.autocomplete.filter(src, request.term);
        
        response(results.slice(0, this.options.maxResults));
    }
});
  </script>

<!--[if lt IE 9]>
	<script src="../js/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div class="header-wrapper">
    <div class="tbl-1">
      <div class="row-1">
        <div class="cell-1"><img src="/images/logo.png" alt="Logo"></div>
        <div class="cell-1">
          <div class="header-nav-1">
            <ul>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">Market Place</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">Community</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">Dealers</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">Tools</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#"><img src="/images/search.png" width="19" height="19" alt="Search"></a></li>
            </ul>
          </div>
        </div>
        <div class="cell-1">
          <div class="header-nav-2">
            <ul>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">
                <div class="header-icon-1" style="position:relative;">
                  <div style="position:absolute; z-index:999; background:#ff0000; width:20px; height:20px; left:15px; top:-10px; border-radius:100px; line-height:20px; font-size:14px; color:#fff; text-align:center;">5</div>
                  <img src="/images/messages-header.png" alt="Message"></div>
                Messages</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">
                <div class="header-icon-1"><img src="/images/posts-header.png" alt="Posts"></div>
                Posts</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">
                <div class="header-icon-1"><img src="/images/orders-header.png" alt="Orders"></div>
                Orders</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">
                <div class="header-icon-1"><img src="/images/network-header.png" alt="Network"></div>
                Network</a></li>
              <li><a href="http://psmprojects.net/logistiks/ver5/buyer/Buyer_Search_4.html#">
                <div class="header-icon-1"><img src="/images/profile-pic-header.png" alt="Profile"></div>
                Nair PV</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
