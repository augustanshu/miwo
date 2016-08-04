@extends('client.layouts.index')
<style>
.cfour a{
	    color: #666666 !important;
}
</style>

@section('menuitem')
 <li data-menuanchor="top" class="menuList pull-left" ><a href="#top">调味</a></li>
<li data-menuanchor="footer" class="menuList"><a href="#footer">尾部</a></li>			
@stop



     @section('content')

	 	  <section id="featuresz" class="featurette section" style="background-color: #fff;">
	   <div  class="section-fixedwrapper">
			<div class="center-wrap">
			<div class="desc thin-desc">
				<h1>台湾好调味</h1>
				 <figure class="wrap-img-top ">
	              <img src="img/seasong-fallback_large-top.png"  alt="港通天下">
	             </figure>
			</div>

		</div>
	   </div>
      </section>
	  @stop
	  
	  
	    
	  <script>
	   $(function(){
        var $this=$(this);
        var $gNav = $('#global-nav');
        var $mNav = $('#myMenu');
           $('#fullpage').fullpage({
              anchors:['top','footer'],
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


