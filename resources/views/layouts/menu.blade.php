<style>
	.panel{
		border:2px solid #00e68a;
	}
	.panel-heading{
		background: #00e68a;
		border-radius: 0;
		font-weight: bold;
		color: white;
	}
	.panel-body{
		background: #f0f5f5;
	}
	.panel-body a{		
		color: black;
	}
	.panel-body a:hover{
		color: red;
	}
</style>
<div class="col-md-2 nav">
	<div class="panel">

	  	<div class="panel-heading">CATEGORIES</div>
	  	<div class="panel-body">
			<ul class="nav nav-pills nav-stacked">
				@foreach($categories as $category)
					<li role="presentation"><a href="#">{{ $category->name }}</a></li>
				@endforeach
			</ul>
	  	</div>

	  	<div class="panel-heading">DANH MỤC 2</div>
	  	<div class="panel-body">
			<ul class="nav nav-pills nav-stacked">
				<li role="presentation"><a href="#">A</a></li>
				<li role="presentation"><a href="#">B</a></li>
				<li role="presentation"><a href="#">C</a></li>
			</ul>
	  	</div>

	</div>
</div>