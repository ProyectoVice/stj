
<!DOCTYPE>

<style type="text/css">
	/** Author: ArrayForm
Author URL: http://arrayform.com **/
h4, h5, h6,
h1, h2, h3 {margin-top: 0;}
ul, ol {margin: 0;}
p {margin: 0;}
html, body{
	font-family: 'Open Sans', sans-serif;
	background:#F6F6F6;
	background-image:url('plantilla/images/gallery/slider-campus.jpg');
	background-attachment: fixed;
    background-position: center;
    background-size: cover;
	margin:0;
	padding:0%;
}
body a{
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	-ms-transition:0.5s all;
}
.view {
   overflow: hidden;
   position: static;
   text-align: center;
   cursor: default;

}
.view .mask,.view .content {
  position: absolute;
   overflow: hidden;
   top: 0;
   left: 0;
   height:auto;
}
.view img {
   display: block;
   position: relative;
}
.view h2 {
   text-transform: uppercase;
   color: #000;
   text-align: center;
   position: relative;
   font-size: 17px;
   padding: 10px;
   background: rgba(0, 0, 0, 0.8);
   margin: 20px 0 0 0;
   
}
.view .main {
   font-style: italic;
   font-size: 12px;
   position: relative;
   color: #fff;
   padding: 10px 20px 20px;
   text-align: center;
}
.info {
  	display: inline-block;
	text-decoration: none;
	color: #fff;
	font-size:3em;
	/*padding:10%;*/
}
.view-tenth img {
   -webkit-transform: scaleY(1);
   -moz-transform: scaleY(1);
   -o-transform: scaleY(1);
   -ms-transform: scaleY(1);
   transform: scaleY(1);
   -webkit-transition: all 0.7s ease-in-out;
   -moz-transition: all 0.7s ease-in-out;
   -o-transition: all 0.7s ease-in-out;
   -ms-transition: all 0.7s ease-in-out;
   transition: all 0.7s ease-in-out;
}
.view-tenth .mask {
/*   background-color:#dcbc86;*/
   -webkit-transition: all 0.5s linear;
   -moz-transition: all 0.5s linear;
   -o-transition: all 0.5s linear;
   -ms-transition: all 0.5s linear;
   transition: all 0.5s linear;
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
   filter: alpha(opacity=0);
   opacity: 0;
}
.view-tenth h2 {
   border-bottom: 1px solid #E9C78C;
   background: transparent;
   margin:40px 40px 0px 40px;
   -webkit-transform: scale(0);
   -moz-transform: scale(0);
   -o-transform: scale(0);
   -ms-transform: scale(0);
   transform: scale(0);
   color: #000000;
   -webkit-transition: all 0.5s linear;
   -moz-transition: all 0.5s linear;
   -o-transition: all 0.5s linear;
   -ms-transition: all 0.5s linear;
   transition: all 0.5s linear;
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
   filter: alpha(opacity=0);
   opacity: 0;
}
.view-tenth .main {
   color: #fff;
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
   filter: alpha(opacity=0);
   opacity: 0;
   -webkit-transform: scale(0);
   -moz-transform: scale(0);
   -o-transform: scale(0);
   -ms-transform: scale(0);
   transform: scale(0);
   -webkit-transition: all 0.5s linear;
   -moz-transition: all 0.5s linear;
   -o-transition: all 0.5s linear;
   -ms-transition: all 0.5s linear;
   transition: all 0.5s linear;
}
.view-tenth.info {
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
   filter: alpha(opacity=0);
   opacity: 0;
   -webkit-transform: scale(0);
   -moz-transform: scale(0);
   -o-transform: scale(0);
   -ms-transform: scale(0);
   transform: scale(0);
   -webkit-transition: all 0.5s linear;
   -moz-transition: all 0.5s linear;
   -o-transition: all 0.5s linear;
   -ms-transition: all 0.5s linear;
   transition: all 0.5s linear;

}
.view-tenth:hover img {
   -webkit-transform: scale(10);
   -moz-transform: scale(10);
   -o-transform: scale(10);
   -ms-transform: scale(10);
   transform: scale(10);
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
   filter: alpha(opacity=0);
   opacity: 0;
}
.view-tenth:hover span{
	opacity:0;
	}
