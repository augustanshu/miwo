	@include('client.layouts.header')
<div class="contactus mid-container main-content">
    <div class=" header">
        <a href="{{URL($url)}}"> <h5>{{$title}}</h5></a>
		 <!--
		 <div class="pull-right"><a href="#">��ע����</a><a href="#">��˾��̬</a></div>
		 -->
        </div>
    <div class="content">
   @section('content')
   @show
    
</div>