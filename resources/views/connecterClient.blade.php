

<body>
    <style>/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
/* background-image: url('');
background-size: cover;
background-repeat: no-repeat; */
height: 100%;
font-family:'DM Serif Display';

}

.container{
height: 100%;
align-content: center;
}

.card{
height: 500px;
margin-top: auto;
margin-bottom: auto;
width: 600px;
background-color: #BED3C3 !important;
box-shadow: 4px 5px 1px 3px #4A919E;
border:none;
}


.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #CE6A6B ;
}

.social_icon span:hover{
color: #212E53;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
height:40px;
padding: 10px;
}

.input-group-prepend span{
width: 50px;
background-color: #CE6A6B;
color: #212E53;
height: 40px;

border:0 !important;

}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: white;
background-color: #CE6A6B;
width: 100px;
}

.form-groupe>.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
    margin-left: 4px;
    font-family:'DM Serif Display';
   
    text-decoration:none;
  
}
a:link{
    font-family:'DM Serif Display';
    text-decoration:none;
}


</style>
@include('navBar')



<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h1  style="color: #212E53; font-family:'DM Serif Display';">Sign In</h1>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
            <div class="card-body p-5 align-items-center">
            <form action="connecter" method="post">
    @csrf
  
        <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="login" required class="form-control" placeholder="username">
						
		</div>
        <div class="input-group form-group pt-4">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="pasword" required class="form-control" placeholder="password">
        </div>
         <div class="row align-items-center remember pt-4">
						<input type="checkbox">Remember Me
	    </div>
        <div class="form-group p-3">
            <button type="submit" class="btn  login_btn " style="background-color:#CE6A6B;color:white;" >Login</button>

        </div>
		</form>
			
			<div class="card-footer pt-3">
				<div class="d-flex justify-content-center links">
					<h3 > Don't have an account? </h3> 
                    <a href="#"  style="color: #212E53;font-size: 18px;"> Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#"  style="color: #212E53;font-size: 18px;">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>

@include('footer')
<script src="{{ asset('js/app.js') }}" type="text/js"> </script>
</body>

