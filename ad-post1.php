<?php include('header1.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Create a Post</h1>
      </div>
       
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Create a Post</span></div>
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
              <center>     <h5>Ad Information</h5> </center><br>
            <div class="row">
              <div class="col-md-12">
                <div class="formrow">
                  <form method="post" action="postsubmit.php">
                  <input type="text" value="Vastu Consultant im Navi Mumbai" name="jobtitle" class="form-control" placeholder="Ad Title" required>
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
                  <input type="text" value="Rs9000.00" name="jobtitle" class="form-control" placeholder="Ad Price" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="formrow">
                  <input type="text" value="Panvel, Navi Mumbai" name="jobtitle" class="form-control" placeholder="Ad Location" required>
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
                  <textarea class="form-control" name="jobdetail" placeholder="Ad Detail" required>Vastu Doctor is one of the best Vastu consultancy services in Navi Mumbai. Dr. Mahesh Surve, Owner of the Vastu Doctor has more than 15 years of experience in Vastu Shastra and Vastu Consultancy. We have various branches spread across Maharashtra. We offer services in Navi Mumbai, Mumbai, Thane, Nashik, Pune, etc.
                      
             Being the best Vastu Consultant and Vastu expert in Navi Mumbai, we offer fairly priced services that are effective and reliable. We offer All the Vastu related services like Vastu Shanti, Vastu for Home, Vastu for Health, Vastu for Relationship, Vastu for Business and, Rang Shastra. Along with Vastu Services, We also offer other services like Astrology, Numerology, Palmistry, Gemology, Kundali matching and, Havan and Pooja that are again fairly priced, effective, and reliable. Our Vastu Consultants are highly qualified, experienced, and expert in planning and Vastu interior designing. 
                      
              To know more you can visit our website Vastu Doctor. In case you have any doubt, You can ask us by submitting your questions in Ask the Consultant. You can also contact us virtually by filling our Contact Us form. You can also visit our branch. We have our headquarter in Panvel, Navi Mumbai. To know more, visit https://vastudoctor.com/vastu-consultant-in-navi-mumbai</textarea>
                </div>
              </div>
            </div>
            <br>
            <input type="submit" class="btn" value="Save and Update Post" >
              </div>
              
               
            
        </div> 
      </div> 
      </div>
    </div>
</div>

<?php include('footer.php') ?>