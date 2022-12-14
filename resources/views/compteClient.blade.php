


<body>
  @include('navBar')
<div class="container-fluid">
 <div class="row p-5">
 <div class="col-md-6 left">   
 <div class="card " >
    <div class="card-header ">


    <h1>you are welcome  </h1>
  </div>
  <div class="card-body p-5">
  <h4><p>Pour consulter votre solde Cliquer ici <i class="fa-regular fa-hand-point-down"></i></p></h4>

    </div>
    <div class="card-footer bg-secondery p-4">
   
    <a href='solde' class='btn btn-primary'><h4>Consulter Solde</h4></a>
    </div>
    </div>
</div>
<div class="col-md-6 left">   
 <div class="card " >
    <div class="card-header">
    <h1>you are welcome   </h1>
  </div>
  <div class="card-body p-5">
    <h4><p>Pour consulter votre historique Cliquer ici <i class="fa-regular fa-hand-point-down"></i></p></h4>
    </div>
    <div class="card-footer bg-secondry p-4">
    <a class='btn btn-primary' href="historiqueCompte"><h4>Consulter Historique</h4> </a>

    </div>
    </div>
</div>


 @include('footer')

    <script src="{{ asset('js/app.js') }}" type="text/js"> </script>
</body>

