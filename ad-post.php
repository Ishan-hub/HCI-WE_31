<?php include('header1.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Create a Post</h1>
      </div>
       
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index1.php">Home</a> / <span>Create a Post</span></div>
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
              <center>    <h5>Ad Information</h5></center> <br>
            <div class="row">
              <div class="col-md-12">
                <div class="formrow">
                  <form method="post" action="postsubmit.php">
                  <input type="text" name="jobtitle" class="form-control" placeholder="Ad Title" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="indus">
                    <option>Ad type</option>
                    <option>I want to Sell</option>
                    <option>I want to Buy</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="indus">
                    <option>Item type</option>
                    <option>New</option>
                    <option>Used</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="indus">
                    <option>Property type</option>
                    <option>For Rent</option>
                    <option>For Sale</option>
                    <option>For Buy</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <select class="form-control" name="msalary">
                     <option>Select Catgory</option>
                    <option>Community</option>
                    <option>For Sale</option>
                    <option>Jobs</option>
                    <option>Housing</option>
                    <option>Discussion Forms</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
           
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <div class="uploadphotobx"> <i class="fa fa-upload" aria-hidden="true"></i>
                    <h4>Upload your photo</h4>
                    <label class="uploadBox">Click here to Upload
                      <input type="file" name="upload">
                    </label>
                  </div>
                 
                 
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="number" name="jobtitle" class="form-control" placeholder="Ad Price" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" name="jobtitle" class="form-control" placeholder="Ad Location" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="emptype">
                    <option>Select State</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="emptype">
                    <option>Select City</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="formrow">
                  <select class="form-control" name="experience">
                    <option>Country</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="formrow">
                  <textarea class="form-control" name="jobdetail" placeholder="Ad Detail" required></textarea>
                </div>
              </div>
            </div>
            <br>
            <input type="submit" class="btn" value="Post An Ad" >
              </div>
              
               
            
        </div> 
      </div> 
      </div>
    </div>
</div>

<?php include('footer.php') ?>