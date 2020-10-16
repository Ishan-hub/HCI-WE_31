<?php include('header.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">CCTV</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="index.php">Home</a> / <a href="#.">Search</a> / <span>Search Result</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->

<div class="listpgWraper">
  <div class="container"> 
    
    <!-- Page Title start -->
    <div class="pageSearch">
      <div class="row">
        <div class="col-md-3"><a href="login1.php" class="btn"><i class="fa fa-file-text" aria-hidden="true"></i> Post a Free Ad</a></div>
        <div class="col-md-9">
          <div class="searchform">
            <div class="row">
              <div class="col-md-5 col-sm-4">
                <input type="text" class="form-control" placeholder="Search" />
              </div>
              <div class="col-md-3 col-sm-3">
                <select class="form-control">
                  <option>Categories</option>
                </select>
              </div>
              <div class="col-md-3 col-sm-3">
                <select class="form-control">
                  <option>Location</option>
                </select>
              </div>
              <div class="col-md-1 col-sm-2">
                <button class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Title end --> 
	<br>
	<center><h2>Searching Result For "CCTV"</h2></center>
    <br>
    <!-- Search Result and sidebar start -->
    <div class="row">
      <div class="col-md-3 col-sm-5"> 
        <!-- Side Bar start -->
        <div class="sidebar"> 
          <!-- Ads By City -->
          <div class="widget">
            <h4 class="widget-title">Ads By City</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="newyork" />
                <label for="newyork"></label>
                Mumbhai <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="losangles" />
                <label for="losangles"></label>
                Kolkata <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="chicago" />
                <label for="chicago"></label>
                kerala <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="houston" />
                <label for="houston"></label>
                Rajasthan <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="sandiego" />
                <label for="sandiego"></label>
                Delhi <span>555</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="sanjose" />
                <label for="sanjose"></label>
                Hyderabad <span>44</span> </li>
            </ul>
            <a href="#.">View More</a> </div>
          <!-- Ads By City end--> 
          
          <!-- Price -->
          <div class="widget">
            <h4 class="widget-title">Price Range</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="price1" />
                <label for="price1"></label>
                0 to $100 <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price2" />
                <label for="price2"></label>
                $100 to $199 <span>41</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price3" />
                <label for="price3"></label>
                $199 to $499 <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price4" />
                <label for="price4"></label>
                $499 to $999 <span>66</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price5" />
                <label for="price5"></label>
                $999 to $4999 <span>159</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price6" />
                <label for="price6"></label>
                Above $4999 <span>865</span> </li>
            </ul>
            <div class="row">
              <div class="col-md-6">
                <select class="form-control">
                  <option>From</option>
                </select>
              </div>
              <div class="col-md-6">
                <select class="form-control">
                  <option>To</option>
                </select>
              </div>
            </div>
          </div>
          <!-- Price end --> 
          
          <!-- Year -->
          <div class="widget">
            <h4 class="widget-title">Time Range</h4>
            <div class="row">
              <div class="col-md-6">
                <select class="form-control">
                  <option>From</option>
                </select>
              </div>
              <div class="col-md-6">
                <select class="form-control">
                  <option>To</option>
                </select>
              </div>
            </div>
          </div>
          <!-- Year end --> 
          
          <!-- type -->
          <div class="widget">
            <h4 class="widget-title">Type</h4>
            <select class="form-control">
              <option>New</option>
              <option>Used </option>
            </select>
          </div>
          <!-- type end --> 
          
       
          
        
          
         
          
         
          
          <!-- button -->
          <div class="searchnt">
            <button class="btn"><i class="fa fa-search" aria-hidden="true"></i> Update Results</button>
          </div>
          <!-- button end--> 
        </div>
        <!-- Side Bar end --> 
      </div>
      <div class="col-md-9 col-sm-7">
        <div class="sortbybar">
          <div class="row">
            <div class="col-sm-4"> <a href="listing.php" data-toggle="tooltip" data-placement="top" title="" class="listby" data-original-title="Result by List View"><i class="fa fa-th-list" aria-hidden="true"></i></a> <a href="grid.html" data-toggle="tooltip" data-placement="top" title="" class="listby" data-original-title="Result by Gallery View"><i class="fa fa-th-large" aria-hidden="true"></i></a> </div>
            <div class="col-sm-4">
              <div class="input-group"> <span class="input-group-addon" id="basic-addon3">Sort By</span>
                <select class="form-control">
                  <option>Most recent</option>
                  <option>Price: Rs Low to High</option>
                  <option>Price: Rs High to Low</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="found"> 235 results for Mathematic Tutors <strong> Profile showing 1 to 10 out of 711 </strong> </div>
            </div>
          </div>
        </div>
        
        <!-- Search List -->
        <ul class="searchList">
          <!-- ad start -->
          <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/search/s1.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="for_sale_details.php">Dahua 2 Mp Full Time Colour Cctv Camera</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>👉🏿2MP HDCVI IR Bullet Camera.
						<br>👉🏿24 Hour colour Vision.
						<br>👉🏿Max. 30fps@1080P
						<br>👉🏿HD and SD output switchable
						<br>👉🏿3.6mm fixed lens (6mm optional)
						<br>👉🏿Max. IR length 20m.
						<br>👉🏿IP67, DC12V
						<br>👉🏿2 Years Warranty</p>
                      <div class="listbtn"><a href="for_sale_details.php">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.20000.00</div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- ad end --> 
          
          <!-- ad start -->
          <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/search/s2.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">8ch CCTV camera full package 5mp DVR</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Kochi</span></div>
                      <div class="clearfix"></div>
                      <p>8Ch CCTV camera kit 2.4(sony-Taiwan)
						<br>Since2008(Taiwan technology)
						<br>Special offer 50% off
						<br>BNC connectors 8
						<br>Usb cable free/
						<br>Hdmi cable free</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.30000.00</div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- ad end --> 
          
          <!-- ad start -->
          <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/search/s3.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">CCTV camera</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Kochi</span></div>
                      <div class="clearfix"></div>
                      <p>HIKVISION DVR
						<br>HIK VISION 2MP 1080P Camera 4
						<br>HARDDISK  500GB
						<br>With wire 
						<br>Plug top
						<br>3c 2c wire
						<br>TT wire
						<br>Power packs 4</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.5000.00</div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- ad end --> 
          
          <!-- ad start -->
          <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/search/s4.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">SONY CCTV 5MP Outdoor 4 Camera Full Set</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Delhi</span></div>
                      <div class="clearfix"></div>
                      <p>● 5MP (1960p) 3.6mm Outdoor Camera x 4
						<br>● Original SONY Chipset
						<br>● 6pcs Powerful Array IR (Night Vision 40m)
						<br>● 6 in1 AHD (Hybrid) Windows 1960P 4 Channel DVR
						<br>● 2.5A Outdoor Box type Big Power Supply x 4
						<br>● Full Copper BNC Connectors x 8</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs 32000.00</div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- ad end --> 
          
          <!-- ad start -->
          <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/search/s5.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">CCTV 2.4Mp Sony 4 Camera with Hard, Cable, Jack, Ch Dvr Full Set</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>SINCE 2008
						<br>Zoomtech CCTV
						<br>High Quality Camera Stands x 4
						<br>500GB Seagate/WD Hard Disk
						<br>(MADE IN TAIWAN)</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.27000.00</div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- ad end -->
          
       
          
      <!-- ad start -->
          <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/search/s6.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Hikvision High Quality 25M 2MP 4CH CCTV System</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>1no 4 Channel Turbo HD DVR Model-DS-7104HGHI-F1
					<br>4Nos 1,080P Turbo HD Cameras Model- DS-2CE16D0T-ITPF
					<br>1No 500GB Hard Disk Drive 
					<br>4Nos Dc-Power Connectors
					<br>8Nos BNC Video connectors </p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.35000.00</div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- ad end -->
          
         <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/search/s7.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">4 CH CCTV Camera Systems (2MP/1080P) </a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Bangalore</span></div>
                      <div class="clearfix"></div>
                      <p>Full HD 1080P 2MP 3.6MM Camera 
						 <br>Full HD 1080P 4CH Hybrid DVR 
						<br>Power Adapters 2.5A
					  <br>1No 12V-5Amp Power Supply
					<br>100 meters 3C2V Video Cable</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">₨24,000.00</div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <!-- ad end --> 
          
   
        </ul>
        
        <!-- Pagination Start -->
        <div class="pagiWrap">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="showreslt">Showing 1-8</div>
            </div>
            <div class="col-md-8 col-sm-8 text-right">
              <ul class="pagination">
                <li class="active"><a href="#.">1</a></li>
                <li><a href="#.">2</a></li>
                <li><a href="#.">3</a></li>
                <li><a href="#.">4</a></li>
                <li><a href="#.">5</a></li>
                <li><a href="#.">6</a></li>
                <li><a href="#.">7</a></li>
                <li><a href="#.">8</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Pagination end --> 
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>