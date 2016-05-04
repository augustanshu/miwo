@include('client.layouts.header')
<div id="dowebok">

   @section('content')
   @show
   @include('client.layouts.footer')	
</div>

<script>
$(function(){
	var $mlNav = $('.ml-nav');
	$('#dowebok').fullpage({
		verticalCentered: true,
		navigation: true,
		onLeave: function(index, nextIndex, direction){
			if(index == 2 && direction == 'up'){
				
			} else if(index == 1 && direction == 'down') {
				
			} else if(index == 3 && direction == 'up') {
				
			} else {
				
			}
		}
	});
});
</script>
