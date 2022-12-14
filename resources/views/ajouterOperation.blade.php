
<body>
    @include('navBar')
<form action="{{route('operations.store')}}" method="post">
    @csrf
    <table>
        <tr>
           <td>date Opération:</td> <td><input type="date" name="dateOperation" riquired></td>
        </tr>
        <tr>
            <td>Type:</td><td><input type="text" name="type" riquired></td>
        </tr>
        <tr>
           <td>Montant:</td> <td><input type="number" name="montant" riquired></td>
        </tr>
        <tr>
           <td>idCompte:</td> <td><input type="number" name="idCompte" riquired></td>
        </tr>
        
        <tr>
        <td><input type="submit" value="ajouter"></td>        </tr>
    </table>
</form>

@include('footer')
</body>