.view-tenth:hover .mask {
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
   filter: alpha(opacity=100);
   opacity: 1;

}
.view-tenth:hover h2,.view-tenth:hover .main,.view-tenth:hover.info {
   -webkit-transform: scale(1);
   -moz-transform: scale(1);
   -o-transform: scale(1);
   -ms-transform: scale(1);
   transform: scale(1);
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
   filter: alpha(opacity=100);
   opacity: 1;
   
}
.label-product {
	position: relative;
}
.product_container {
	margin-top: 1em;
}
.product_container .main{
	font-size:1.8em;
	font-weight:700;
	text-transform:uppercase;
	margin: 1.5em 0 0.6em;
	font-family: 'Open Sans Condensed', sans-serif;
}
.product_container .main a{
	color:#000;
}
.product_container .main a:hover{
	color:#F94B4B;
	text-decoration:none;
	
}
.product_container p{
	color: #999;
	font-size: 1.1em;
}
.label-product > span {
	font-size: 15px;
	text-transform: uppercase;
	display: inline-block;
	position: absolute;
	left:0px;
	top:-80px;
	color: #fff;
	padding:10px;
	background:blue;
}
.grid_icon:hover{
   background:#00B895;
}
.reservation{
	background: #FFF;
	padding:5em 0;
}
#main-reservation-text .main{
	font-size: 1.8em;
	font-weight:700;
	text-transform: uppercase;
	display: inline-block;
	color: #555;
	font-family: 'Open Sans Condensed', sans-serif;
}
#main-reservation-undertext p {
	font-weight: 300;
	color: #fff;
	margin-top: 12px;
	display: inline-block;
	font-size: 0.7em;
	text-transform: none;
}
#reservation-button {
	color: #fff;
	border: 2px solid #fff;
	padding: 10px 26px;
	margin-top: 0px;
	font-size: 20px;
	display:inline-block;
	float:right;
	font-weight:800;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
	cursor: pointer;
	background-color:#00B895;
}
/* Effect 7: second border slides up */
/***********************************************************/
.btns{
background-color:#000;
color:#FFF;
text-transform:none;
font-size:18px;
padding:2%;
cursor:pointer;
opacity:0.8;
width:auto;
border:#FFF solid 2px;
border-radius:0.3em;
-webkit-border-radius:0.3em;
-moz-border-radius:0.3em;
-o-border-radius:0.3em;
-ms-border-radius:0.3em;
}
.btns:hover{
	background-color:#CCCCCC;
	color:#000;
}

.inner-content {
    margin-top: 3em;
}

.main-inner {
    background: #fff;
    padding: 3em;
	    border-top-left-radius: 0.3em;
    -o-border-top-left-radius: 0.3em;
    -moz-border-top-left-radius: 0.3em;
    -webkit-border-top-right-radius: 0.3em;
    border-top-right-radius: 0.3em;
    -o-border-top-right-radius: 0.3em;
    -moz-border-top-right-radius: 0.3em;
}
h3.tittle {
    text-align: center;
    margin-bottom: 1em;
    text-transform: uppercase;
    color: #34495E;
    font-size: 1.6em;
}
/*--main--*/
.new {
    text-align: center;
    margin-top: 1em;
}
.new h3 a {
    font-size:0.8em;
    font-weight: 600;
    color: #626E79;
    text-decoration: none;
    display: block;
    font-family: 'Lato', sans-serif;
}
.main{
    border-top-left-radius: 0.3em;
    -o-border-top-left-radius: 0.3em;
    -moz-border-top-left-radius: 0.3em;
    -webkit-border-top-right-radius: 0.3em;
    border-top-right-radius: 0.3em;
    -o-border-top-right-radius: 0.3em;
    -moz-border-top-right-radius: 0.3em;
}
.main input[type="text"],.main input[type="password"]{
   width: 100%;
    padding: 1em 4em 1em 1em;
    color: #858282;
    font-size: 16px;
    outline: none;
    background: #fff;
    font-weight: 500;
    border: 2px solid #bec3c7;
    font-family: 'Open Sans', sans-serif;
    border-radius: 0.3em;
    -o-border-radius: 0.3em;
    -moz-border-radius: 0.3em;
    margin: 0.7em 0;
    background: url("../images/mail.png") no-repeat 296px 18px #fff;
		transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
}
.main input[type="password"]{
      background: url("../images/lock.png") no-repeat 296px 18px #fff;
  }
  .main input[type="text"]:hover,.main input[type="password"]:hover{
   border: 2px solid #9E241A;
  }
