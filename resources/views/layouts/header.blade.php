<style>
	*{
		width: 100%;
		margin:0 auto;
		padding: 0;
	}
	header{
		background: #cd1818;
	}
	header img{
		height: 5em;
		width: 50%;
		margin-left: 3em;
		padding: 0.5em;
	}
	header .page{
		font-weight: bold;
		padding: 2em 0 1em 0;
	}
	header a{
		text-decoration: none;
		color: white;
	}
	header a:hover{
		text-decoration: none;
		color:black;
	}
	header .input-group{
		padding-top: 1.5em;
	}
</style>
<header>
	<div class="row fixed-bottom">

		<div class="col-md-3">
			<img src="{{asset('images/logo2.png')}}">
		</div>

		<div class="col-md-5">
			<form action="#" method="GET">
                <div id="custom-search-input">
                    <div class="input-group col-md-10">
                        <input type="text" class="form-control input-sm" placeholder="Search..." />
                        <span class="input-group-btn">
                        <button class="btn btn-default btn-sm">
                            <i class="fa fa-search"></i>
                        </button>
                        </span>                                                                
                    </div>
                </div>
            <form> 
		</div>

		<div class="col-md-3 col-md-push-1">
			@if(Auth::check())
				<div class="col-md-1 page">
					<a href="{{route('home')}}"><span class="fa fa-user"></span></a>
				</div>
				<div class="col-md-7 page">
					<a href="{{route('home')}}">{{Auth::user()->name}}</a>
				</div> 
			@else
				<div class="col-md-4 page"><a href="{{route('register')}}">REGISTER</a></div>
				<div class="col-md-4 page"><a href="{{route('login')}}">LOGIN</a></div>
			@endif		
			<div class="col-md-4 page"><a href="{{route('index')}}"><span class="fa fa-shopping-cart fa-2x"></span></a></div>
		</div>

	</div>
</header>