<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Demo styles -->
  <style>
    %transition_all_03s {
  transition:all .3s ease;
}
h1{
	font-size:50px;

}
p{
	color: red;
	font-size: 30px;
}
%backface_visibility_hidden{
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
}

*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body{
  background-color:#888;
}
.swiper-container {
  width: 100%;
  height: 500px;
  transition:opacity .6s ease, transform .3s ease;
  &:hover{
    .swiper-button-prev,
    .swiper-button-next{
      transform:translateX(0);
      opacity:1;
      visibility:visible;
    }
  }
  &.loading{
    opacity:0;
  }
  &.scale-out{
    transform:scale(.7);
  }
  &.scale-in{
    transform:scale(1);
  }
}
.swiper-wrapper{

}
.swiper-slide{
  background-position:center;
  background-size:cover;
  perspective:1600px;
  &.swiper-slide-active{
    z-index:2;
  }
  .entity-img{
    display:none;
  }
  .content{
    position:absolute;
    top:40%;
    left:0;
    width:50%;
    padding-left:5%;
    color:#fff;
    transform:translateZ(100px) translateX(100px);
    .title{
      font-size:2.5em;
      font-weight:bold;
      margin-bottom:30px;
    }
    .caption{
      display:block;
      font-size:12px;
      line-height:1.4;
    }
  }
}
[class^="swiper-slide-shadow-"]{
  @extend %backface_visibility_hidden;
}
[class^="swiper-button-"]{
  width:44px;
  opacity:0;
  visibility:hidden;
  @extend %transition_all_03s;
}
.swiper-button-prev{
  transform:translateX(50px);
}
.swiper-button-next{
  transform:translateX(-50px);
}
.swiper-container-horizontal{
  >.swiper-pagination-bullets{
    .swiper-pagination-bullet{
      margin:0 9px;
      position:relative;
      width:12px;
      height:12px;
      background-color:#fff;
      opacity:.4;
      @extend %transition_all_03s;
      &::before{
        content:'';
        position:absolute;
        top:50%;
        left:50%;
        width:18px;
        height:18px;
        transform:translate(-50%, -50%);
        border:0px solid #fff;
        border-radius:50%;
        @extend %transition_all_03s;
      }
      &:hover,
      &.swiper-pagination-bullet-active{
        opacity:1;
      }
      &.swiper-pagination-bullet-active{
        &::before{
          border-width:1px;
        }
      }
    }
  }
}
.title{
  color: red;
  font-size:50px;
  font-weight: bold;
}
.caption{
  font-size: 30px;
  text-align: center;
  max-width: 30%;
  font-weight: bold;
  margin-left: 10px;
  color: red;
  list-style: none;
  
}
#signup{
  font-size: 50px;
  font-weight: 900;
  font: outline;
}
ul{
    font-weight:bold;
}
  </style>
</head>

<body>
  <!-- Swiper -->
  <section class="swiper-container loading">
	<div class="swiper-wrapper">
	  <div class="swiper-slide" data-test-set="test" style="background-image:url(physics.jpeg)">
		<!-- <img src="physics10.jpg" class="entity-img" /> -->
		<div class="content">
		  <p class="title text-center"></p>
		  <span class="caption text-center ml-5"> </span>
		</div>
	  </div>
	  <div class="swiper-slide" style="background-image:url(physics5.jpg)">
		<!-- <img src="https://i.pinimg.com/originals/8c/5c/84/8c5c841f328b057007834b4a48877699.jpg" class="entity-img" /> -->
		<div class="content">
		  <p class="title text-center">Different sections</p>
		  <span class="caption">
        <ul>
          <li>1.Home page</li>
          <li>2.Welcome page</li>
          <li>3.Question page</li>
          <li>4.Comments page</li>
          <li>5.Answers page</li>
        </ul>
      </span>
		</div>
	  </div>
	  <div class="swiper-slide" style="background-image:url(physics9.jpg)">
		<!-- <img src="physics9.jpg" class="entity-img" /> -->
		<div class="content">
		  <p class="title text-center"><h1></h1>></p>
		  <span class="caption text-center"　></span>
		</div>
	  </div>
	  <div class="swiper-slide" style="background-image:url(physics10.jpg)">
		<!-- <img src="" class="entity-img" /> -->
		<div class="content">
		  <p class="title text-center"></p>
		  <span class="caption text-center" style="margin-left: 20px;"></span>
		</div>
	  </div>
	  <div class="swiper-slide" style="background-image:url(physics8.jpg)">
		<!-- <img src="https://images.wallpapersden.com/image/download/stephen-hawking-scientist-physics_52402_1360x768.jpg" class="entity-img" /> -->
		<div class="content">
		  <p class="title text-center"></p>
		  <span class="caption text-center"></span>
		</div>
	  </div>
	</div>
	
	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>
	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev swiper-button-white"></div>
	<div class="swiper-button-next swiper-button-white"></div>
  </section>
  
  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
   // Params
var sliderSelector = '.swiper-container',
    isMove = false,
    options = {
      init: false,
      loop: true,
      speed:800,
      autoplay:{
        delay:3000
      },
      effect: 'cube', // 'cube', 'fade', 'coverflow',
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 40,
        shadowScale: 0.94,
      },
      grabCursor: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
      },
      // Events
      on: {
        init: function(){
          this.autoplay.stop();
        },
        imagesReady: function(){
          this.el.classList.remove('loading');
          this.autoplay.start();
        },
        touchMove: function(event){
          if (!isMove) {
            this.el.classList.remove('scale-in');
            this.el.classList.add('scale-out');
            isMove = true;
          }
        },
        touchEnd: function(event){
          this.el.classList.remove('scale-out');
          this.el.classList.add('scale-in');
          setTimeout(function(){
            isMove = false;
          }, 300);
        },
        slideChangeTransitionStart: function(){
          console.log('slideChangeTransitionStart '+this.activeIndex);
          if (!isMove) {
            this.el.classList.remove('scale-in');
            this.el.classList.add('scale-out');
          }
        },
        slideChangeTransitionEnd: function(){
          console.log('slideChangeTransitionEnd '+this.activeIndex);
          if (!isMove) {
            this.el.classList.remove('scale-out');
            this.el.classList.add('scale-in');
          }
        },
        transitionStart: function(){
          console.log('transitionStart '+this.activeIndex);
        },
        transitionEnd: function(){
          console.log('transitionEnd '+this.activeIndex);
        },
        slideChange:function(){
          console.log('slideChange '+this.activeIndex);
          console.log(this);
        }
      }
    },
    mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();
  </script>
  <h1 class="text-center mt-5" style="font-weight: 900;">Quench your thirst for knowledge with Sanjay Sir.</h1>
  <h1 class="text-right">(Asstt. Professor , Physics)</h1>
<hr>
<p id="signup" class="text-center ml-3" style="text-shadow: 5px,5px,5px,yellow">Signup to continue your journey. </p>
</body>

</html>