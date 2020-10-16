<?php include('header1.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">My Active Ads</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href=index1.php>Home</a>/<span>My Active Ads</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="inner-page">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <ul class="usernavdash">
          
         <li><a href="index1.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Home</a></li>
          <li><a href="editprofile1.php"><i class="fa fa-user" aria-hidden="true"></i> Edit Profile</a></li>
          <li ><a href="pending-ads.php"><i class="fa fa-desktop" aria-hidden="true"></i> My Pending Ads</a></li>
          <li class="active"><a href="active-ads.php"><i class="fa fa-laptop" aria-hidden="true"></i> My Active Ads</a></li>
          
         
          
          <li><a href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
        </ul>
        
      </div>
      <div class="col-md-9 col-sm-8">
        <div class="myads">
          <h3>My Pending Ads</h3>
          <ul class="searchList">
            <!-- ad start -->
          <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/ad1.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Vastu Consultant in Navi Mumbai</a></h3>
                      <div class="cateName"> <a href="#.">Community</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#.">Rental</a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>Vastu Doctor is one of the best Vastu consultancy services in Navi Mumbai. Dr. Mahesh Surve, Owner of the Vastu Doctor has more than 15 years of experience in Vastu Shastra and Vastu Consultancy. We have various branches spread across Maharashtra. We offer services in Navi Mumbai, Mumbai, Thane, Nashik, Pune, etc., ....</p>
                      <div class="listbtn"><a href="detail.php">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.50000 Upwards</div>
                      <a href="ad-post1.php" class="editad"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit this ad</a> <span class="pendingad">Active</span> </div>
                      <div class="col-md-4 col-sm-5 text-right"> <br>
                      <a href="deletead1.php" class="deletead"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete this ad</a>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </li>
            <!-- ad end --> 
            
           
            
            
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>



<?php include('footer.php') ?>