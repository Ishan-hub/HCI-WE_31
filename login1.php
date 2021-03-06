<?php include('header.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Login</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Login</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="userccount">
          <h5>User Login</h5>
          <!-- login form -->
          <div class="formpanel">
            <div class="formrow">
            <form action="ad-post.php">
              <input type="text" class="form-control" placeholder="Username" required>
            </div>
            <div class="formrow">
              <input type="password" class="form-control" placeholder="Password" required>
            </div>
            <input type="submit" class="btn" value="Login">
          </div>
              </form>
          <!-- login form  end--> 
          
          <!-- sign up form -->
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> New User? <a href="register.php">Register Here</a></div>
          <!-- sign up form end-->
          
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>