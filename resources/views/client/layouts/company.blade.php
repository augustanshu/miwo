	@include('client.layouts.header')
<div class="contactus mid-container main-content">
    <div class=" header">
        <a href="{{URL($url)}}"> <h5>{{$title}}</h5></a>
		 <!--
		 <div class="pull-right"><a href="#">关注我们</a><a href="#">公司动态</a></div>
		 -->
        </div>
    <div class="content">
   @section('content')
   @show
    
</div>