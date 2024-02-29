<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>product</h1>

    <form action="{{route('estudiante.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <label>
       ingrese su nombre
        <br>
        <input type="texto" name="name">
    </label>
    <br>


    <label>
        ingrese el nombre del colegio
        <br>
        <input type="text" name="school">
    </label>
    <br>

    <label>
        ingrese el grado
        <br>
        <input type="number" name="grade">
    </label>
    <br>



    <label>
       ingrese el docente que desea evaluar
        <br>
        <input type="text" name="teacher">
    </label>
    <br>



    <button type="submit">Enviar Formulario:</button>
    </form>
</body>
</html>
