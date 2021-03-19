$('.navbar').html(`
<div class="container loss">
  
  <a class="menu-trigger show-mobile"><span class="fas fa-bars"></span></a>
  <a class="navbar-brand" href="#"><img src="_assets/img/logo.png"/></a>
  
  <div class="fik-navbar-menu">
    <ul class="center">
      <li><a href="Home.html">Home</a></li>
      <li><a href="Event.html">Semua Event</a></li>
      <li><a href="Buat_Event.html">Buat Event</a></li>
    </ul>
    <ul class="right">
      <div class="dropdown show fik-login-dropdown">
        <a class="btn btn-sm btn-pill btn-icon btn-icon-left dropdown-toggle" href="#" role="div" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="fa fa-user-circle"></span> Login
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
          <div class="dropdown-item regis-dropdown">
            <form action="#">
              <h6>Login to Account</h6>
              <div class="custom-form">
                <div class="form-group" style="margin-bottom:12px">
                  <input type="text" name="" class="form-control" placeholder="" required="required" autocomplete="off" />
                  <label>Username</label>
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="" required="required" autocomplete="off" />
                  <label>Password</label>
                </div>
              </div>
              <button class="btn btn-primary btn-sm btn-icon btn-icon-right">Login <span class="fas fa-sign-in-alt"></span></button>
            </form>
          </div>
        </div>

      </div>
    </ul>
  </div>

</div>
`);
