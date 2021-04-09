<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Proyecto Final</title>
</head>
<body style="background-color:#C7FFFF;">
<br>
<div class="container">
    <h3>Registro ITSSNA</h3>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Numero de Control</label>
            <input type= "text" class="form-control" value="" name="nc"/>
       </div>
        <div class="mb-3">
            <label class="form-label">Nombre Completo</label>
            <input type= "text" class="form-control" value="" name="nomc"/>

        </div>
        <div class="mb-3">
            <label class="form-label">Correo Electrónico</label>
            <input type= "text" class="form-control" value="" name="correo"/>
       </div>
        <div class="mb-3">
            <label class="form-label">Direccion</label>
            <input type= "text" class="form-control" value="" name="direccion"/>
        </div>
        <div class="mb-3">
            <label class="form-label">CURP</label>
            <input type= "text" class="form-control" value="" name="curp"/>
        </div>
        <div class="mb-3">
            <label class="form-label">Año de Nacimiento</label>
            <input type= "text" class="form-control" value="" name="año"/>
        </div>
        <div class="mb-3">
            <label class="form-check-label">Ingenieria a cursar</label>
            <select class="form-select" name="ingenieria">
                <option value="IngS">Ingenieria en Sistemas Computacionales</option>
                <option value="IngI">Ingenieria Industrial</option>
                <option value="IngA">Ingenieria en Administración</option>
                <option value="IngE">Ingenieria Electromecánica</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar"/>
    </form>
</div>

<br/>
<div class="container">
    <?php
        if($_POST){

            $ing = $_REQUEST['ingenieria'];
            $nombrec = $_REQUEST['nomc'];
            $numeroc = $_REQUEST['nc'];
            $corr = $_REQUEST['correo'];
            $cur = $_REQUEST['curp'];
            $añ = $_REQUEST['año'];

            switch($ing){
                case 'IngS':
                    $resultado;
                    $edad;
                    echo "<h7><b>BIENVENIDO</b> al semestre 2021 es un placer tenerte como alumno de la carrera de <b>Ingenieria en Sistemas Computacionales</b> tu cordinador es el <b>ING. VÍCTOR CÉSAR OLGUÍN ZÁRATE</b> favor de presentarte con el para mas datos.</h7><br><br>"; 
                    echo "<h5>Tu credencial quedara de la siguiente manera:</h5>"; 
                    echo "<h7><b>Nombre:</b> ".$nombrec." </h7><br>";
                    echo "<h7><b>Numero de control:</b> ".$numeroc." </h7><br>";
                    echo "<h7><b>Correo:</b> ".$corr." </h7><br>";
                    echo "<h7><b>Correo Institucional:</b> ".$resultado = substr(".$cur.", 1, 6)."@sistemas.tecnm.mx </h7><br>"; 
                    $edad = 2021 - $añ; 
                    echo "<h7><b>Edad:</b> ".$edad." años </h7><br>";
                    
                break;
                case 'IngI':
                    $resultado;
                    $edad;
                    echo "<h7><b>BIENVENIDO</b> al semestre 2021 es un placer tenerte como alumno de la carrera de <b>Ingenieria Industrial</b> tu cordinador es el <b>M.C. MANUEL AGUILAR CISNEROS</b> favor de presentarte con el para mas datos.</h7><br><br>"; 
                    echo "<h5>Tu credencial quedara de la siguiente manera:</h5>"; 
                    echo "<h7><b>Nombre:</b> ".$nombrec." </h7><br>";
                    echo "<h7><b>Numero de control:</b> ".$numeroc." </h7><br>";
                    echo "<h7><b>Correo:</b> ".$corr." </h7><br>";
                    echo "<h7><b>Correo Institucional:</b> ".$resultado = substr(".$cur.", 1, 6)."@industrial.tecnm.mx </h7><br>";
                    $edad = 2021 - $añ; 
                    echo "<h7><b>Edad:</b> ".$edad." años </h7><br>";

                break;
                case 'IngA':
                    $resultado;
                    $edad;
                    echo "<h7><b>BIENVENIDO</b> al semestre 2021 es un placer tenerte como alumno de la carrera de <b>Ingeniería en Administración</b> tu cordinadora es la <b>MTRA. GABRIELA SELENE MARTINEZ RUIZ</b> favor de presentarte con el para mas datos.</h7><br><br>"; 
                    echo "<h5>Tu credencial quedara de la siguiente manera:</h5>"; 
                    echo "<h7><b>Nombre:</b> ".$nombrec." </h7><br>";
                    echo "<h7><b>Numero de control:</b> ".$numeroc." </h7><br>";
                    echo "<h7><b>Correo:</b> ".$corr." </h7><br>";
                    echo "<h7><b>Correo Institucional:</b> ".$resultado = substr(".$cur.", 1, 6)."@administración.tecnm.mx </h7><br>";
                    $edad = 2021 - $añ; 
                    echo "<h7><b>Edad:</b> ".$edad." años </h7><br>"; 
                break;
                case 'IngE':
                    $resultado;
                    $edad;
                    echo "<h7><b>BIENVENIDO</b> al semestre 2021 es un placer tenerte como alumno de la carrera de <b>Ingeniería Electromecánica</b> tu cordinador es el <b>ING.RENÉ VALERIO PÉREZ</b> favor de presentarte con el para mas datos.</h7><br><br>"; 
                    echo "<h5>Tu credencial quedara de la siguiente manera:</h5>"; 
                    echo "<h7><b>Nombre:</b> ".$nombrec." </h7><br>";
                    echo "<h7><b>Numero de control:</b> ".$numeroc." </h7><br>";
                    echo "<h7><b>Correo:</b> ".$corr." </h7><br>";
                    echo "<h7><b>Correo Institucional:</b> ".$resultado = substr(".$cur.", 1, 6)."@electromecánica.tecnm.mx </h7><br>"; 
                    $edad = 2021 - $añ; 
                    echo "<h7><b>Edad:</b> ".$edad." años </h7><br>";
                break;
            }
        }
    ?>

<br>
</div>
</body>
</html>