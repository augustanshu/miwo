@extends('client.layouts.index')
<style>
.cone a{
	    color: #666666 !important;
		
}
html { overflow-x: hidden; overflow-y:hidden; }

.section{
	
	overflow: hidden;
}
</style>
@section('menuitem')
 <li data-menuanchor="top" class="menuList pull-left" ><a href="#top">大米</a></li>
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
				<h1>台湾好大米</h1>
				 <figure class="wrap-img-top">
	              <img src="img/rice-fallback_large-top.png">
	             </figure>
			</div>

		</div>
	   </div>
      </section>
	 
      <section id="features0" class="featurette section" style="background-color: #fff;">
	   <div class="section-wrapper">
	   <figure class="wrap-img-01 wrapper-3 wrapper">
	     <img src="img/rice-fallback_large-0.png">
	   </figure>
	 
	    <figure class="wrap-img-02 wrapper-31 wrapper">
	     <img src="img/rice-fallback_large-01.png">
	   </figure>
	    <figure class="wrap-img-03 wrapper-32 wrapper">
	     <img src="img/rice-fallback_large-03.png">
	   </figure>
	   
	   </div>

	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12 wtitle wtitle0">
		<h2>种植</h2>
		</div>
		 <div class="col-lg-10 ">
		 <div class="wh wh0">
          <h4><small>赢在起跑线上——复制不了的优势 </small></h4>
		  </div>
          <p class="wp wp0" >遵循自然粳稻，选择经试验严格筛选后的优良品种，根植于台湾丰沃的水土，超长休耕期让土壤中的养分加倍，水源纯净充足保证植物的健康成长！种植地阳光充沛，日夜温差大，让稻谷吸收丰沛的自然精华，从而孕育出让大地骄傲的好米！
		  <br>
          </p>
        </div>
		</div>
	   </div>
      </section>
	
   <section id="features1" class="featurette section" style="background-color: #eee;">
	     
       <div  class="section-wrapper">
	   <figure class="wrap-img-11 wrapper-3 wrapper">
	     <img src="img/rice-fallback_large-11.png">
	   </figure>
	  
	    <figure class="wrap-img-12 wrapper-31 wrapper">
	     <img src="img/rice-fallback_large-12.png">
	   </figure>
	   
	    <figure class="wrap-img-13 wrapper-32 wrapper">
	     <img src="img/rice-fallback_large-13.png">
	   </figure>
	   
	   </div >
	   
	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12 wh wh1">
		<h2>加工</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh1">
          <h4> <small>精制加工，用心栽培</small></h4>
		  </div>
          <p class="wp wp1">经传统加工工艺与现代科技结合，人工细心栽培与研发，精制加工而成。无农药和化肥，从脱壳到色选，去除杂质和碎米，粒粒怀揣匠心精挑细选，百分之百当年新米，绝不掺假。
          </p>
        </div>
		</div>
	   </div >
      </section> <!-- END FEATURES -->
	  
    <section id="features2" class="featurette section" style="background-color: #fff;">
	    
       <div  class="section-wrapper">
	   <figure class="wrap-img-21 wrapper wrapper-1">
	     <img src="img/rice-fallback_large-2.png">
	   </figure>
	   <!--
	    <figure class="wrap-img-22 wrapper">
	     <img src="img/watch_01_fallback_large.png">
	   </figure>
	   -->
	   </div >
	   
	   <div  class="section-fixedwrapper">
	   <div class="content">
	    <div class="col-lg-12">
		<h2 class="wh wh2">外观</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh2">
          <h4> <small>晶莹剔透，米质纯净</small></h4>
		  </div>
          <p class="wp wp2">原生态，不打蜡，不抛光，不滴油。颗粒均匀，饱满扎实，玲珑剔透。优质好米米质纯净，流露出浑然天成的自然色泽。
          </p>
        </div>
		</div>
	   </div >
      </section> <!-- END FEATURES -->
	  
    <section id="features3" class="featurette section" style="background-color: #eee;">
	    
       <div  class="section-wrapper">
	   <figure class="wrap-img-31 wrapper wrapper-1">
	     <img src="img/rice-fallback_large-31.png">
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
          <h4> <small>优质稻种，传承原香</small></h4>
		  </div>
          <p class="wp wp3">清淡略甜，松润绵软，香滑爽口。无论是煮粥还是煮饭都回味无穷。迷恋每一口香糯甘甜，感受在舌尖的幸福感，清香溢齿，回味无穷。
          </p>
        </div>
		</div>
	   </div >
      </section> 
	
	  <section id="features4" class="featurette section" style="background-color: #fff;">
	    
       <div  class="section-wrapper">
	   <figure class="wrap-img-41 wrapper wrapper-1">
	     <img src="img/rice-fallback_large-41.png">
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
		<h2 class="wh wh4">营养</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh4">
         <h4> <small>安心享用，粒粒精华</small></h4>
		  </div>
          <p class="wp wp4"> 台湾好米营养价值高于很多白米。含高纤维、维生素、蛋白质和丰富的矿物质、铁质、钙质和磷质。每一粒米米粒涨性大而粘性小，易被人体消化吸收。
          </p>
        </div>
		</div>
	   </div >
      </section> 
	
	  <section id="features5" class="featurette section" style="background-color: #eee;">
	    
       <div  class="section-wrapper">
	   <figure class="wrap-img-51 wrapper wrapper-3">
	    <img  src="img/rice-fallback_small-52.png" ></img>
	   </figure>
	    <figure class="wrap-img-52 wrapper wrapper-31">
	    <img  src="img/rice-fallback_small-54.png" ></img>
	   </figure>
	    <figure class="wrap-img-53 wrapper wrapper-32">
	    <img  src="img/rice-fallback_small-53.png" ></img>
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
		<h2 class="wh wh5">包装</h2>
		</div>
		 <div class="col-lg-10">
		 <div class="wh wh5">
          <h4><small>包装不求奢华，简单彰显别致</small></h4>
		  </div>
          <p class="wp wp5"> 素色图面，衬托大米的纯白。透明外袋，清晰可见米粒的扎实浑圆。真空包装，延续米的鲜度清香。
          </p>
        </div>
		<!--
		 <ul  class="col-lg-12 thumbs">
		  <img  src="img/rice-fallback_small-52.png" class="thumb"></img>
		  <img  src="img/rice-fallback_small-54.png" class="thumb"></img>
		  <img  src="img/rice-fallback_small-53.png" class="thumb"></img>
		  </ul>
		  -->
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
			else if((index==3||index==4||index==5||index==6||index==7||index==8)&& nextIndex==1)
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
              	c('.wrap-img-01',15,0.8,-0.3);
				c('.wrap-img-02',14,-0.6,-0.3);
				c('.wrap-img-03',20,1.2,-0.3);

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
							
				z('.wtitle2',0,'0s');
				z('.wh2',0,'0s');
				z('.wp2',0,'0s');
			}
			
			if(index=='thirdPage')
			{
			c('.wrap-img-21',15,-0.3,-0.3);
			
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
			
			c('.wrap-img-41',15,0,-0.3);
				
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
		    c('.wrap-img-51',5,0,-0.3);
				 c('.wrap-img-52',5,0,-0.3);
				  c('.wrap-img-53',5,0,-0.3);
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


