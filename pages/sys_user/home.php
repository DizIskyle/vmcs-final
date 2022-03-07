<br>
<section id="home" class="home">
  
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>WELCOME TO OUR CLINIC</h1>        
            <h3>this is special kind of veterinary hospital</h3>
        </hgroup>
        <a class="btn btn-success btn-lg" role="button" href="login.php">Request an Appointment</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <h1>Pets are treated like a family</h1>
            <h3>belief in treating your pet like our own</h3>      
        </hgroup>       
        <a class="btn btn-success btn-lg" role="button" href="login.php">Request an Appointment</a>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <h1>UPGRADING OUR CLINIC</h1>       
            <h3>to serve better for all of you</h3>
        </hgroup>
        <a class="btn btn-success btn-lg" role="button" href="login.php">Request an Appointment</a>
      </div>
    </div>
  </div> 
</div>

<style>
.fade-carousel {
    position: relative;
    height: 100vh;
    margin: 0;
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 2px;
    background-color: white;
    border-color: white;
    opacity: .3;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 45%;
    z-index: 3;
    color: #fff;
    text-align: left;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);

}
.hero h1 {
    font-size: 3em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
    color: white;
    
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}



/********************************/
/*          Custom Buttons      */
/********************************/
.btn-success .btn-lg {padding: 10px 40px;}
.btn-lg,
.btn.btn-success:hover,
.btn.btn-success:focus {
    color: #f5f5f5;
    background: #a00000;
    border-color: #a00000;
    outline: none;
    margin: 20px auto;
    
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(src/img/fixtures/login_background/1637244747076.jpeg); filter: blur(3px); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(src/img/fixtures/login_background/1637243852407.JPEG); filter: blur(4px);
}
.fade-carousel .slides .slide-3 {
  background-image: url(src/img/fixtures/login_background/1111.JPEG);
  filter: blur(4px);
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 1000px){
    .hero { width: 1000px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 2em; }   
    }
section{
	padding: 60px 0;
}
</style>

<!--section id="what-we-do">
		<div class="container-fluid">
			<h2 class="section-title mb-2 h1">What we do</h2>
			<p class="text-center text-muted h5"><b>Keeping your pet healthy is important to us</b></p>
			<div class="row mt-5">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block">
							<h3 class="card-title">GROOMING</h3>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a  title="Read more" class="read-more" href="index.php?page=services">Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block">
							<h3 class="card-title">DEWORMING</h3>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a title="Read more" class="read-more" href="index.php?page=services">Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
					<div class="card">
						<div class="card-block">
							<h3 class="card-title">TREATMENT</h3>
							<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
							<a title="Read more" class="read-more" href="index.php?page=services">Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>	
	</section>


<style>

section .section-title{
	text-align:center;
	color:black;
	margin-bottom:20px;
	text-transform:uppercase;
}
#what-we-do{
background:linear-gradient(rgba(255,255,255,0.6)100%, rgba(255,255,255,0.9)100%);
  height: 38rem;
}
#what-we-do .card{
  margin-top: 10px;
	padding: 1rem!important;
  background-color: white;
	border-color: black;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#what-we-do .card:hover{
  background-color: #337ab7;
	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#what-we-do .card .card-block{
	  padding-left: 50px;
    position: relative;
}
#what-we-do .card .card-block a{
	color:#a00000 !important;
	font-weight:700;
	text-decoration:none;
}
#what-we-do .card .card-block a i{
	display:none;
 
	
}
#what-we-do .card:hover .card-block a i{
	display:inline-block;
	font-weight:700;
}
</style-->

<section id="about" class="about">
<br> 
<div class= "container mission">
<h1 class="text-center"><b>MISSION</b></h1>
<p> This website aims  to ensure partnerships among the veterinary clinic and its valuable clients for the welfare and safety o the pets. It will serve 
    as a platform for the convienient access of the veterinary services for the  customer's pets in this time of pandemic.
</p>

<h1 class="text-center"><b>VISION</b></h1>
<p> We envision an exceptional and compassionate animal care that would strengthen the bond among our clients and their pets. </p>

