<?php include('header.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Feedback Form</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Feedback</span></div>
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
            
            <!-- Ad Information -->
            <center><h2>Feedback</h2></center>
              <br>
            <div class="row">
				<div class="col-md-6">
                <div class="formrow">
                    <form method="POST" action="feedbackDetails.php">
                  <input type="text" name="jobtitle" class="form-control" placeholder="First Name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="jobtitle" class="form-control" placeholder="Last Name" required>
                </div>
              </div>
				
              <div class="col-md-12">
                <div class="formrow">
                  <input type="text" name="jobtitle" class="form-control" placeholder="Email Address" required>
                </div>
              </div>
              
              
              
              
     
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="jobdetail" placeholder="Comment or Describe Feedback" required></textarea>
                </div>
              </div>
            </div>
            <br>
            
            <input type="submit" class="btn" value="Submit" action="feedbackDetails.php">
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>