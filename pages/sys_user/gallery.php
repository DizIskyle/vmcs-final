<h1> </h1>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

 <div class="container">
         <div class="row">
            <div class="col-lg-12 text-center my-2">
               <h2>Gallery</h2>
            </div>
         </div>
         <div class="portfolio-menu mt-2 mb-4">
            <ul>
               <li class="btn btn-outline-dark active" data-filter="*">All</li>
               <li class="btn btn-outline-dark" data-filter=".gts">Product</li>
               <li class="btn btn-outline-dark" data-filter=".lap">services</li>
               <li class="btn btn-outline-dark text" data-filter=".selfie">pictures</li>
            </ul>
         </div>
         <div class="portfolio-item row">
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/joyful-pretty-girl-with-curly-hair-takes-selfie-mobile-phone_8353-6635.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/joyful-pretty-girl-with-curly-hair-takes-selfie-mobile-phone_8353-6635.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/attractive-young-woman-with-curly-hair-takes-selfie-posing-looking-camera_8353-6636.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/multiracial-group-young-people-taking-selfie_1139-1032.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/female-friends-sitting-car-hood-taking-self-portrait_23-2147855623.jpg" alt="">
               </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
               <a href="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" class="fancylight popup-btn" data-fancybox-group="light">
               <img class="img-fluid" src="https://image.freepik.com/free-photo/two-smiling-girls-take-selfie-their-phones-posing-with-lollipops_8353-5600.jpg" alt="">
               </a>
            </div>
         </div>
      </div>
      

<style>

body{
	margin:0;
	padding:70px 70px;
}
.container{
	margin:10px auto;
    color: white;
}
.portfolio-menu{
	text-align:center;
}
.portfolio-menu ul li{
	display:inline-block;
	margin:10px;
	list-style:none;
	padding:10px 15px;
	cursor:pointer;
    color: white;
	-webkit-transition:all 05s ease;
	-moz-transition:all 05s ease;
	-ms-transition:all 05s ease;
	-o-transition:all 05s ease;
	transition:all .5s ease;
}

.portfolio-item{
	width:100%;
}


.portfolio-item .item{
	width:300px;
	float:left;
	margin-bottom:20px;
}
</style>

<script>
     $('.portfolio-item').isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows'
        });
        $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');
         	
         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });
</script>