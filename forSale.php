<?php include('header.php') ?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">For Sale</h1>
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
            <div class="col-sm-4"> <a href="forSale.php" data-toggle="tooltip" data-placement="top" title="" class="listby" data-original-title="Result by List View"><i class="fa fa-th-list" aria-hidden="true"></i></a> <a href="grid.html" data-toggle="tooltip" data-placement="top" title="" class="listby" data-original-title="Result by Gallery View"><i class="fa fa-th-large" aria-hidden="true"></i></a> </div>
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
                <div class="adimg"><img src="images/for_sale/1.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="for_sale_details.php">Chalakudy New Dish Connection</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>New dish Connection, All brands available, Fast activation, 10 metrs of cable included, Free Installation call or message us.
<br>it's ok to contact this poster with services or other commercial interests, ....</p>
                      <div class="listbtn"><a href="for_sale_details.php">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.2500.00</div>
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
                <div class="adimg"><img src="images/for_sale/2.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Billing software development in Kochi Kerala | Bcotics (Kochi)</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Kochi</span></div>
                      <div class="clearfix"></div>
                      <p>Bcotics are the best Billing software development in Kochi Kerala. With Bcotics in your side you will be having a company which provides the best billing software in Kochi.
						
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.1800.00</div>
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
                <div class="adimg"><img src="images/for_sale/3.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Online Shopping With Marcado (kochi)</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Kochi</span></div>
                      <div class="clearfix"></div>
                      <p>Customers don't have to wait in line with cash counters to pay for the items they ordered. They can shop from home or the workplace, and they don't have to travel for a time.
					<br>it's ok to contact this poster with services or other commercial interests</p>
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
                <div class="adimg"><img src="images/for_sale/4.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Top 10 Stud Welding Machine Manufacturers</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Delhi</span></div>
                      <div class="clearfix"></div>
                      <p>Stud Welding Machine is developed by D.H Enterprises which is working since in the year 2012 with an exclusive services. Stud welding is a process by which a metal stud is joined to a metal work piece by electric heating and this is manufactured by high-class quality raw materials and highly advance technology & machinery....</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs 1500.00</div>
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
                <div class="adimg"><img src="images/for_sale/5.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Lets Build Dreams Together (Kochi)</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>Flats and Apartments for sale in kochi with premium standards. All our projects in Kochi are located at the prime locations in the city. Find ongoing, ready to occupy and completed flats and apartments.
					<br>* do NOT contact me with unsolicited services or offers</p>
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
                <div class="adimg"><img src="images/for_sale/6.jpg" alt="ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Scotch Forest Cake - (Puducherry)</a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Hyderabad</span></div>
                      <div class="clearfix"></div>
                      <p>It's true that everything scotch is a delight to our senses. Taste our creative amalgamation of white and dark sponge dressed in a perfect mixture of black forest and butterscotch flavors that culminates in CakeBee's Scotch Forest.</p>
                      <div class="listbtn"><a href="#.">View Details</a></div>
                    </div>
                    <div class="col-md-4 col-sm-5 text-right">
                      <div class="adprice">Rs.500.00</div>
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
                <div class="adimg"><img src="images/for_sale/7.jpg" alt="Ad Name" /></div>
              </div>
              <div class="col-md-10 col-sm-8">
                <div class="jobinfo">
                  <div class="row">
                    <div class="col-md-8 col-sm-7">
                      <h3><a href="#.">Buy CHimneys Online | Supreme Products </a></h3>
                      <div class="cateName"> <a href="#.">For Sale</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i>  </div>
                      <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Bangalore</span></div>
                      <div class="clearfix"></div>
                      <p>Kitchen Chimneys rolls out the smoke or air inside your kitchen and protects from smelling bad. Upgrade now and order Supreme Products Kitchen Chimneys....</p>
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