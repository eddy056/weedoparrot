
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to WeedOParrot</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  <script src="//js.pusher.com/2.2/pusher.min.js"></script>
  <script src="/js/pusher.js"></script>
  
      <link rel="stylesheet" href="/css/welcome.css">
  	<style>
		@import  url(//fonts.googleapis.com/css?family=Lato:700);
	</style>
</head>
<body id="splash"> 

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a class="navbar-brand" href="/">WeedOParrot</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/home">Weed Lists</a></li>
        <li><a href="/about">About</a></li>
                      <li><a href="/register">Create Account</a></li>
            <li><a href="/login">Sign In</a></li>
                  </li>
      </ul>
    </div>

  </div>
</nav>

  <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
    <div class="row">
      <div class="col-md-12">

        <div id="pusher"></div>

              </div>
    </div>

    <div class="row">
      <div class="col-md-12">
          
<div class="row">
  <div class="col-md-12" style="text-align: center; padding-top: 30%; color: #fff;">
    <h1>Welcome to WeedOParrot</h1>
    <p>
    Yes we're another WeedOparrot startup !
    </p>

          <a href="/register" class="btn btn-primary">Create an account</a>
    
    <p id="list_count">

    </p>

  </div>
</div>

    
      </div>
    </div>

  </div>
    
</body>
</html>
