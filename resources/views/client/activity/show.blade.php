@extends('client.layouts.company')

  @section('content')
	<div class="posts">
	<div class="pull-left">
    上一篇：
	@if($article_former==null)
		<a href="{{URL('about/activity/'.$article->id)}}">没有了</a>
	@else
		<a href="{{URL('about/activity/'.$article_former->id)}}">{{$article_former->title}}</a>
	@endif
	</div>
	<div class="pull-right">
	下一篇：
		@if($article_latter==null)
		<a href="{{URL('about/activity/'.$article->id)}}">没有了</a>
	   @else
		<a href="{{URL('about/activity/'.$article_latter->id)}}">{{$article_latter->title}}</a>
	    @endif
	</div>
	</div>
	   <div class="title">
          <h4>{!!$article->title!!}</h4>
        </div>
      <div class="description">
      <p>{!!$article->description!!}</p>
      </div>
@stop

<style>
.posts{
	    position: relative;
	display:block;
	    overflow: hidden;
}
.posts a{
	color:#000;
	text-decoration:none}
</style>