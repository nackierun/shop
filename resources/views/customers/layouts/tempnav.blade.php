<header class="section-header">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  	<a class="navbar-brand" href="/"><img class="logo" src="/storage/images/logo.jpg" alt="alibaba style e-commerce html template file" title="My Shop">My shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-lg-9-24 col-sm-12">
  		<div class="widgets-wrap float-right row no-gutters py-1">
        <div class="col-auto">
  				<a href="{{ url('customers/mycart') }}" class="widget-header">
  					<div class="icontext">
  						<div class="icon-wrap"><i class="text-warning icon-sm fa fa-cart-plus"></i></div>
  						<div class="text-wrap text-dark">
                <span class="small round badge badge-secondary">{{ \App\Cart::where('session_id', session()->get('session_id'))->count() }}</span>
  							ตะกร้า <br>
  						</div>
  					</div>
  				</a>
  			</div> <!-- col.// -->
        <i class="text-warning icon-sm fa fa-user"></i>
        <ul class="navbar-nav">
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                     data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          </ul> <!-- navbar-nav.// -->
  			<div class="col-auto">
  				<a href="{{ url('customers/orders/'. Auth::user()->id ) }}" class="widget-header">
  					<div class="icontext">
  						<div class="icon-wrap"><i class="text-warning icon-sm  fa fa-cart-arrow-down"></i></div>
  						<div class="text-wrap text-dark">
  							<div>คำสั่งซื้อ</div>
  						</div>
  					</div>
  				</a>
  			</div> <!-- col.// -->
        @endguest
  		</div> <!-- widgets-wrap.// row.// -->
  	</div> <!-- col.// -->
  </div>
</nav>
</header> <!-- section-header.// -->
