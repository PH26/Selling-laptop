<style>
	.slide{
		margin-top: 0.4em;
	}
	.carousel-inner{
		height: 24em;
		width: 95%;
		object-fit: cover;
	}
</style>
<div class="slide">
	<div id="carousel-id" class="carousel slide" data-ride="carousel"> <!-- Begin about-slide -->
	    <ol class="carousel-indicators">
	        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
	        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
	        <li data-target="#carousel-id" data-slide-to="2" class=""></li>
	       	<li data-target="#carousel-id" data-slide-to="3" class=""></li>


	    </ol>
	    <div class="carousel-inner">
	         <div class="item active">
	            <img alt="First slide" src="{{asset('images/slide/4.jpg')}}">
	            
	        </div>
	        <div class="item">
	            <img alt="Second slide" src="{{asset('images/slide/5.jpg')}}">
	           
	        </div>
	        <div class="item"> 
	            <img alt="Three slide" src="{{asset('images/slide/6.jpg')}}">
	        </div>
	        <div class="item"> 
	            <img alt="Four slide" src="{{asset('images/slide/4.png')}}">
	        </div>
	    </div>
	</div>
</div>