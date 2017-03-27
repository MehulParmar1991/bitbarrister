<!DOCTYPE html>
<html lang="en">
   <head>
       <?php echo $common; ?>
   </head>
   <body>
       <?php echo $header; ?>
      <!-- Fixed navbar -->
      
      <!-- <section>
         <div class="banner">
            <div class="banner-text">
               <h1>30% DAILY, <i>FOR 5 DAYS</i></h1>
               <h1>INSTANT WITHDRAW</h1>
               <button class="btn btn-info" type="button">Join Us</button>
            </div>
         </div>
      </section> -->
      <section>
         <div id="myCarousel" class="carousel slide">
            <!-- <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1" class=""></li>
               <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol> -->
            <div class="carousel-inner">
               <div class="item active">
                  <img class="img-responsive" src="<?php echo base_url();?>include_files/img/slider1.jpg" alt="">
                  <div class="carousel-caption banner-text">
                     <h1>3% DAILY, <i>FOR 100 DAYS</i></h1>
                     <h3>- Principle Included -</h3>
                     <br class="hidden-xs"/>
                     <button class="btn btn-info" type="button">Join Us Now</button>
                  </div>
               </div>
               <div class="item">
                  <img class="img-responsive" src="<?php echo base_url();?>include_files/img/slider2.jpg" alt="">
                  <div class="carousel-caption banner-text">
                     <h1>1% DAILY, <i>Forever</i></h1>
                     <h3>- Principle Back after 45 days -</h3>
                     <br class="hidden-xs" />
                     <button class="btn btn-info" type="button">Join Us Now</button>
                  </div>
               </div>
               <div class="item">
                  <img class="img-responsive" src="<?php echo base_url();?>include_files/img/slider3.jpg" alt="">
                  <div class="carousel-caption banner-text">
                     <h1>5% DAILY, <i>FOR 50 DAYS</i></h1>
                     <h3>- Principle Included -</h3>
                     <br class="hidden-xs"/>
                     <button class="btn btn-info" type="button">Join Us Now</button>
                  </div>
               </div>
            </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
         </div>
      </section>
      <section id="counter">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="single-fact-counter clearfix">
                     <div class="icon-box">
                        <i><img src="<?php echo base_url();?>include_files/img/i1.png" height="70"></i>
                     </div>
                     <div class="text-box">
                        <span class="number">
                        <span  class="count" data-from="0" data-to="45" data-speed="2000">45</span> 
                        </span>
                        <p>Running days</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="single-fact-counter clearfix">
                     <div class="icon-box">                 
                        <i><img src="<?php echo base_url();?>include_files/img/i2.png" height="70"></i>
                     </div>
                     <div class="text-box">
                        <span class="number">
                        <span  class="count" data-from="0" data-to="13917" data-speed="2000">13917</span> 
                        </span>
                        <p>Total accounts</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="single-fact-counter clearfix">
                     <div class="icon-box">
                        <i><img src="<?php echo base_url();?>include_files/img/i3.png" height="70"></i>                   
                     </div>
                     <div class="text-box">
                        <span class="number" >$<span class="count" data-from="0" data-to="11001542.42" data-speed="2000" >11001542</span> 
                        </span>
                        <p>Total deposited</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="single-fact-counter clearfix bdrn">
                     <div class="icon-box">
                        <i><img src="<?php echo base_url();?>include_files/img/i4.png" height="70"></i>                
                     </div>
                     <div class="text-box">
                        <span class="number" >$<span  class="count" data-from="0" data-to="4669795.07" data-speed="2000">4669795</span> 
                        </span>
                        <p>Total withdraw</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="package">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <h1 class="left-title">Our Effective<br/>Packages</h1>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="">
                     <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <img src="<?php echo base_url();?>include_files/img/profit-chart.png" alt="" class="img-responsive">
                           <h3>Earn 5% more</h3>
                           <ul class="list-inline pkg-list">
                              <li>Credit instantly to your account balance</li>
                              <li>Secure dashboard to manage your referrals</li>
                              <li>Available even for inactive members</li>
                              <li><a href="investmentpackage.html" class="btn-link">Checkout our affiliate package >></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="">
                     <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                           <img src="<?php echo base_url();?>include_files/img/briefcase.png" alt="" class="img-responsive">
                           <h3>30% daily profit</h3>
                           <ul class="list-inline pkg-list">
                              <li>Profit for 7 days a week, 365 days a year</li>
                              <li>No minimum, no maximum, no fees</li>
                              <li>No documentation, enjoy from all over the world</li>
                              <li><a href="investmentpackage.html" class="btn-link">Checkout our affiliate package >></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="calculator">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="text-center">
                     <h3><i class="fa fa-calculator"></i> Calculator profit</h3>
                     <p>Stable Power LTD offers diversified system of investment plans. Greater the amount of deposit, higher the percentage of profits!</p>
                  </div>
                  <br/>
                  <form class="form-inline text-center">
                     <div class="form-group ">
                        <label for="">Enter amount:</label>
                        <input type="text" class="form-control" id="">
                     </div>
                     <div class="form-group ">
                        <label for="pwd">Choose plan:</label>
                        <select class="form-control">
                           <option>Plan 1 - 140% After 1 Day</option>
                           <option>Plan 2 - 140% After 1 Day</option>
                           <option>Plan 3 - 140% After 1 Day</option>
                           <option>Plan 4 - 140% After 1 Day</option>
                           <option>Plan 5 - 140% After 1 Day</option>
                        </select>
                     </div>
                     <div class="form-group ">
                        <label for="">Total percent:</label>
                        <input type="text" class="form-control" id="">
                     </div>
                     <div class="form-group ">
                        <label for="">Total return:</label>
                        <input type="text" class="form-control" id="">
                     </div>
                     <button type="submit" class="btn btn-info btn-cal">Calculate</button>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <section class="step">
         <div class="container text-center">
            <div class="row">
               <div class="col-md-3 col-sm-3 col-xs-12">
                  <img src="<?php echo base_url();?>include_files/img/step1.png" alt=""/>
                  <h3>Step 1</h3>
                  <p>
                     You need to open an account with BitNetCoin, which is free. To open the account, click on Register, fill in the details and submit. 
                  </p>
                  <div class="arrow1"><img src="<?php echo base_url();?>include_files/img/arrow1.png" alt=""></div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-12">
                  <img src="<?php echo base_url();?>include_files/img/step2.png" alt=""/>
                  <h3>Step 2</h3>
                  <p>
                     Verify your details in your email and finally log into your account with your credentials.
                  </p>
                  <div class="arrow1"><img src="img/arrow2.png" alt=""></div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-12">
                  <img src="<?php echo base_url();?>include_files/img/step3.png" alt=""/>
                  <h3>Step 3</h3>
                  <p>
                     Click on "Deposit" button and then proceed to decide how much you are willing to deposit. Each member has an unique Bitcoin address.
                  </p>
                  <div class="arrow1"><img src="img/arrow1.png" alt=""></div>
               </div>
               <div class="col-md-3 col-sm-3 col-xs-12">
                  <img src="<?php echo base_url();?>include_files/img/step4.png" alt=""/>
                  <h3>Step 4</h3>
                  <p>
                     BitNetCoin will credit your account automatically, you will view the summary of your accounts activities On your account dashboard.
                  </p>
               </div>
            </div>
         </div>
      </section>
      <section class="with-bg parallax">
         <div class="overlay text-center">
            <h2 class="m-title">Our Certificate</h2>
            <br/><br/>
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12 ds-text-right">
                     <img src="<?php echo base_url();?>include_files/img/logo.png" alt="" />
                     <br/>
                     <br/>
                     <h2>Company Number 10256542</h2>
                     <br/>
                     <h3>12 Grosvenor Square, Southampton,</h3>
                     <h3>SO15 2BG, UNITED KINGDOM </h3>
                     <h3>UK Phone: +44 238 1680095</h3>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 ds-text-left">
                     <a href="<?php echo base_url();?>include_files/pdf/CERTIFICATE.pdf" target="_blank">
                     <img src="<?php echo base_url();?>include_files/img/pdf.jpg" width="300px">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="feature">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12 left-box">
                  <div class="row feature1">
                     <div class="col-md-3 col-md-push-9 col-xs-12 col-sm-2 col-sm-push-10 icon-left text-center">
                        <img src="<?php echo base_url();?>include_files/img/feature1.png" alt=""/>
                     </div>
                     <div class="col-md-9 col-md-pull-3 col-xs-12 col-sm-10 col-sm-pull-2 content-left">
                        <h4>
                           Cloudflare Ddos Protection
                        </h4>
                        <p>
                           Vivamus nec turpis aliquet, gravida elit ut, feugiat est. Suspendisse iaculis id mauris a elementum dui ac neque.
                        </p>
                     </div>
                  </div>
                  <div class="row feature2">
                     <div class="col-md-3 col-md-push-9 col-xs-12 col-sm-2 col-sm-push-10 icon-left text-center">
                        <img src="<?php echo base_url();?>include_files/img/feature2.png" alt=""/>
                     </div>
                     <div class="col-md-9 col-md-pull-3 col-xs-12 col-sm-10 col-sm-pull-2 content-left">
                        <h4>
                           SSL Security
                        </h4>
                        <p>
                           Etiam dapibus lorem dolor, eu pretium est imperdiet et. Sed non arcu egestas, hendrerit enim vel, consectetur eros.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-xs-12 col-sm-12 text-center">
                  <img src="<?php echo base_url();?>include_files/img/feature.png" class="img-responsive img-center" alt=""/>
               </div>
               <div class="col-md-4 col-xs-12 col-sm-12 right-box">
                  <div class="row feature3">
                     <div class="col-md-3 col-xs-12 col-sm-2 icon-left">
                        <img src="<?php echo base_url();?>include_files/img/feature3.png" alt=""/>
                     </div>
                     <div class="col-md-9 col-xs-12 col-sm-10 content-left">
                        <h4>
                           Instant Deposit & Withdrawal
                        </h4>
                        <p>
                           Our team of experts and secure platform ensures that services provided to you when you invest with us are timely.
                        </p>
                     </div>
                  </div>
                  <div class="row feature4">
                     <div class="col-md-3 col-xs-12 col-sm-2 icon-left">
                        <img src="<?php echo base_url();?>include_files/img/feature4.png" alt=""/>
                     </div>
                     <div class="col-md-9 col-xs-12 col-sm-10 content-left">
                        <h4>
                           Fixed & Secure Profit
                        </h4>
                        <p>
                           As an investor, once you deposit funds, all you need to do is set the amount you wish and let our team of experts and secure platform handle the rest.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="support grey">
         <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 border-right">
               <div class="media">
                  <div class="media-left media-middle">
                     <a href="#">
                     <img class="media-object" src="<?php echo base_url();?>include_files/img/24-hours.png" alt="...">
                     </a>
                  </div>
                  <div class="media-body">
                     <h4 class="media-heading"><b>24/7 Dedicated Support Team</b></h4>
                     <p>
                        Bitcoin Safe Network Pte. Ltd is an established firm in the crypto currency market that is run by an honest and diligent team of experts. Rather than risk being scammed by private sellers or fly by night operators, invest with Bitcoin Safe Network Pte. Ltd to secure your future.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div class="media">
                  <div class="media-left media-middle">
                     <a href="#">
                     <img class="media-object" src="<?php echo base_url();?>include_files/img/lock.png" alt="...">
                     </a>
                  </div>
                  <div class="media-body">
                     <h4 class="media-heading"><b>Terms And Conditions</b></h4>
                     <p>
                        These are important and legally binding terms and conditions that apply to your use of the services offered through this Site. Please read this Agreement carefully, it is legally binding on you.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php echo $footer; ?>

      <!-- The scroll to top feature -->
      <div class="scroll-top-wrapper ">
        <span class="scroll-top-inner">
          <i class="fa fa-2x fa-arrow-circle-up"></i>
        </span>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="<?php echo base_url();?>include_files/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>include_files/js/bitbarrister.js"></script>
   </body>
</html>