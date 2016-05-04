  

  <div class="navbar-wrapper">
      <div class="container full-container">
      <div class="navwrapper">
        <div class="navbar navbar-inverse navbar-static-top " >
          <div class="navbar-container" >
           <div class="pull-left"><a style="font-size:20px;">
		   <i  class="fa fa-home"></i>
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
	</div>
	<script>
  jQuery(function($) {

    $(document).ready( function() {  
      $('.navbar-wrapper').stickUp({  
                    parts: {//这里与导航条对应，比较严格，不能少也不能多。  
                      
                      0:'features0',  
                      1: 'features1',  
                      2: 'features2',  
					  3: 'features3',  
					  4: 'features4',  
                    },  
                    itemClass: 'menuItem',  
                    itemHover: 'active',  
                    topMargin: 'auto'  
                  });  

    });  

  }); 
</script>  

   
   
   
	@section('content')
	
	@show
	
