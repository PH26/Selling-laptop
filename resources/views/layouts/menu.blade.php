<style>
	.nav{
		width: 95%;
		margin: 0 2.5em;
		border-bottom: 2px solid red;
	}
	.nav .category{
		border: 1px gray solid;
		margin:0.5em;
	}
	.category img{
		height: 3em;
	}
</style>
<div class="row nav">
	@foreach($categories as $item)
		<div class="col-md-1 category"><a href="{{route('category',$item->id)}}"><img src="{{asset('storage/'.$item->img)}}" ></a></div>
	@endforeach
</div>
