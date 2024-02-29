<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>product1</h1>

    <form action="{{route('usuario.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>
       ingrese el nombre del usuario
        <br>
        <input type="texto" name="name">
    </label>
    <br>


    <label>
        ingrese la edad del usuario
        <br>
        <input type="number" name="edad">
    </label>
    <br>

    <label>
        ingrese el telefono del usuario
        <br>
        <input type="number" name="telefono">
    </label>
    <br>

    <label>
        ingrese la ciudad del usuario
        <br>
        <input type="text" name="ciudad">
    </label>
    <br>




    <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>
