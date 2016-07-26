	
	@include('client.layouts.header')
	<div id="myCarousel" class="carousel slide main-content" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner active">
		
            <div class="item  active">
                <a href="{{URL('about/activity/4')}}"><img src="img/1.jpg" style="width:100%" data-src=" " alt="First slide"></a>
                <div class="container">
                    <div class="carousel-caption">
					 
                       <!-- <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida          at  eget metus.                 Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						-->
                    </div>
                </div>
            </div>
			
            <div class="item item2">
               <img src="img/bg.jpg" style="width:100%" data-src="" alt="Second slide">
                <div class="container">
                   <div class="carousel-caption">
				    <h1>台湾食品，源头之旅</h1>
				   <div class="wrappers">
				   
                   <a href="{{URL('rice')}}">  <img src="img/p-1.jpg"></img></a>
					<a href="{{URL('noodle')}}">     <img src="img/p-2.jpg"></img></a>
					<a href="{{URL('snacks')}}"> 	   <img src="img/p-3.jpg"></img></a>
					<a href="{{URL('seasoning')}}"> 	      <img src="img/p-4.jpg"></img></a>
							  </div>
							  </div>
                </div>
            </div>
				<!--
            <div class="item">
                <img src="img/3.jpg" style="width:100%" data-src="" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
				
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
						
                    </div>
                </div>
            </div>
			-->
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->
	<div id="pic-about">
	<ul>
       <a href="https://detail.1688.com/offer/535621388749.html" target="_blank"><img  class="thumb" src="img/thumb0.png">
	   <img class="thumb_center" src="img/thumb0-1.png"></a>
		 <a href="https://detail.1688.com/offer/533973880151.html" target="_blank"> <img class="thumb" src="img/thumb1.png"><img class="thumb_center thumb11" src="img/thumb1-1.png"></a>
		 <a href="https://detail.1688.com/offer/533940281020.html" target="_blank"> <img class="thumb"  src="img/thumb2.png"><img class="thumb_center thumb21" src="img/thumb2-1.png"></a>
		   <a href="https://detail.1688.com/offer/533913554283.html" target="_blank"><img class="thumb"  src="img/thumb3.png"><img class="thumb_center thumb31" src="img/thumb3-1.png"></a>
		  </ul>
   </div>
