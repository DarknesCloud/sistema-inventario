<?php

// Datos de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = "";
$nombre_bd = "eb_v1_0_2";

// Conexión a la base de datos
$conexion = new mysqli($host, $usuario, $contrasena, $nombre_bd);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

function suma_categorias($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}
// ***********************************************************************************

function suma_categorias_14($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '14'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_14($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_15($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '15'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_15($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_16($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '16'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_16($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_17($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '17'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_17($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_18($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '18'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_18($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_19($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '19'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_19($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_20($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '20'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_20($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_21($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '21'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_21($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '13'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_22($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '22'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_22($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '22'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_23($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '23'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_23($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '23'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_24($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '24'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_24($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '24'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_25($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '25'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_25($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '25'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_26($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '26'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_26($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '26'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************

function suma_categorias_27($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '27'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // echo $resultado['price']*$resultado['quantity']."<br>";
        $suma_quantity += $resultado['quantity'];
    }
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity;
}

function total_cantidad_categorias_27($conexion){
    // Ejemplo de consulta SQL
$consulta = "SELECT name,quantity, price FROM products WHERE categorie_id = '26'";

// Ejecutar la consulta
$resultado = $conexion->query($consulta);

$suma_quantity_price = 0;
$isv = 0;

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Obtener los resultados
    foreach($resultado as $resultado){
        // echo $resultado['name']."  /";
        // echo $resultado['quantity']."  /";
        // echo $resultado['price']."<br>";
        // $suma_quantity += $resultado['quantity'];
        $suma_quantity_price = $resultado['price']*$resultado['quantity']."<br>";
    }
    $isv = floatval($suma_quantity_price) * 0.15;
    $suma_quantity_price = floatval($suma_quantity_price) + $isv;
// echo "<br><br><br>".$suma_quantity;
    // Liberar el resultado
} else {
    echo "Error en la consulta: " . $conexion->error;
}
 return $suma_quantity_price;
}

// ***********************************************************************************
// echo suma_categorias($conexion)."<br>";
// echo suma_categorias_14($conexion)."<br>";

// echo total_cantidad_categorias($conexion);
// Cerrar la conexión
// $conexion->close();



?>