.submit {
    text-align: center;
    margin-top: 1em;
}
.main input[type="submit"]{
    font-size: 17px;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
    outline: none;
    padding: 15px 15px;
    width: 48%;
    border: none;
    background:blue;
    border-radius: 0.3em;
    -o-border-radius: 0.3em;
    -webkit-border-radius: 0.3em;
    -moz-border-radius: 0.3em;
    text-transform: uppercase;
}
.main input[type="submit"]:hover,.second-one input[type="submit"]:hover{
  background:#9E241A;
  		transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;

}
/*----footer-----*/
.footer {
  text-align: center;
   margin:10px 10px 5px 10px;
   padding-top:25%;
   color:#fff;
   position:relative;
}
.footer p {
	color: #fff;
	font-size: 16px;
	font-weight:600;
}
.footer  a {
	  color: #fff;
}
.footer a:hover {
	color:#1cbdda;
}
/*----//footer-----*/
@media screen and (max-width:1024px){
	.label-product{
		margin-left:34%;
	}	
}
@media screen and (max-width:991px){
	.label-product{
		margin-left:28%;
	}
}
@media screen and (max-width:768px){
	.footrt{
		padding-top:30%;
	}
}
@media screen and (max-width:640px){
	.label-product{
		margin-left:18%;
	}
	.footer{
		padding-top:35%;
	}
}
@media screen and (max-width:460px){
	.label-product{
		margin-left:14%;
	}
}
@media screen and (max-width:360px){
	.label-product{
		margin-left:0%;
	}
		.footer{
		padding-top:38%;
	}
}
</style>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="plantilla/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
 <div class="main" style="padding:2%;margin-top:2%;">        	
 <div class="col-lg-12">
         <div class="container">          	 
               <div class="col-lg-4"></div>
				 <div class="col-lg-4">
				 <div class="row grids text-center">
					<div class="view view-tenth">
					    <!--  <a href="single.html">-->
					<div class="inner_content clearfix">
						<div class="product_image" >
							<img src="plantilla/images/gallery/unheval-logo.png" class="img-responsive" alt="UNHEVAL" style="margin:0% auto;" >
	               </div>
						<div class="label-product" style="margin-top: 20px;" >
							<span class="new">Iniciar Sesión </span> 
						</div>
						<div class="mask" style="width:100% !important; margin-top: -2em">
							<h2><b>Bienvenido</b></h2>
	                  <div class="main">
								<form>
								<input type="text" class="text" value="Usuario" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Usuario';}" >
								<input type="password" value="Contraseña" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contraseña';}">
								<div class="submit"><input type="submit" onclick="myFunction()" value="Iniciar Sesión" ></div>
								<div class="clearfix"></div>
								</form>
							</div>
						</div>
							
			        </div>
					</div>
			        </div>
				    <!--  </a> -->
				</div>
		</div>
		<div class="col-lg-4"></div>
        </div>
        
  </div>
</body>
</html>
