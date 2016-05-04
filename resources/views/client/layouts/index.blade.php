
	@include('client.layouts.header')
  <div class="navbar-wrapper" id="myMenu">
      <div class="navwrapper">
        <div class="navbar navbar-inverse navbar-static-top " >
          <div class="navbar-container" >
           <div class="pull-left"><a style="font-size:20px;">
		  <!-- <i  class="fa fa-home"></i>-->
		   </a>
		   </div>
            <div class="navbar-collapse collapse pull-right">
              <ul class="nav navbar-nav ">
			  @section('menuitem')

              @show				
              </ul>
            </div>
          </div>
        </div> 
      
      </div>
	</div>
  
   	<div id="fullpage">
	
	@section('content')

	@show
	  @include('client.layouts.footer')
	</div>
	

	
	

	

