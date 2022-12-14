
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




    
<form action="{{route('clients.store')}}" method="post">
    @csrf
    <table>
        <tr>
           <td>nom:</td> <td><input type="text" name="nom" riquired></td>
        </tr>
        <tr>
            <td>Prenom:</td><td><input type="text" name="prenom" riquired></td>
        </tr>
        <tr>
           <td>tel:</td> <td><input type="number" name="tel" riquired></td>
        </tr>
        <tr>
           <td>email</td> <td><input type="email" name="email" riquired></td>
        </tr> 
        <tr>
           <td>Adresse</td> <td><input type="text" name="adresse" riquired></td>
        </tr><tr>
            <td>login</td><td><input type="text" name="login" riquired></td>
        </tr>
         <tr>
           <td>Password</td> <td><input type="password" name="pasword" riquired></td>
        </tr>
        <tr>
        <td><input type="submit" value="ajouter"></td>        </tr>
    </table>
</form>
@include('footer')
</body>
