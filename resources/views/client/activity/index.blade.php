@extends('client.layouts.company')
@section('content')
     <ul class="content-posts">
      @foreach ($articles as $article)
	  <li>
	    <a href="{{URL('about/activity/'.$article->id)}}">
		<h6>
		 <i class="fa fa-hand-o-right "></i>
       
          {{{ $article->title }}}
        </h6>
		</a>
		<a class="pull-right">
		<h6>
		{{{ $article->created_at }}}
		</h6>
		</a>
      @endforeach
	  </li>
     </ul>
	 <div class="render title">
	 {!! $articles->render() !!}
	 </div>
	 @stop
	<style>
	.content-posts h6{
		float:left;
	}
	.content-posts{
		display:block;
		position:relative;
		
	}
	.content-posts li{
		display:block;
		position:relative;
	   overflow:hidden;
	}
	.content-posts li a{
		text-decoration:none;
	}
	.content .render{
		padding:0 auto;
	}
	
	</style>