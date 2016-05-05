@extends('client.layouts.index')
<style>
.cthree a{
	    color: #666666 !important;
}
</style>

@section('menuitem')
 <li data-menuanchor="top" class="menuList pull-left" ><a href="#top">小食</a></li>
 <li data-menuanchor="firstPage" class="menuList"><a href="#firstPage">原料</a></li>
<li data-menuanchor="secondPage"class="menuList"><a href="#secondPage">外观</a></li>	
<li data-menuanchor="thirdPage"class="menuList"><a href="#thirdPage">包装</a></li>	
<li data-menuanchor="footer" class="menuList"><a href="#footer">尾部</a></li>			
@stop



     @section('content')

	 	  <section id="featuresz" class="featurette section" style="background-color: #fff;">
	   <div  class="section-fixedwrapper">
			<div class="center-wrap">
			<div class="desc thin-desc">
				<h1>台湾好零食</h1>
				 <figure class="wrap-img-top">
	              <img src="img/snacks-fallback_large-top.png">
	             </figure>
			</div>

		</div>
	   </div>
      </section>
	 
   <section id="features0" class="featurette section" style="background-color: #fff;">
	   <div class="section-wrapper">
	   <figure class="wrap-img-04 wrapper wrapper-1">
	     <img src="img/snacks-fallback_large-0.png">
	   </figure>
	   </div>

	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12 wtitle wtitle0">
		<h2>原料</h2>
		</div>
		 <div class="col-lg-10 ">
		 <div class="wh wh0">
          <h4><small>原料精选 </small></h4>
		  </div>
          <p class="wp wp0" style="margin-top:1em;">精选优质小麦粉，采用传统工艺制作，品质过硬，美味更健康。精选优质奶油，严格把关，无反式脂肪酸，安全放心。
		  <br>
          </p>
        </div>
		</div>
	   </div>
   </section>
	
   <section id="features1" class="featurette section" style="background-color: #eee;">
	     
       <div  class="section-wrapper">
	   <figure class="wrap-img-11 wrapper wrapper-3">
	     <img src="img/snacks-fallback_large-10.png">
	   </figure>
	  
	    <figure class="wrap-img-12 wrapper wrapper-31">
	     <img src="img/snacks-fallback_large-11.png">
	   </figure>
	   
	    <figure class="wrap-img-13 wrapper wrapper-32">
	     <img src="img/snacks-fallback_large-12.png">
	   </figure>
	   
	   </div >
	   
	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12 wh wh1">
		<h2>外观</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh1">
          <h4> <small>枫叶派</small></h4>
		  </div>
          <p class="wp wp1">内层层次分明，层层奶香；外层有糖层，独特酥脆。精致外观如同甜蜜的爱恋。
          </p>
		  <div class="wh wh1">
          <h4> <small>蝴蝶酥</small></h4>
		  </div>
          <p class="wp wp1">内层层次分明，层层奶香；外层有糖层，独特酥脆。精致外观如同甜蜜的爱恋。
          </p>
		  <div class="wh wh1">
          <h4> <small>葡萄派</small></h4>
		  </div>
          <p class="wp wp1">酥脆可口的蝴蝶派（枫叶，葡萄），造型小巧可爱，层层酥脆，让你的牙齿间奏出乐章。
          </p>
        </div>
		</div>
	   </div >
      </section> <!-- END FEATURES -->

	  <section id="features4" class="featurette section" style="background-color: #fff;">
	    
       <div  class="section-wrapper">
	   <figure class="wrap-img-41 wrapper wrapper-1">
	     <img src="img/snacks-fallback_large-20.png">
	   </figure>
	   <!--
	    <figure class="wrap-img-32 wrapper">
	     <img src="img/watch_01_fallback_large.png">
	   </figure>
	   -->
	   </div >
	   
	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12 ">
		<h2 class="wh wh4">包装</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh4">
         <h4> <small>包装精美，方便携带</small></h4>
		  </div>
          <p class="wp wp4"> 惬意午后新选择，送礼自用两相宜。
          </p>
        </div>
		</div>
	   </div >
      </section> 
	
	  @stop
	  
	  
	    
	  <script>
	   $(function(){
        var $this=$(this);
        var $gNav = $('#global-nav');
        var $mNav = $('#myMenu');
           $('#fullpage').fullpage({
           anchors:['top','firstPage', 'secondPage', 'thirdPage','footer'],
           css3:true,
           autoScrolling:1,
           menu:'#myMenu',
		   
         afterRender:function(){
	 	         
         },
        onLeave: function(index, nextIndex, direction){	
             c('.wrapper',0,0,0)

				
		if((index == 2) && direction == 'up'){
				$gNav.animate({
					top: 0
				}, 680);
				$mNav.animate({
					top: 0
				}, 680);

			} else if(index == 1 && direction == 'down') {
								$mNav.animate({
					top: -44
				}, 400);
				$gNav.animate({
					top: -44
				}, 400);
			} 
			else if((index==3||index==4||index==5||index==6||index==7)&& nextIndex==1)
			{
				$gNav.animate({
					top: 0
				}, 680);
				$mNav.animate({
					top: 0
				}, 680);	
			}
			
		},
		afterLoad:function(index, nextIndex, direction){
		
		if(index=='top')
			{

				z('.wtitle0',0,'0s');
				z('.wh0',0,'0s');
				z('.wp0',0,'0s');		
							
			}	
		
		if(index=='firstPage')
			{
              	c('.wrap-img-04',15,0.8,-0.3);

				z('.wtitle0',1,'1s');
				z('.wh0',1,'1s');
				z('.wp0',1,'2s');

				z('.wtitle1',0,'0s');
				z('.wh1',0,'0s');
				z('.wp1',0,'0s');		
							
			}
			if(index=='secondPage')
			{	
		        c('.wrap-img-11',15,0.8,-0.3);
				 c('.wrap-img-12',15,0.8,-0.3);
				  c('.wrap-img-13',15,0.8,-0.3);
				
				z('.wtitle0',0,'0s');
				z('.wh0',0,'0s');
				z('.wp0',0,'0s');
							
				z('.wtitle1',1,'1s');
				z('.wh1',1,'1s');
				z('.wp1',1,'2s');
							
				z('.wtitle4',0,'0s');
				z('.wh4',0,'0s');
				z('.wp4',0,'0s');
			}
			
		
			if(index=='thirdPage')
			{
			
			c('.wrap-img-41',15,0,-0.3);
				
            z('.wtitle1',0,'0s');
			z('.wh1',0,'0s');
			z('.wp1',0,'0s');
           		   
			z('.wtitle4',1,'1s');
			z('.wh4',1,'1s');
			z('.wp4',1,'2s');
							
			}
			
			if(index=='sixthPage')
			{
		    c('.wrap-img-51',15,0.8,-0.3);
				
 			z('.wtitle4',0,'0s');
			z('.wh4',0,'0s');
			z('.wp4',0,'0s');
			
			z('.wtitle5',1,'1s');
			z('.wh5',1,'1s');
			z('.wp5',1,'2s');
							
				
			}
			
		    }
		
           });

           function c(item,x,r,l)
		    {
			  $w = $this.find(item);
			  if(l==1)
			  {
                	$w
									.css('-moz-transform', 'translate3d(0px, '+x+'px, 0px) rotate('+r+'deg)')
									.css('-webkit-transform', 'translate3d(0px, '+x+'px, 0px) rotate('+r+'deg)')
									.css('-o-transform', 'translate3d(0px, '+x+'px, 0px) rotate('+r+'deg)')
									.css('-ms-transform', 'translate3d(0px, '+x+'px, 0px) rotate('+r+'deg)')
									.css('transform', 'translate3d(0px, '+x+'px, 0px) rotate('+r+'deg)')
									
									.css('animation-delay', '-1s')
									.css('-ms-animation-delay', '-1s')
									.css('-o-animation-delay', '-1s')
									.css('-webkit-aanimation-delay', '-1s')
									.css('-moz-animation-delay', '-1s')
									
									.css('transition-duration', '2s')
									.css('-ms-transition-duration', '2s')
									.css('-o-transition-duration', '2s')
									.css('-webkit-transition-duration', '2s')
									.css('-moz-transition-duration', '2s');
			  }
			  else{
				  $w
									.css('-moz-transform', 'translate3d(0px, -'+x+'px, 0px) rotate('+r+'deg)')
									.css('-webkit-transform', 'translate3d(0px, -'+x+'px, 0px) rotate('+r+'deg)')
									.css('-o-transform', 'translate3d(0px, -'+x+'px, 0px) rotate('+r+'deg)')
									.css('-ms-transform', 'translate3d(0px, -'+x+'px, 0px) rotate('+r+'deg)')
									.css('transform', 'translate3d(0px, -'+x+'px, 0px) rotate('+r+'deg)')
									
									.css('animation-delay', '-1s')
									.css('-ms-animation-delay', '-1s')
									.css('-o-animation-delay', '-1s')
									.css('-webkit-aanimation-delay', '-1s')
									.css('-moz-animation-delay', '-1s')
									
									.css('transition-duration', '2s')
									.css('-ms-transition-duration', '2s')
									.css('-o-transition-duration', '2s')
									.css('-webkit-transition-duration', '2s')
									.css('-moz-transition-duration', '2s');
			  }
				
		 }
		
		    function z(item,op,dt)
		   {
			  $w = $this.find(item);
                	$w
									.css( 'opacity',op)
								
									
									.css('animation-delay', '-190ms')
									.css('-ms-animation-delay', '-190ms')
									.css('-o-animation-delay', '-190ms')
									.css('-webkit-aanimation-delay', '-190ms')
									.css('-moz-animation-delay', '-190ms')
									
									.css('transition-duration', dt)
									.css('-ms-transition-duration', dt)
									.css('-o-transition-duration', dt)
									.css('-webkit-transition-duration', dt)
									.css('-moz-transition-duration', dt);
		 }
		 		 
		 
	 });
	 
	  </script>


