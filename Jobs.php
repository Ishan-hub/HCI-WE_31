<?php include('header.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Jobs</h1>
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
                0 to Rs.1000 <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price2" />
                <label for="price2"></label>
                Rs.1000 to Rs.10000 <span>41</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price3" />
                <label for="price3"></label>
                Rs.10000 to Rs.100000 <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="price4" />
                <label for="price4"></label>
                Rs.100000 to Rs.1000000 <span>66</span> </li>
             
              <li>
                <input type="checkbox" name="checkname" id="price6" />
                <label for="price6"></label>
                Above Rs.1000000 <span>865</span> </li>
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
            <h4 class="widget-title">Year Range</h4>
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
          
          
          
          <!-- Jobs By Experience -->
          <div class="widget">
            <h4 class="widget-title">Jobs By Experience</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="permanent" />
                <label for="permanent"></label>
                Full Time/Permanent <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="contract" />
                <label for="contract"></label>
                Contract <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="parttime" />
                <label for="parttime"></label>
                Part Time <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="internship" />
                <label for="internship"></label>
                Internship <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="freelance" />
                <label for="freelance"></label>
                Freelance <span>33</span> </li>
            </ul>
            <a href="#.">View More</a> </div>
          <!-- Jobs By Experience end --> 
          
          <!-- Jobs By Industry -->
          <div class="widget">
            <h4 class="widget-title">Jobs By Industry</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="infotech" />
                <label for="infotech"></label>
                Information Technology <span>22</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="advertise" />
                <label for="advertise"></label>
                Advertising/PR <span>45</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="services" />
                <label for="services"></label>
                Services <span>44</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="health" />
                <label for="health"></label>
                Health & Fitness <span>88</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="mediacomm" />
                <label for="mediacomm"></label>
                Media/Communications <span>22</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="fashion" />
                <label for="fashion"></label>
                Fashion <span>11</span> </li>
            </ul>
            <a href="#.">View More</a> </div>
          <!-- Jobs By Industry end --> 
          
          <!-- Top Companies -->
          <div class="widget">
            <h4 class="widget-title">Top Companies</h4>
            <ul class="optionlist">
              <li>
                <input type="checkbox" name="checkname" id="Envato" />
                <label for="Envato"></label>
                Envato <span>12</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Themefores" />
                <label for="Themefores"></label>
                Themefores <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="GraphicRiver" />
                <label for="GraphicRiver"></label>
                Graphic River <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Codecanyon" />
                <label for="Codecanyon"></label>
                Codecanyon <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="AudioJungle" />
                <label for="AudioJungle"></label>
                Audio Jungle <span>33</span> </li>
              <li>
                <input type="checkbox" name="checkname" id="Videohive" />
                <label for="Videohive"></label>
                Videohive <span>33</span> </li>
            </ul>
            <a href="#.">View More</a> </div>
          <!-- Top Companies end --> 
          
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
                <div class="adimg"><img src="images/ads/01.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="jobsdetail.php">URGENT NURSES REQUIRED FOR INDIA</a></h3>
                      <div class="cateName"> <a href="#.">Jobs</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Panjab</span></div>
                      <div class="clearfix"></div>
                      <p>Required Nurses for Isolation Patients in Libya Specialized in Cases During Quarantine Phase</p>
                      <div class="listbtn"><a href="jobsdetail.php">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.2,5000.00</div>
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
                <div class="adimg"><img src="images/ads/08.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">BTC platform is looking for an experienced IB</a></h3>
                      <div class="cateName"> <a href="#.">Jobs</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>New Dhilhi</span></div>
                      <div class="clearfix"></div>
                      <p>To become a C & C Digital Currency Trading Platform Broker, all you have to do is invite your users to register and trade on the platform and you will receive 40% of the commission.</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.10000.00</div>
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
                <div class="adimg"><img src="images/ads/03.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">C++ core developer </a></h3>
                      <div class="cateName"> <a href="#.">jobs</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Bangalore</span></div>
                      <div class="clearfix"></div>
                      <p>We are looking for passionate and result-oriented C++ developer having experience/knowledge.</p>
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
                <div class="adimg"><img src="images/ads/04.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Digital Marketing and Social Media Marketing</a></h3>
                      <div class="cateName"> <a href="#.">Jobs</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>kerala</span></div>
                      <div class="clearfix"></div>
                      <p>Ability to think creatively, identify problems and offer solutions with minimal guidance</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.25000.00</div>
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
                <div class="adimg"><img src="images/ads/005.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Web designer / developer</a></h3>
                      <div class="cateName"> <a href="#.">Jobs</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>I am looking for a website designer to design website with less than 10 pages and have a very little budget for this website</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.15000.00</div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
		  
		  
		  
          <!-- ad end --> <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/ads/006.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Android developer</a></h3>
                      <div class="cateName"> <a href="#.">Jobs</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>bangalore</span></div>
                      <div class="clearfix"></div>
                      <p>I am looking for Freelance Android developer have sound knowledge</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.45000.00</div>
                      <div class="adverify"><i class="fa fa-check-square-o" aria-hidden="true"></i> Verified Seller</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
		  
		  
          <!-- ad end --> <li>
            <div class="row">
              <div class="col-md-2 col-sm-4">
                <div class="adimg"><img src="images/ads/007.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">virtual assistant</a></h3>
                      <div class="cateName"> <a href="#.">Jobs</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>kolkata</span></div>
                      <div class="clearfix"></div>
                      <p>Small office needs virtual assistant to answer phones, handle email, incoming and outgoing calls. English must be well spoken on the phone.</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
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