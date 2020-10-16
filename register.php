<?php include('header.php') ?>

<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Register</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Register</span></div>
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
          
          <form method="post" action="registersuccess.php">
          <div class="userbtns">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#wsell">I want to sell</a></li>
              <li><a data-toggle="tab" href="#wbuy">I want to buy</a></li>
            </ul>
          </div>
            
            
          <div class="tab-content">
            <div id="wsell" class="formpanel tab-pane fade in active">
              <div class="formrow">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
              </div>
              <div class="formrow">
                <select class="form-control">
                	<option>Ad type</option>
                    <option>New</option>
                    <option>Used</option>
                </select>
              </div>
              <div class="formrow">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
              </div>
              <div class="formrow">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="formrow">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="formrow">
                <input type="password" name="conpass" class="form-control" placeholder="Confirm Password" required>
              </div>
              
              <input type="submit" class="btn" value="Register">
            </div>
             
              
               <form method="post" action="login.php">
            <div id="wbuy" class="formpanel tab-pane fade in">
              <div class="formrow">
                <input type="text" name="cname" class="form-control" placeholder="Full Name" required>
              </div>
              <div class="formrow">
                <input type="text" name="cusername" class="form-control" placeholder="Username" required>
              </div>
              <div class="formrow">
                <input type="email" name="cemail" class="form-control" placeholder="Email" required>
              </div>
              <div class="formrow">
                <input type="password" name="cpass" class="form-control" placeholder="Password" required>
              </div>
              <div class="formrow">
                <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required>
              </div>
              <div class="formrow">
                
              <input type="submit" class="btn" value="Register">
          
            </div>
          </div>
          <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> Already a Member? <a href="login.php">Login Here</a></div>
        
        </div>
            </form>
          </div>
        </div>
        
    </div>
  </div>
</div>

<?php include('footer.php') ?>