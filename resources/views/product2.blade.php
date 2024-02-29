<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>product2</h1>

    <form action="{{route('profesor.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>
       ingrese su nombre
        <br>
        <input type="texto" name="name">
    </label>
    <br>


    <label>
        ingrese su clave
        <br>
        <input type="text" name="code">
    </label>
    <br>

    <label>
        confirmar clave
        <br>
        <input type="text" name="confirmation">
    </label>
    <br>



    <label>
       ingrese la empresa
        <br>
        <input type="text" name="company">
    </label>
    <br>


    <label>
        ingrese el telefono
         <br>
         <input type="number" name="phone">
     </label>
     <br>




    <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>
