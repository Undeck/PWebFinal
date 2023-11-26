<?php
require "conexion.php";
mysqli_set_charset($conexion,'utf8');


//genear el query
$consulta_sql="SELECT * FROM usuarios";

//mandar el query por medio de la conexion y almacenaremos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado); 
 
echo "<table border='2' >
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>No Cuenta Institucional</th>
        <th>email</th>
        <th>Password</th>
        <th>Telefono</th>

    
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['nombre'] ."</td>";
     echo"<td>". $row['usuario'] ."</td>";
     echo"<td>". $row['no_cuenta'] ."</td>";
     echo"<td>". $row['email'] ."</td>";
     echo"<td>". $row['pass'] ."</td>";
     echo"<td>". $row['numero'] ."</td>";
    





     echo "</tr>";
     
    }
    echo "</table>";

}else{
    
    
    echo"<h1 style='color:red' >Sin Ningun registro</h1>";
    }

    echo "<h1><a href='EliminarUsuario.php'>ElimnarUsuario</a></h1>";

?>
