<style>
	.panel{
		border:2px solid #00e68a;
		margin-left: 2em
	}
	.panel-heading{
		background: #00e68a;
		border-radius: 0;
		font-weight: bold;
		color: white;
	}
	.panel-body{
		background: white;
	}
	.panel-body a{
		font-weight: bold;		
		color: black;
		border-bottom: 1px solid gray;
	}
	.panel-body a:hover{
		color: #00e68a;
	}
</style>
<div class="col-md-3 nav" style="float: left; ">
	<div class="panel">
	  	<div class="panel-heading">OPTIONS</div>
	  	<div class="panel-body">
			<ul class="nav nav-pills nav-stacked">
					<li role="presentation"><a href="{{route('index')}}">ALL</a></li>
				@foreach($categories as $category)
					@if(count($category->products)>0)
						<li role="presentation"><a href="{{route('category',$category->id)}}">{{ strtoupper($category->name) }}</a></li>
					@endif					
				@endforeach
			</ul>
	  	</div>
	</div>
</div>
