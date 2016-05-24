<nav id="global-nav" class="navbar navbar-default panel-d" >  
   <div class="nav-content">
   <ul class="dropdown  navbar-header">
     <a class="pull-left " href="{{ URL('/') }}" style="color:#fff;font-size:20px"><i class="fa fa-home"></i>
	 </a>
     <a class="dropdown-toggle pull-right" data-toggle="dropdown" href="#" >
        MIWO<span class="caret"></span>
      </a>
	 <ul class="dropdown-menu  pull-right">
          <li class="cone"><a  class="nav-a dami" href="{{ URL('rice') }}">大米</a></li>
          <li class="ctwo"><a class="nav-a" href="{{ URL('noodle') }}">面条</a></li>
		  <li class="cthree"><a class="nav-a" href="{{ URL('snacks') }}">小食</a></li>
		  <li class="cfour"><a class="nav-a" href="{{ URL('seasoning') }}">调味</a></li>
		   <li class="cfive"><a class=" nav-a" href="{{ URL('tw') }}">发现台湾</a></li>
     </ul>
     </ul>
     
	<ul class="nav navbar-nav">
	    <li class=" edge "><a  class="nav-a icon " href="{{ URL('/') }}"></a></li>
          <li class="cone"><a  class="nav-a dami" href="{{ URL('rice') }}">大米</a></li>
          <li class="ctwo"><a class="nav-a" href="{{ URL('noodle') }}">面条</a></li>
		  <li class="cthree"><a class="nav-a" href="{{ URL('snacks') }}">小食</a></li>
		  <li class="cfour"><a class="nav-a" href="{{ URL('seasoning') }}">调味</a></li>
		   <li class="cfive"><a class=" nav-a" href="{{ URL('tw') }}">发现台湾</a></li>
		   	<!--
		    <li><a class="nav-a" href="{{ URL('jp') }}">发现日本</a></li>

			<li class="search pull-right  edge"><a class="nav-a" href="#"><i class="fa fa-search"></i></a></li>
			-->
      </ul>  	 
   </div>
</nav>