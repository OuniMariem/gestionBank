@include('navBar')
<body>
<div class="container-fluid">
 <div class="row p-5">
 <div class="col-md-6 left">   
 <div class="card " >
    <div class="card-header ">


    <h1>Solde </h1>
  </div>
  <div class="card-body p-5">
  <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">date opération </th>
            <th scope="col">type d'opération </th>
            
        </tr>
    </thead>
    @foreach($operation as $op)
        <tbody>
            <tr>
                <th scope="row">{{$op->id}}</th>
                <th scope="row">{{$op->dateOperation}}</th>
                <th scope="row"> {{$op->type}}</th>
            
            </tr>
        </tbody>
    @endforeach
    </table>
    </div>
    <div class="card-footer bg-secondery p-4">
    <a href='solde' class='btn btn-primary'> <h5>Consulter Solde</h5></a></td>
    <a class='btn btn-success' href="historiqueCompte"><h5>Consulter Historique</h5> </a>

    </div>
    </div>
</div>



 
@include('footer')
    <script src="{{ asset('js/app.js') }}" type="text/js"> </script>
</body>
