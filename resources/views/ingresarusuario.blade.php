<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consultas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>

</head>
<body>
<div class="flex-center position-ref full-height">
    <br>
    <form method='post' action="./ingresaemployee" >
     {{csrf_field()}}
 
    
    <h1>Registrar nuevo usuario</h1>
    <div class="form-group">
        <label for="fname">Escriba su nombre:</label><br>
        <input type="text" id="fname" name="fname" value="Joseluis">
    </div>

    <div class="form-group">
        <label for="lname">Escriba su Apellido:</label><br>
        <input type="text" id="lname" name="lname" value="Pabon">
    </div>

    <div class="form-group">
        <label for="birthdate">Fecha de Nacimiento:</label><br>
        <input type="text" id="birthdate" name="birthdate" value="1983-05-10">
    </div>

    <div class="form-group">
        <label for="hirehdate">Fecha de Nacimiento:</label><br>
        <input type="text" id="hiredate" name="hiredate" value="1993-05-10">
    </div>

    <div class="form-group">
        <label for="gender">Genero M F O:</label><br>
        <input type="text" id="gender" name="gender" value="M">
    </div>

    <div class="form-group">
        <input type="submit" value="Submit">
    </div>

    

    @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </form> 
</div>
<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  if(x == 'titles'){
    document.getElementById("id_emp").style.display="";
    document.getElementById("min").style.display="none";
    document.getElementById("max").style.display="none";
  }else{
    document.getElementById("id_emp").style.display="none";
    document.getElementById("min").style.display="";
    document.getElementById("max").style.display="";
  }
  
}
</script>
</body>
</html>