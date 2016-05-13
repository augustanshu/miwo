@extends('client.layouts.index')
<style>
.ctwo a{
	    color: #666666 !important;
}
</style>
@section('menuitem')
 <li data-menuanchor="top" class="menuList pull-left" ><a href="#top">面条</a></li>
 <li data-menuanchor="firstPage" class="menuList"><a href="#firstPage">种植</a></li>
<li data-menuanchor="secondPage"class="menuList"><a href="#secondPage">加工</a></li>
<li data-menuanchor="thirdPage" class="menuList"><a href="#thirdPage">外观</a></li>
<li data-menuanchor="fourthPage"class="menuList"><a href="#fourthPage">口感</a></li>	
<li data-menuanchor="fifthPage"class="menuList"><a href="#fifthPage">营养</a></li>	
<li data-menuanchor="sixthPage" class="menuList"><a href="#sixthPage">包装</a></li>	
<li data-menuanchor="footer" class="menuList"><a href="#footer">尾部</a></li>			
@stop



     @section('content')

	 	  <section id="featuresz" class="featurette section" style="background-color: #fff;">
	   <div  class="section-fixedwrapper">
			<div class="center-wrap">
			<div class="desc thin-desc">
				<h1>台湾好面条</h1>
				 <figure class="wrap-img-top ">
	              <img src="img/noodle-fallback_large-top.png">
	             </figure>
			</div>

		</div>
	   </div>
      </section>
	 
   <section id="features0" class="featurette section" style="background-color: #fff;">
	   <div class="section-wrapper">
	   <figure class="wrap-img-04 wrapper wrapper-1">
	     <img src="img/noodle-fallback_large-11.png">
	   </figure>
	   
	   </div>

	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12 wtitle wtitle0">
		<h2>原料</h2>
		</div>
		 <div class="col-lg-10 ">
		 <div class="wh wh0">
          <h4><small>黄金小麦，澳洲精选 </small></h4>
		  </div>
          <p class="wp wp0">原料于澳洲天然环境下生长，自然纯净，麦粒肥大饱满，高优质蛋白易为人体吸收，制成面条洁白光滑，耐煮不烂，入口滑溜有咬劲。
		  <br>
          </p>
        </div>
		</div>
	   </div>
   </section>
	
   <section id="features1" class="featurette section" style="background-color: #eee;">
	     
       <div  class="section-wrapper">
	  	    <figure class="wrap-img-14 wrapper wrapper-2">
	        <img src="img/noodle-fallback_large-12.png">
	        </figure>
			
			 <figure class="wrap-img-15 wrapper wrapper-21">
	        <img src="img/noodle-fallback_large-13.png">
	        </figure>
	  
	   
	   </div >
	   
	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12 wh wh1">
		<h2>加工</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh1">
          <h4> <small>优选原料，用心加工</small></h4>
		  </div>
          <p class="wp wp1">精选澳洲黄金小麦精制粉芯面粉，经13道工序，融合传统与现代工艺，用心制作而成。
          </p>
        </div>
		</div>
	   </div >
      </section> <!-- END FEATURES -->
	  
    <section id="features2" class="featurette section" style="background-color: #fff;">
	    
       <div  class="section-wrapper">
	   <figure class="wrap-img-20 wrapper wrapper-2">
	     <img src="img/noodle-fallback_large-20.png">
	   </figure>
	   
	    <figure class="wrap-img-22 wrapper wrapper-21">
	      <img src="img/noodle-fallback_large-21.png">
	   </figure>
	   
	   </div >
	   
	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12">
		<h2 class="wh wh2">外观</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh2">
          <h4> <small>细面：色泽纯正，细若纤丝</small></h4>
		  </div>
          <p class="wp wp2">优质原料尽显纯正色泽，面条根根如丝细腻光滑。
          </p>
		  <div class="wh wh2">
          <h4> <small>宽面：色泽纯正，粗细均匀</small></h4>
		  </div>
          <p class="wp wp2">优质原料尽显纯正色泽，面条粗细均匀老少咸宜。
          </p>
        </div>
		</div>
	   </div >
      </section> <!-- END FEATURES -->
	  
    <section id="features3" class="featurette section" style="background-color: #eee;">
	    
       <div  class="section-wrapper">
	   <figure class="wrap-img-31 wrapper wrapper-1">
	     <img src="img/noodle-fallback_large-31.png">
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
		<h2 class="wh wh3">口感</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh3">
          <h4> <small>筋道爽口，耐煮不糊</small></h4>
		  </div>
          <p class="wp wp3">面条劲道，久吃不膩，入口外滑内筋，不坨不粘，越嚼越香。
          </p>
        </div>
		</div>
	   </div >
      </section> 
	
	  <section id="features4" class="featurette section" style="background-color: #fff;">
	    
       <div  class="section-wrapper">
	   <figure class="wrap-img-40 wrapper wrapper-2">
	     <img src="img/noodle-fallback_large-40.png">
	   </figure>
	  <figure class="wrap-img-42 wrapper wrapper-21">
	     <img src="img/noodle-fallback_large-41.png">
	   </figure>
	   </div >
	   
	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12 ">
		<h2 class="wh wh4">营养</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh4">
         <h4> <small>麦香浓郁，营养丰富</small></h4>
		  </div>
          <p class="wp wp4"> 营养配方精制而成，健康更安心。
          </p>
        </div>
		</div>
	   </div >
      </section> 
	
	  <section id="features5" class="featurette section" style="background-color: #eee;">
	    
       <div  class="section-wrapper">
       <figure class="wrap-img-54 wrapper wrapper-2">
	    <img  src="img/noodle-fallback_small-52.png" ></img>
	   </figure>
	    <figure class="wrap-img-55 wrapper wrapper-21">
	    <img  src="img/noodle-fallback_small-51.png" ></img>
	   </figure>
	  
	   </div >
	   
	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12 ">
		<h2 class="wh wh5">包装</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh5">
          <!--<h4><small>包装不求奢华，简单彰显别致</small></h4>-->
		  </div>
          <p class="wp wp5"> 简洁精致密封包装，保存了面的原有风味，食用简单，便于携带。
          </p>
        </div>
		</div>
	   </div >
      </section> <!-- END FEATURES -->
	

	  @stop
	  
	  
	    
	  <script>
	   $(function(){
        var $this=$(this);
        var $gNav = $('#global-nav');
        var $mNav = $('#myMenu');
           $('#fullpage').fullpage({
           anchors:['top','firstPage', 'secondPage', 'thirdPage','fourthPage','fifthPage','sixthPage','footer'],
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
				  c('.wrap-img-14',15,0.8,-0.3);
				 c('.wrap-img-15',10,-0.8,-0.3);
				 
				z('.wtitle0',0,'0s');
				z('.wh0',0,'0s');
				z('.wp0',0,'0s');
							
				z('.wtitle1',1,'1s');
				z('.wh1',1,'1s');
				z('.wp1',1,'2s');
							
				z('.wtitle2',0,'0s');
				z('.wh2',0,'0s');
				z('.wp2',0,'0s');
			}
			
			if(index=='thirdPage')
			{
			c('.wrap-img-20',15,-0.3,-0.3);
			c('.wrap-img-22',25,0.3,-0.3);
			
			z('.wtitle1',0,'0s');
			z('.wh1',0,'0s');
			z('.wp1',0,'0s');	
							
							
			z('.wtitle2',1,'1s');
			z('.wh2',1,'1s');
			z('.wp2',1,'2s');
							
			z('.wtitle3',0,'0s');
			z('.wh3',0,'0s');
			z('.wp3',0,'0s');
				
			}
			
			if(index=='fourthPage')
			{
			 c('.wrap-img-31',15,0,-0.3);
					
			z('.wtitle2',0,'0s');
			z('.wh2',0,'0s');
			z('.wp2',0,'0s');	
							
							
			z('.wtitle3',1,'1s');
			z('.wh3',1,'1s');
			z('.wp3',1,'2s');
							
			z('.wtitle4',0,'0s');
			z('.wh4',0,'0s');
			z('.wp4',0,'0s');
				
			}
			if(index=='fifthPage')
			{
			
			c('.wrap-img-40',15,0,-0.3);
			c('.wrap-img-42',18,0,-0.3);
			
            z('.wtitle3',0,'0s');
			z('.wh3',0,'0s');
			z('.wp3',0,'0s');
           		   
			z('.wtitle4',1,'1s');
			z('.wh4',1,'1s');
			z('.wp4',1,'2s');
							
			z('.wtitle5',0,'0s');
			z('.wh5',0,'0s');
			z('.wp5',0,'0s');
			z('.thumbs',0,'0s');	
			}
			
			if(index=='sixthPage')
			{
		    c('.wrap-img-54',15,0.8,-0.3);
			c('.wrap-img-55',5,-0.8,-0.3);
				 
 			z('.wtitle4',0,'0s');
			z('.wh4',0,'0s');
			z('.wp4',0,'0s');
			
			z('.wtitle5',1,'1s');
			z('.wh5',1,'1s');
			z('.wp5',1,'2s');
			z('.thumbs',1,'2s');
							
				
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

