<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- CSRF Token -->
<style type="text/css" media="screen">
#homepage {
margin-top: 100px;
}
</style>

<title>SEND SMS</title>
</head>
<body>
<div id="homepage">
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="{{ url('/sms') }}">SEND SMS</a>
</div>
<div id="navbar" class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li class="active"><a href="{{ url('/sms') }}">Home</a></li>
</ul>
</div><!--/.nav-collapse -->
</div>
</nav>

<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="panel panel-default">

@if(session()->has('message'))
<div class="alert alert-success">
{{ session()->get('message') }}
</div>
@endif

<!-- <div class="panel-heading">
<h3 class="panel-title">Send Web SMS</h3>
</div> -->
<div class="panel-body">
<form id="myForm" method="POST" action="{{ url('sms/send') }}">
@csrf
<fieldset>
<div class="form-group">
<input class="form-control" placeholder="Your Phone Number" name="mobileNumber" type="number" autofocus>
</div>

<div class="form-group">
	<textarea class="form-control" name="message" rows="4" placeholder="Your Message"></textarea>
</div>

<!-- Change this to a button or input when using this as a form -->
<button id="submitBtn" type="submit" class="btn btn-success btn-block">Send Message</button>
</fieldset>
</form>
</div>
</div>
</div>
</div>

</div><!-- /.container -->

</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>
$('#myForm').submit(function(){
$('#submitBtn').html('Sending...');
});
</script>

</html>