

<body>
  <style>
  .card{
height: 500px;
margin-top: auto;
margin-bottom: auto;
width: 600px;
background-color: #BED3C3 !important;
box-shadow: 4px 5px 1px 3px #4A919E;
border:none;
}

h1,h2,p{
  color:white;
}
  </style>
@include('navBar')

<div class="container-fluid">
 <div class="row p-5">
 <div class="col-md-3 left">   
 <div class="" >
      <div class=" p-5 shadow-none bg-light" >
    <img src="./images/adminn.png" alt="" width="290px">
        </div>
        </div>
    </div>
  
<div class="col-md-4  " style="right:150px;margin-left:300px">   
 <div class="card " >
    <div class="card-header ">
    <h1>you are welcome  </h1>
  </div>
  <div class="card-body p-5">
  <h4><p>Pour accéder espace Admin Cliquer ici <i class="fa-regular fa-hand-point-down" style="color: #CE6A6B ;
  font-size: 60px;"></i></p></h4>

    </div>
    <div class="card-footer  p-4">
    <a href='connexion' class='btn ' style="background-color:#212E53;color:white;"><i class="fa-solid fa-user" style="color: #CE6A6B ;
  font-size: 30px;"></i> Espace Client</a></td>

    </div>
    </div>
</div>

<div class="col-md-6  " style="padding-top:150px">   
 <div class="card " >
    <div class="card-header">
    <h1>you are welcome   </h1>
  </div>
  <div class="card-body p-5">
    <h4><p>Pour accéder espace Admin Cliquer ici <i class="fa-regular fa-hand-point-down" style="color: #CE6A6B ;
  font-size: 60px;"></i></p></h4>
    </div>
    <div class="card-footer  p-4">
    <a href='compteA' class='btn ' style="background-color:#212E53;color:white;"><i class="fa-solid fa-user" style="color: #CE6A6B ;
  font-size: 30px;"></i> Espace admin</a></td>

    </div>
    </div>
</div>
<div class="col-md-3 " style="padding-top:150px">   
 <div class="" >
  
  <div class="card-body p-5">
 <img src="./images/client.png" alt="" width="290px">
    </div>
    </div>
</div>

@include('footer')
<script src="{{ asset('js/app.js') }}" type="text/js"> </script>
</body>
