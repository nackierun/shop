<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title>Shop</title>

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('mytemp/myui/images/favicon.ico') }}">

<!-- jQuery -->
<script src="{{ asset('mytemp/myui/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="{{ asset('mytemp/myui/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<link href="{{ asset('mytemp/myui/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="{{ asset('mytemp/myui/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">

<!-- plugin: owl carousel  -->
<link href="{{ asset('mytemp/myui/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('mytemp/myui/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
<script src="{{ asset('mytemp/myui/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- custom style -->
<link href="{{ asset('mytemp/myui/css/ui.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('mytemp/myui/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="{{ asset('mytemp/myui/js/script.js') }}" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

});
// jquery end
</script>

</head>
<body>


 <div class="container">
@include('customers.layouts.tempnav')
@yield('content')
 </div>


  <!-- ========================= FOOTER ========================= -->
  <footer class="section-footer bg-secondary">
  	<div class="container">
  		<section class="footer-top padding-top">
  			<div class="row">
  				<aside class="col-sm-3 col-md-3 white">
  					<h5 class="title">บริการ</h5>
  					<ul class="list-unstyled">
  						<li> <a href="https://github.com/nackierun">สอบถาม</a></li>
  					</ul>
  				</aside>
  				<aside class="col-sm-3  col-md-3 white">
  					<h5 class="title">บัญชี</h5>
  					<ul class="list-unstyled">
              @guest
  						<li> <a href="{{ route('login') }}"> Login </a></li>
              @if (Route::has('register'))
  						<li> <a href="{{ route('register') }}"> register </a></li>
              @endif
          @else
              <li>{{ Auth::user()->name }}</li>
  						<li> <a href="{{ url('customers/orders/'. Auth::user()->id ) }}"> คำสั่งซื้อ </a></li>
           @endguest
            </ul>
  				</aside>
  				<aside class="col-sm-3  col-md-3 white">
  					<h5 class="title">เกี่ยวกับ</h5>
  					<ul class="list-unstyled">
  						<li> <a href="https://github.com/nackierun"> Github </a></li>
  					</ul>
  				</aside>
  				<aside class="col-sm-3">
  					<article class="white">
  						<h5 class="title">ติดต่อ</h5>
  						<p>
  							<strong>Phone: </strong> 0917695191 <br>
  						</p>
  					</article>
  				</aside>
  			</div> <!-- row.// -->
  			<br>
  		</section>
  		<section class="footer-bottom row border-top-white">
  			<div class="col-sm-6">
  				<a href="https://github.com/nackierun" class="text-white-50"><i class="icon-sm fa fa-at">github.com/nackierun</i></a>
  			</div>
  			<div class="col-sm-6">
  				<p class="text-md-right text-white-50">
  	Copyright &copy  <br>
  <a href="https://github.com/nackierun" class="text-white-50">:D</a>
  				</p>
  			</div>
  		</section> <!-- //footer-top -->
  	</div><!-- //container -->
  </footer>
  <!-- ========================= FOOTER END // ========================= -->


  </body>
  </html>