</div>

<style>

.mission{
 background-color: transparent;
 border: 4px  solid white;
 width: 100%;
 }

.mission p{
    text-align:center;
    color: white;
    font: arial;
    font-style: italic;
    margin-top: 10px;
    margin-bottom: 60px;
    font-size: 25px;
}
</style>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<br><br>
    <h1 class="text-center"><b>OUR TEAM</b></h1>

	
	<div class="container">
	<div class="row">
	
	<!--team-1-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="src/img/fixtures/login_background/20211124_181435_0000.PNG" class="img-fluid" />
	<h3>Dr. Christoper Nhelan A. Llamas</h3>
	<p>Veterinarian</p>
	</div>
	
	<div class="team-back">
	<span>
			-Resident Veterinarian<br>
			-Graduated 2021<br>
			-Licensed Veterinarian since September 2021<br>
			-Co-owner and Resident Veterinarian of Petlantis Veterinary Clinic at Ligao City, Albay<br>
	</span>
	</div>
	
	</div>
	</div>
	<!--team-1-->
	
	<!--team-2-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="src/img/fixtures/login_background/1639200349183.PNG" class="img-fluid" />
	<h3>Dr. Ma. Michelle T. Balila</h3>
	<p>Veterinarian</p>
	</div>
	
	<div class="team-back">
	<span>
			-Resident Veterinarian<br>
			-Graduated 2021<br>
			-Licensed Veterinarian since September 2021<br>
	</span>
	</div>
	
	</div>
	</div>
	<!--team-2-->
	
	<!--team-3-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="src/img/fixtures/login_background/1639200349169.PNG" class="img-fluid" />
	<h3>Dr. Gabriela Mae M. Cedo</h3>
	<p>Veterinarian/Owner</p>
	</div>
	
	<div class="team-back">
	<span>
	
			-Owner/Resident Veterinarian<br>
			-Graduated 2019<br>
			-Licensed Veterinarian since September 2019<br>
			-Senior Veterinarian at Albay Pet Care and Grooming Center Co. and Mayon Veterinary Care Specialist<br>
	</span>
	</div>
	
	</div>
	</div>
	<!--team-3-->
	
    </div>
	</div>

<style>
body
{
	background:#00bcd4;
}

h1
{
	color:#fff;
	margin:40px 0 60px 0;
	font-weight:300;
}

.our-team-main
{
	width:100%;
	height:auto;
	border-bottom:5px #323233 solid;
	background:#fff;
	text-align:center;
	border-radius:10px;
	overflow:hidden;
	position:relative;
	transition:0.5s;
	margin-bottom:28px;
}


.our-team-main img
{
	border-radius:80%;
	margin-bottom:20px;
	width: 150px;
}

.our-team-main h3
{
	font-size:20px;
	font-weight:700;
}

.our-team-main p
{
	margin-bottom:0;
}

.team-back
{
	width:100%;
	height:auto;
	position:absolute;
	top:0;
	left: 10px;
	padding:5px 15px 0 15px;
	text-align:left;
	background:#fff;
	font-size: 20px;
	
}

.team-front
{
	width:100%;
	height:auto;
	position:relative;
	z-index:10;
	background:#fff;
	padding:15px;
	bottom:0px;
	transition: all 0.5s ease;
}

.our-team-main:hover .team-front
{
	bottom:-200px;
	transition: all 0.5s ease;
}

.our-team-main:hover
{
	border-color:#777;
	transition:0.5s;
}


</style>

<style>
  .jumbotron{
 margin: 13px; 
 background:linear-gradient(rgba(255,255,255,0.6)100%, rgba(255,255,255,0.9)100%), url('src/img/fixtures/login_background/1637725896660.JPEG')no-repeat; 
 background-size: cover; 
 font-family: tahoma;
 background-attachment: static;
}

 .jumbotron h1{
  color: black;
  font-size: 2.3em;
  
}
 .jumbotron p{
   color: black;
   font-size: 1.5em;
   font-style: italic;
}

  </style>

