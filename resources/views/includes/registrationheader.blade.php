
<title>Logi stiks</title>
<link rel="stylesheet" href="/css/normalize.min.css">
<link rel="stylesheet" href="/css/styles.css">
<script src="/js/jquery-3.1.0.min.js"></script>
<script src="/js/jquery.validate.min.js"></script>
<link rel="stylesheet" href="/css/text-filed-1.css">
<script src="/js/text-filed-1.js"></script>
<link rel="stylesheet" href="/css/jquery-ui.css">
<script src="/js/jquery-ui.js"></script>
<script src="/js/datepicker-shortcode.js"></script>
<link rel="stylesheet" href="/css/accordian.css">
<script src="/js/accordian-shortcode.js"></script>
<script src="/js/text-filed-1-shartcode.js"></script> 
<script src="/js/main.js"></script>
<script src="/js/additionalMethods.js"></script>

  
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
alert("hello");
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
              <li><a href="#">Market Place</a></li>
              <li><a href="#">Community</a></li>
              <li><a href="#">Dealers</a></li>
              <li><a href="#">Tools</a></li>
              <li><a href="#"><img src="/images/search.png" width="19" height="19" alt="Search"></a></li>
            </ul>
          </div>
        </div>
        @if(!empty($registration_status))
        <div class="cell-1">
          <div class="header-login-box">
          <form action="/checkAuth" id="form_id" name="form_id">
            <div class="login-table-1">
              <div class="login-row-1">
                <div class="login-cell-1">
                  <input type="text" id="login_email" name="login_email" placeholder="emailId" class="login-text-fileld">
                </div>
                <div class="login-cell-1">
                  <input type="password" id="login_password" name="login_password" placeholder="Password" class="login-text-fileld">
                </div>
                <div class="login-cell-1">
                  <input type="submit" id="login_submit" name="login_submit" value="Login" class="button-gray-3">
                </div>
              </div>
              <div class="login-row-1">
                <div class="login-cell-1"><a href="/forgotPassword">Forgot Password </a></div>
                <div class="login-cell-1"><a href="#">Not a Member ?</a></div>  
                <div class="login-cell-1"><a href="memberRegistration">Register Now</a></div>
              </div>
              <div>
             <!--  @if(!empty($errorMsg))
              {{$errorMsg}}
              @endif -->  
              @if($errors->any())
              <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
              </ul>
              @endif
            </div>
            </div>
          </form>
          </div>
        </div>
        @endif
      </div>
    </div>
  </div>
  </header>
<div class="container">

  

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>