<?php include('header.php') ?>
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Contact Us</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <span>Contact Us</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End --> 

<!-- Contact us -->
<div class="inner-page">
  <div class="container">
    <div class="contact-wrap">
      <div class="title"> <span>We Are Here For Your Help</span>
        <h2>GET IN TOUCH FAST</h2>
        
      </div>
      <div class="row"> 
        <!-- Contact Info -->
        
        <div class="contact-now">
          <div class="col-md-4 column">
            <div class="contact"> <span><i class="fa fa-home"></i></span>
              <div class="information"> <strong>Address:</strong>
                <p>13 Moohan Road Suite, India</p>
              </div>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="col-md-4 column">
            <div class="contact"> <span><i class="fa fa-envelope"></i></span>
              <div class="information"> <strong>Email Address:</strong>
                <p>support@craigslist.com</p>
                
              </div>
            </div>
          </div>
          <!-- Contact Info -->
          <div class="col-md-4 column">
            <div class="contact"> <span><i class="fa fa-phone"></i></span>
              <div class="information"> <strong>Phone No:</strong>
                <p>(+91)-927468219 </p>
                <p>(+91)-657468456</p>
              </div>
            </div>
          </div>
          <!-- Contact Info --> 
        </div>
        <div class="col-md-4 column"> 
          <!-- Google Map -->
          <div class="googlemap">
            
          </div>
        </div>
        
        <!-- Contact form -->
        <div class="col-md-8 column">
          <div class="contact-form">
            <div id="message"></div>
            <form method="post" action="contactsubmit.php" name="contactform" id="contactform" >
              <div class="row">
                <div class="col-md-6">
                  <input name="name" type="text" id="name" placeholder="Full Name" required>
                </div>
                <div class="col-md-6">
                  <input type="number" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="col-md-12">
                  <input name="email" type="text" id="email" placeholder="Email" required>
                </div>
                <div class="col-md-12">
                  <textarea rows="4" name="comments" id="comments" placeholder="Details" required></textarea>
                </div>
                <div class="col-md-12">
                  <button title="" class="button" type="submit" id="submit">Submit Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php') ?>