<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('/public/bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body>
  <div class="container">
      	<div class="jumbotron">
    		<h1>News Aggregator</h1>
	    </div>
	    <div class="row">
	    	<div class="col-md-8 col-md-offset-2">
			    <div class="navbar navbar-default">
			    	<div class="container-fluid">
			    		<div class="navbar-header">
				    		<ul class="nav navbar-nav">
							  <li role="presentation" class="@if(URL::current() == URL::to('/trend')) active @endif"><a href="trend">Trend</a></li>
							  <li role="presentation" class="@if(URL::current() == URL::to('/unikaneh')) active @endif"><a href="unikaneh">Unik &amp; Aneh</a></li>
							  <li role="presentation" class="@if(URL::current() == URL::to('/intermezo')) active @endif"><a href="intermezo">Intermezo</a></li>
							  <li role="presentation" class="@if(URL::current() == URL::to('/entertainment')) active @endif"><a href="entertainment">Entertainment</a></li>
							  <li role="presentation" class="@if(URL::current() == URL::to('/travel')) active @endif"><a href="travel">Travel</a></li>
							  <li role="presentation" class="@if(URL::current() == URL::to('/inspir	asi')) active @endif"><a href="inspirasi">Inspirasi</a></li>
							  <li role="presentation" class="@if(URL::current() == URL::to('/olahraga')) active @endif"><a href="olahraga">Olahraga</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li role="presentation" class="@if(URL::current() == URL::to('/english')) active @endif"><a href="english">English</a></li>
							</ul>
						</div>
					</div>
		    	</div>
			</div>		    	
	    </div>