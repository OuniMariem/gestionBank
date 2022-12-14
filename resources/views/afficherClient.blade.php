
<body>
    <style>
        html,body{
        /* background-image: url('');
        background-size: cover;
        background-repeat: no-repeat; */
        height: 100%;
        font-family:'DM Serif Display';

}
    </style>
@include('navBar')
   
<div class="container-fluid pb-5">
 <div class=" row p-5" style="    --bs-gutter-x: 1.5rem;
    display: flex;
    flex-wrap: nowrap;
    flex-direction: row;
    align-content: stretch;
    justify-content: center;">
 <div class="col-md-6 left">   
 <div class="card " >
    <div class="card-header ">


    <h1>Liste Client </h1>
  </div>
  <div class="card-body p-5">
  <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">nom </th>
            <th scope="col">prenom  </th>
            <th scope="col">tel </th>
            <th scope="col">adresse </th>
            <th scope="col">email </th>
            <th scope="col"> </th>

        </tr>
    </thead>
   

  @foreach($clt as $cl)
        <tbody>
            <tr>
              

                <th scope="row">{{ $cl->id}}</th>
                <th scope="row">{{ $cl->nom}}</th>
                <th scope="row"> {{ $cl->prenom}}</th>
                <th scope="row"> {{ $cl->tel}}</th>
                <th scope="row"> {{ $cl->adresse}}</th>
                <th scope="row"> {{ $cl->email}}</th>
                <th scope="row">
                <a href="{{ route('client.findClient', ['id'=>$cl->id]) }}">
                                <i class="fa-solid fa-plus"></i>
                                </a> 
                </th>

            
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
</div>


 @include('footer')

</body>