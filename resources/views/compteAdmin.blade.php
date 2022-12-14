
<body>
  @include('navBar')
<div class="container-fluid">
<div class="row ">

<div class="col-sm-4 p-4">
    <div class="card">
    <div class="card-header ">
        <h5 >Ajout Compte</h5>
    </div>
      <div class="card-body"> 
        <h4><p>Pour créer un compte client Cliquer ici 
        <i class="fa-regular fa-hand-point-down"></i></p></h4>
      </div>
      <div class="card-footer bg-secondery p-4">
        <a  class="btn btn-primary" href="afficheClient">Afficher Client </a>
    </div>
</div>
</div>
  <div class="col-sm-4 p-4">
    <div class="card">
        <div class="card-header ">
            <h5 >Ajout Client</h5>
        </div>
        <div class="card-body">
            <h4><p>Pour ajouter un client Cliquer ici <i class="fa-regular fa-hand-point-down"></i></p></h4>
        </div>
        <div class="card-footer bg-secondery p-4">
        <a  class="btn btn-primary" href="ajoutClient">Ajouter Client </a>
        </div>
    </div>
</div>

<div class="col-sm-4 p-4">
  <div class="card">
    <div class="card-header ">
        <h5 >Operation</h5>
    </div>
      <div class="card-body">
       <h4><p>Pour passer une opération Cliquer ici <i class="fa-regular fa-hand-point-down"></i></p></h4>
      </div>
      <div class="card-footer bg-secondery p-4">
        <a href="operation" class="btn btn-primary">Passer Opération </a>
    </div>
  </div>
</div>
</div>
</div>


@include('footer')
<script src="{{ asset('js/app.js') }}" type="text/js"> </script>
</body>
