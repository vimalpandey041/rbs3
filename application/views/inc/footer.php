<footer>
      <div class="container-fluid gradient11" >
        <div class="row">
          <div class="col-12 col-md-12 p-md-0 col-lg-4 " >
           <div class="text-center mt-3">
            <img src=" <?php echo base_url('uploads/img/'). $get_manage_footer['footer_image']?> " class="img-fluid" width="110px" alt="">
           </div>
           <div class="row mt-3">
            <h3 class="h5 text-white text-center ">
            <?php echo $get_manage_footer['name']?>
            </h3 >
            
           </div>
           <div class="row mt-3 text-white flex ">
             <div class="col-2 ">
               <i class="fa-solid fa-phone px-3"></i>
              </div>
              <div class="col-10">
                <a href="tel: +9101281260000" class="nav-link"><?php echo $get_manage_footer['number']?></a>
              </div>
            </div>
            <div class="row mt-3 text-white flex ">
             <div class="col-2 justify-content-end ">
               <i class="fa-solid fa-phone px-3"></i>
             </div>
             <div class="col-10">
               <a href="mailto:officerbssiet@gmail.com" class="nav-link"><?php echo $get_manage_footer['email']?></a>
             </div>
            </div>
            <div class="row my-4 text-white flex text-center ">
              <div class="col" >
              <a href="<?php echo $get_manage_footer['facebook']?> "><i class="fa-brands text-white fa-facebook px-2"></i></a>
        <a href="<?php echo $get_manage_footer['twitter']?> "><i class="fa-brands text-white fa-twitter px-2"></i></a>
        <a href="<?php echo $get_manage_footer['instagram']?> "><i class="fa-brands text-white fa-instagram px-2"></i></a>
        <a href="<?php echo $get_manage_footer['linkedin']?> "><i class="fa-brands text-white fa-linkedin px-2"></i></a>
              </div>
            </div>
          </div>
          <div class="col-12 p-md-0 col-md-6 col-lg-4 mt-3 px-md-5" >
            <h4 class=" h2 text-white mt-3"><?php echo $get_manage_footer['block_1_heading']?></h4>
            <ul class="mt-3 p-0">
              <?php foreach($display_footer_block_1 as $data)  { ?>
              <li class="py-2  " style="list-style:none ;"><a href="<?php echo $data['footer_block_1_url'] ?>" class="text-decoration-none h6 text-white">
                <?php echo $data['footer_block_1_name']?></a></li>
              <?php } ?>
              
            </ul>
          </div>
          <div class="col-12 col-md-6 p-md-0 col-lg-4 mt-3 px-md-5" >
            <h4 class=" h2 text-white mt-3"><?php echo $get_manage_footer['block_2_heading']?></h4>
            <ul class="mt-3 p-0">
            <?php foreach($display_footer_block_2 as $data)  { ?>
              <li class="py-2  " style="list-style:none ;"><a href="<?php echo $data['footer_block_2_url'] ?>" class="text-decoration-none h6 text-white">
                <?php echo $data['footer_block_2_name']?></a></li>
              <?php } ?>
            
            </ul>
          </div>
          <div class="col-12 cl-md-6 col-lg-3 d-none" >
            <h4 class="text-center h2 text-white mt-3">Fees Submit</h4>
            <div class="row my-4 mx-5">
              <div class="col rounded-4 bg-warning flex justify-content-center align-items-center " style="height: 100px;">
                <h4 class="text-dark text-center my-2">College Fees</h4>
              <div class="text-center my-2">
                <button type="button" class="btn btn-dark">Submit Now</button>
              </div>
              </div>
            </div>
            <div class="row my-2 mx-5">
              <div class="col rounded-4 bg-primary flex justify-content-center align-items-center " style="height: 100px;">
                <h4 class="text-white text-center my-2">Hostel Fees</h4>
              <div class="text-center my-2">
                <button type="button" class="btn btn-warning">Submit Now</button>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
		</footer>
    <footer class="text-center bg-dark text-light fw-bold">
      <div class="text-center py-2 footer-height" style="background-color: rgb(84 25 48 / 90%);">
        Copyright   © 2022
        <a class="text-reset  text-decoration-none" style="" href="http://rbssietrewari.ac.in/">Rbssietrewari.ac.in</a>
        <span>||</span>
        <span>Designed By</span>
        <a class="text-white text-decoration-none" href="https://pandeywebsolution.in">Vimal Pandey</a>
        <span>& Muskan Panwar</span>
      </div>
    </footer> 
<script src="owlcarousel/jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src=" <?php echo base_url('assets/js/script.js')?> "></script>  
<script src=" <?php echo base_url('assets/js/script1.js')?> "></script>  

<script>
  $('.owl-carousel').owlCarousel({

   margin:10,
   loop:true,
   autoWidth:true,
   items:4,
   autoplay:true,
   lazyLoad: true,
   autoplayTimeout:3000,
   autoplayHoverPause:true
})
</script>

<script>
  window.addEventListener("scroll", function(){
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
})
</script>
<script>
  jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.03
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				  jQuery(this).stop();
				},
				function(){
				  var offset = jQuery(this).offset();
				  var residualSpace = offset.top + stripHeight;
				  var residualTime = residualSpace/settings.travelocity;
				  scrollnews(residualSpace, residualTime);
				});			
		});	
};

$(function(){
    $("ul#ticker01").liScroll();
});
</script>
<script>
  jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 50
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				  jQuery(this).stop();
				},
				function(){
				  var offset = jQuery(this).offset();
				  var residualSpace = offset.top + stripHeight;
				  var residualTime = residualSpace/settings.travelocity;
				  scrollnews(residualSpace, residualTime);
				});			
		});	
};


$(function(){
    $("ul#ticker01").liScroll();
});
</script>
<script>
  const $ = document;
let img_btn = $.querySelectorAll(".img1");
let items = $.querySelectorAll(".item");

img_btn.forEach((item) => {
  item.addEventListener("click", (e) => {
    item.classList.toggle("act_img");
    e.target.parentElement.parentElement.classList.toggle("active1");
  });
});
</script>
<script>
  
</script>
<SCript>
  const buttons = document.querySelectorAll("[data-slide-direction]");

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    const offset = button.dataset.slideDirection === "next" ? 1 : -1;
    changeSlide(offset);
  });
});

const changeSlide = (offset) => {
  const slides = document.querySelector(".slides");
  const activeSlide = slides.querySelector("[data-active-slide]");
  let newIndex = [...slides.children].indexOf(activeSlide) + offset;
  newIndex =
    newIndex < 0
      ? slides.children.length - 1
      : newIndex === slides.children.length
      ? 0
      : newIndex;
  slides.children[newIndex].dataset.activeSlide = true;
  delete activeSlide.dataset.activeSlide;

  const circles = document.querySelector(".slides-circles");
  const activeCircle = circles.querySelector("[data-active-slide]");
  circles.children[newIndex].dataset.activeSlide = true;
  delete activeCircle.dataset.activeSlide;
};

setInterval(changeSlide.bind(null, 1), 6000);

</SCript>
<script src="./lightbox-plus-jquery.js"></script>
</body>
</html>