<?php include('header1.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Edit Profile</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index1.php">Home</a> / <span>Edit Profile</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="userccount">
          <div class="formpanel"> 
            <form method="post" action="editsuccess.php">
            <!-- Personal Information -->
              <center><h5>Edit Personal Information</h5></center><br>
            <div class="row">
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="fname" value="Ravi" class="form-control" placeholder="First Name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="lname" value="Jay" class="form-control" placeholder="Last Name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="email" name="email" value="ravij@gmail.com" class="form-control" placeholder="Email" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="phone" value="0874324123" class="form-control" placeholder="Phone Number" required>
                </div>
              </div>
            
              <div class="col-md-6">
                <div class="formrow">
                  <input type="file" name="uploadcv" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <textarea name="aboutme" class="form-control" placeholder="About Me" required>I am a businessman</textarea>
                </div>
              </div>
			  <input type="submit" class="btn" value="Update and Save">
            </div>
            <hr>
            
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

           
            
            


<?php include('footer.php') ?>