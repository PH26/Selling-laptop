<style>
	.carousel-inner{
		height: 25em;
		width: 94%;
		object-fit: cover;
	}
</style>
<div class="slide">
	<div id="carousel-id" class="carousel slide" data-ride="carousel"> <!-- Begin about-slide -->
	    <ol class="carousel-indicators">
	        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
	        <li data-target="#carousel-id" data-slide-to="2" class=""></li>
	    </ol>
	    <div class="carousel-inner">
	         <div class="item active">
	            <img alt="First slide" src="{{asset('images/logo.png')}}">
	            
	        </div>
	        <div class="item">
	            <img alt="Second slide" src="{{asset('images/logo.png')}}">
	           
	        </div>
	        <div class="item"> 
	            <img alt="Three slide" src="{{asset('images/logo.png')}}">
	        </div>
	    </div>
	</div>
</div>