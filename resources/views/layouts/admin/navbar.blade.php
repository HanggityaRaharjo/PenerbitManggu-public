
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{asset('assetsadmin')}}/index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item dropdown user-menu">
        <a class="nav-link font-weight-bold" data-toggle="dropdown" href="#">
          <img src="{{asset('assets')}}/images/favicons/android-chrome-192x192.png" class="user-image" alt="User Image" style="margin-top: -4px;">
          <span class="hidden-xs"></span>{{ucfirst(Auth::user()->name)}}
        </a>
        <ul class="dropdown-menu" style="border-radius: .25rem; top:45px;">
          <div class="card card-widget widget-user shadow" style="margin-bottom: 0px">
            <div class="widget-user-header" style="background-color: #343a40">
              <h3 class="widget-user-username"> <img src="{{asset('assets')}}/images/manggulogo1.png" width="250" alt=""></h3>
              {{-- <h5 class="widget-user-desc">Founder &amp; CEO</h5> --}}
            </div>
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="{{asset('assets')}}/images/favicons/android-chrome-192x192.png" alt="User Avatar">
            </div>
            <div class="card-footer">
              <div class="float-left">
                <a type="button" class="btn btn-default btn-flat" data-toggle="modal" data-target="#Profile">Profile</a>
              </div>
              <div class="float-right">
                <form>
                  <a href="{{route('logout')}}" type="submit" class="nav-link btn btn-default btn-flat"><i class="fas fa-sign-out-alt">Logout</i></a>
                </form>
              </div>
              <!-- /.row -->
            </div>
          </div>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <div class="modal fade" id="Profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div>
             <img class="img-circle elevation-2" src="{{asset('assets')}}/images/favicons/android-chrome-192x192.png" alt="User Avatar">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Sidebar Container -->