<section id="services" class="services">
	
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<br><br><br>

	<div class= "container mission">
<p> At Ragay Pet Wellness Center we want yout pet to live a healthy, happy life!<br>
	Our focus is on Preventative Wellness; after all, prevention is the very best medicine!<br>
	We know that sometimes in order to stay well, first you have to get well, that's why we are also able to
	treat your pet if they are feeling a bit under the weather. </p>
</div><br><br><br>
	<div class="container">
	<div class="row">
	<h1 class="text-center"><b>OUR SERVICES</b></h1>
	<!--team-1-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="src/img/fixtures/login_background/1639234890514.JPG" class="img-fluid" />
	<h3>Grooming Services</h3>
	</div>
	
	<div class="team-back">
	<span>
	Complete grooming<br>
	-bath<br>
	-haircut<br>
	-nail trim<br>
	-ear cleaning<br>
	</span>
	</div>
	
	</div>
	</div>
	<!--team-1-->
	
	<!--team-2-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="src/img/fixtures/login_background/1639236610653.PNG" class="img-fluid" />
	<h3>Deworming</h3>
	</div>
	
	<div class="team-back">
	<span>
		Deworming is depends on your pet weight
	</span>
	</div>
	
	</div>
	</div>
	<!--team-2-->
	
	<!--team-3-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="src/img/fixtures/login_background/1639234890527.JPEG" class="img-fluid" />
	<h3>Vaccinations</h3>
	</div>
	
	<div class="team-back">
	<span>
	Tailored to meet your pets specific needs based on their environment and social life. Not every pet has the same vaccination needs. 
	</span>
	</div>
	
	</div>
	</div>
	<!--team-3-->
	
	<!--team-4-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="src/img/fixtures/login_background/1639237075925.PNG" class="img-fluid" />
	<h3>Theraphy Laser</h3>
	</div>
	
	<div class="team-back">
	<span>
		Our Theraphy laser can provide pain relief and wound care for your pet.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-4-->
	
	<!--team-5-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="src/img/fixtures/login_background/1639234890502.JPG" class="img-fluid" />
	<h3>Advanced Diagnostic</h3>
	</div>
	
	<div class="team-back">
	<span>
		If your pet needs ongoing care such as  periodic bloodwork or blood pressure monitoring, will work with you to create a schedule that suit you and your pet.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-5-->
	
	<!--team-6-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
	<img src="src/img/fixtures/login_background/1639236610629.PNG" class="img-fluid" />
	<h3>Dental Cleaning</h3>
	</div>
	
	<div class="team-back">
	<span>
	Tooth decay in your pet can cause numerous problems, including rotten teeth infection and heart disease. Regular dental
	visits are recommended to control damage to the teeth and gums  and prevent halitosis.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-6-->
	
	
	
	</div>
	</div>

<style>

h1
{
	color:#fff;
	margin:40px 0 60px 0;
	font-weight:300;
}

.our-team-main
{
	width:100%;
	height:auto;
	border-bottom:5px #323233 solid;
	background:#fff;
	text-align:center;
	border-radius:10px;
	overflow:hidden;
	position:relative;
	transition:0.5s;
	margin-bottom:28px;
}


.our-team-main img
{
	border-radius:50%;
	margin-bottom:20px;
	width: 100px;
}

.our-team-main h3
{
	font-size:20px;
	font-weight:700;
}

.our-team-main p
{
	margin-bottom:0;
}

.team-back
{
	width:100%;
	height:auto;
	position:absolute;
	top:0;
	left:0;
	padding:5px 15px 0 15px;
	text-align:left;
	background:#fff;
	font-size: 18px;
	
}

.team-front
{
	width:100%;
	height:auto;
	position:relative;
	z-index:10;
	background:#fff;
	padding:15px;
	bottom:0px;
	transition: all 0.5s ease;
}

.our-team-main:hover .team-front
{
	bottom:-200px;
	transition: all 0.5s ease;
}

.our-team-main:hover
{
	border-color:#777;
	transition:0.5s;
}

</style>
