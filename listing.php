<?php include('header.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Housing</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <a href="#.">Search</a> / <span>Search Result</span></div>
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
                <div class="adimg"><img src="images/ads/a.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="detail2.php">2000 sq ft home for rent in Potta</a></h3>
                      <div class="cateName"> <a href="#.">Housing</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#.">Rental</a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>potta</span></div>
                      <div class="clearfix"></div>
                      <p>Welcome Home! Lake Clearwater luxury Holdings offers quiet convenience located on 82nd Street in the heart of Keystone at the Crossing. ....</p>
                      <div class="listbtn"><a href="detail2.php">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.9000.00</div>
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
                <div class="adimg"><img src="images/ads/i.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="detail1.php">Lake Clearwater Apartments</a></h3>
                      <div class="cateName"> <a href="#.">Housing</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#.">apartments</a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>Feel right at home at 10 West Apartments; a beautiful community in Indianapolis, Indiana....</p>
                      <div class="listbtn"><a href="detail1.php">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs 450.000.00</div>
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
                <div class="adimg"><img src="images/ads/07.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">500m2 - CALL OWNER FOR FULLY FURNISHED 1BHK / STUDIO FLATS FOR RENT</a></h3>
                      <div class="cateName"> <a href="#.">Housing</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#.">flats</a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>kolkata</span></div>
                      <div class="clearfix"></div>
                      <p>Furnished 1 room kitchen available for Rs.11,000 p.m. with 3 months rent as refundable deposit.Furnished 1 ....</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice"></div>
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
                <div class="adimg"><img src="images/ads/08.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">500m2 - No Brokerage !! 1bhk / studio flats for rent </a></h3>
                      <div class="cateName"> <a href="#.">Hosing</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#.">Flats</a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Delhi</span></div>
                      <div class="clearfix"></div>
                      <p>Furnished 1 Bedroom--Hall-Kitchen and 1 room kitchen apartments available...</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs 15000.00</div>
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
                <div class="adimg"><img src="images/ads/06.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">2 and 3BHK apartments for Sale in Bachupally Hyderabad</a></h3>
                      <div class="cateName"> <a href="#.">Housing</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#.">apartments</a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>A LUXURY GATED COMMUNITY AT BACHUPALLY FROM SOUTH INDIAS LARGEST REAL ESTATE COMPANY...</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.2899/Sq.ft</div>
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
                <div class="adimg"><img src="images/ads/05.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">3BHK Flats for Sale in Kukatpally Hyderabad</a></h3>
                      <div class="cateName"> <a href="#.">Housing</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#.">Rental</a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>Ready to move spacious 1620 sft 3 BHK flats for sale in Kukatpally, Gajularamaram. Fully functional clubhouse. Nearer to major IT hubs and schools. OC Received, ....</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.92* Lakhs</div>
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
                <div class="adimg"><img src="images/ads/06.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">2 and 3BHK apartments for Sale in Bachupally Hyderabad</a></h3>
                      <div class="cateName"> <a href="#.">Housing</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#.">apartments</a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>A LUXURY GATED COMMUNITY AT BACHUPALLY FROM SOUTH INDIAS LARGEST REAL ESTATE COMPANY...</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.2899/Sq.ft</div>
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
                <div class="adimg"><img src="images/ads/07.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">500m2 - CALL OWNER FOR FULLY FURNISHED 1BHK / STUDIO FLATS FOR RENT</a></h3>
                      <div class="cateName"> <a href="#.">Housing</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> <a href="#.">flats</a> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>kolkata</span></div>
                      <div class="clearfix"></div>
                      <p>Furnished 1 room kitchen available for Rs.11,000 p.m. with 3 months rent as refundable deposit.Furnished 1 ....</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice"></div>
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