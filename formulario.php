
<?php 
    /*aqui incluimos la conexion*/
    include("conexion.php");
    /*aqui traemos los datos pedidos en el formulario html*/
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    /*insertamos los datos de las variables en el servidor*/
    $insertar= "INSERT INTO tblprueba(nombres, apellidos) values ('$nombre', '$apellido')";
    if ($mysqli->query($insertar) === true){
        echo "somos los putos amos";
    }
    else {
        echo "la cagamos:";
    }
    echo "<br>";
    /*imprimimos los datos recolectados*/
    $mitabla = "SELECT * FROM tblprueba ";
    $resultado = mysqli_query($mysqli, $mitabla);
    while($row=mysqli_fetch_assoc($resultado)){
        echo $row["id"]."<br>";
        echo $row["nombres"]."<br>";
        echo $row["apellidos"]."<br>";
    }

    $mitabla3 = "DELETE * from tblprueba";
    
    $insertar= "UPDATE * FROM "
    
    date("h:i a"); // para la hora

?>
