
<div class="overlay"></div>
@if (count($errors) == 0)
<div class="autorize-popup" >
  <div class="autorize-tabs">
    <a href="#" class="autorize-tab-a current">Sign in</a>
    <a href="#" class="autorize-tab-b">Register</a>
    <a href="#" class="autorize-close"></a>
    <div class="clear"></div>
  </div>
  <section class="autorize-tab-content">

      <div class="autorize-padding">
        <form class="" action="/login" method="POST">
          <h6 class="autorize-lbl">Welocome! Login in to Your Accont</h6>
          {{ csrf_field() }}
          <input type="hidden" name="redirurl"
              value="{{ $_SERVER['REQUEST_URI'] }}">
          <input type="text" name="username"value="" placeholder="Name" required>
          <input type="password" name="password"value="" placeholder="Password" required>
          <footer class="autorize-bottom">
            <button type="submit" class="authorize-btn">Login</button>
            <a href="#" class="authorize-forget-pass">Forgot your password?</a>
            <div class="clear"></div>
          </footer>
        </form>


      </div>


  </section>




  <section class="autorize-tab-content">
    <div class="autorize-padding">
      <form class="" action="{{ route('register') }}" method="POST">
        <h6 class="autorize-lbl">Register for Your Account</h6>
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input type="hidden" name="redirurl"
              value="{{ $_SERVER['REQUEST_URI'] }}">
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

          </div>
        </div>



        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
          <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name" required autofocus>
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>

        <input type="password" name="password" value="" placeholder="Password" required>
        <input type="password" name="password_confirmation" value="" placeholder="Confirm Password" required>
        <footer class="autorize-bottom">
          <button type="submit" class="authorize-btn">Registration</button>
          <div class="clear"></div>
        </footer>
      </form>

    </div>
  </section>
</div>
@endif


<!-- \\ authorize \\-->

<header id="top">
<div class="header-a">
  <div class="wrapper-padding">
    <div class="header-phone"><span>+628-2329-285-381</span></div>
    <div class="header-account">


        @if (empty(Auth::user()->name))
            <a href="login">login</a>
           @else
            <a>{{ Auth::user()->name }}</a>
            <a href="logout">logout</a>
           @endif


    </div>
    <div class="header-social">

      <a href="https://www.facebook.com/vctsurabaya/" target="_blank" class="social-facebook"></a>
      <a href="https://www.instagram.com/vintagecartour_surabaya/"  target="_blank" class="social-instagram"></a>
    </div>


    <div class="clear"></div>
  </div>
</div>
<div class="header-b">
  <!-- // mobile menu // -->
    <div class="mobile-menu">
      <nav>
        <ul>
          <li><a  href="/">HOME</a>

          </li>
          <li><a  href="/about_us">ABOUT US</a>

          </li>
          <li><a  href="/rute">Rute</a>

          </li>


          <li><a  href="/galeri">Galeri</a>

          </li>


          <li><a href="/contacts">Contacts</a></li>
        </ul>
      </nav>
    </div>
  <!-- \\ mobile menu \\ -->

  <div class="wrapper-padding">
    <div class="header-logo"><a href="/"><img alt="" src="" /></a></div>
    <div class="header-right">
      <div class="hdr-srch">
        <a href="#" class="hdr-srch-btn"></a>
      </div>
      <div class="hdr-srch-overlay">
        <div class="hdr-srch-overlay-a">
          <input type="text" value="" placeholder="Start typing...">
          <a href="#" class="srch-close"></a>
          <div class="clear"></div>
        </div>
      </div>
      <div class="hdr-srch-devider"></div>
      <a href="#" class="menu-btn"></a>
      <nav class="header-nav">
        <ul>
          <li><a href="/">Home</a>

          </li>
          <li><a href="/about_us">About Us</a>

          </li>
          <li><a href="/rute">Rute</a>

          </li>


          <li><a href="/galeri">Galeri</a>

          </li>


          <li><a href="/contacts">Contacts</a></li>
        </ul>
      </nav>
    </div>
    <div class="clear"></div>
  </div>
</div>
</header>
