<style>
	*{
		width: 100%;
		margin:0 auto;
		padding: 0;
	}
	header{
		background: #00e68a;
	}
	header img{
		height: 5em;
		width: 50%;
		margin-left: 3em;
		padding: 0.5em;
	}
	header .page{
		font-weight: bold;
		padding: 1.2em 0;
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
		padding-top: 0.9em;
	}
</style>
<header>
	<div class="row fixed-bottom">

		<div class="col-md-3">
			<img src="{{asset('images/logo.png')}}">
		</div>

		<div class="col-md-3">
			<div class="col-md-3 page"><a href="{{route('index')}}">HOME</a></div>
			<div class="col-md-3 page"><a href="">ABOUT</a></div>
			<div class="col-md-3 page"><a href="">CONTACT</a></div>
		</div>

		<div class="col-md-3">
			<form action="#" method="GET">
                <div id="custom-search-input">
                    <div class="input-group col-md-10">
                        <input type="text" class="form-control input-sm" placeholder="Search..." />
                        <span class="input-group-btn">
                        <button class="btn btn-default btn-sm">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                        </span>                                                                
                    </div>
                </div>
            <form> 
		</div>

		<div class="col-md-3">
			<div class="col-md-4 page"><a href="{{route('index')}}">REGISTER</a></div>
			<div class="col-md-4 page"><a href="{{route('index')}}">LOGIN</a></div>
			<div class="col-md-4 page"><a href="{{route('index')}}"><span class="fa fa-shopping-cart fa-1x"></span></a></div>
		</div>

	</div>
</header>