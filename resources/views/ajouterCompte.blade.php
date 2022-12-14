
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

@include('afficherClient')

<form action="{{route('comptes.store')}}" method="post">
    @csrf
    <table>
        <tr>
           <td>rib:</td> <td><input type="text" name="rib" riquired></td>
        </tr>
        <tr>
            <td>solde:</td><td><input type="number" name="solde" riquired></td>
        </tr>
        <tr>
            <td>id:</td><td><input type="number" name="idClient" riquired></td>
        </tr>
        
        <tr>
        <td><input type="submit" value="ajouter"></td> </tr>
    </table>
</form>
@include('footer')
</body>

