<?php
  $page_title = 'Lista de productos';
  require_once('include/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
  include_once('./consultas_stats.php');
?>

<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "eb_v1_0_2";
 
 // Crea la conexión
 $conexion = new mysqli($servername, $username, $password, $dbname);
 
 // Verifica la conexión
 if ($conexion->connect_error) {
     die("La conexión falló: " . $conexion->connect_error);
 }
 
 /* Userform processing */
 if (isset($_GET['id'])) {
     // Obtén y limpia el valor del parámetro 'id'
     $id = (int)$_GET['id'];
 
     // Ahora puedes usar la variable $id como necesites
     echo "El valor de 'id' es: $id";
 } else {
     // Manejar la situación en la que no se proporciona el parámetro 'id'
     echo "El parámetro 'id' no está presente en la URL";
     exit; // Termina la ejecución si no hay parámetro 'id'
 }
 
 $consulta2 = "SELECT * FROM products WHERE categorie_id = '$id'";
 
 // Ejecutar la consulta
 $resultado2 = $conexion->query($consulta2);


 
 // Verificar si la consulta fue exitosa
 if (!$resultado2) {
     die("Error en la consulta: " . $conexion->error);
 }

$consulta3 = "SELECT name FROM categories WHERE id = '$id'" ;
$resultado3 = $conexion->query($consulta3);
$fila = $resultado3->fetch_assoc();

    // Accede a un índice específico, por ejemplo, el índice 'nombre'
    $valorDeseado = $fila['name'];

?>

<?php include_once('layouts/header.php'); ?>
<!-- carousel -->
<link rel="stylesheet" href="lib/css/carousel.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>
    <script>
    console.log("fsf");
    </script>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <span>Lista de Productos en <?php echo"$valorDeseado";?></span>
                <a href="add_product.php"><button type="button" class="btn btn-primary  btn-heading pull-right"
                        style="width: 6.5em" name="btn_new" id="btn_new">Nuevo</button></a>
                <button type="button" class="btn btn-primary pull-right" style="width: 6.5em" name="btn_update"
                    id="btn_update">Actualizar</button>

            </div>
            <div class="panel-body" style="padding:4%">
                <table class="table table-hover" id="tbl_products">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 10%"> ID </th>
                            <th class="text-center" style="width: 10%"> Imagen </th>
                            <th style="text-align: left;">COD/PartNo</th>
                            <th style="text-align: left;">Producto</th>
                            <th class="text-center" style="width: 10%;"> Categor&iacute;a </th>
                            <th style="text-align: left;">Fecha</th>
                            <!-- <th class="text-center" style="width: 10%;"> Subtotal </th> -->
                            <th class="text-center" style="width: 10%;"> Ubicación</th>
                            <th style="text-align: left;">Cantidad</th>
                            <th style="text-align: left;">Precio</th>
                            <th class="text-center" style="width: 10%;"> Total + ISV</th>
                            <th class="text-center"> Acciones </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Iterar sobre los resultados
                        while ($product = $resultado2->fetch_assoc()):
                        ?>
                        <tr id="<?php echo $product['id'];?>">
                            <td class="text-center" style="font-size: 110%; vertical-align: middle">
                                <?php echo count_id();?></td>
                            <td class="text-center" name="image" id="<?php echo 'img_id_'.$product['id'];?>">
                                <?php if($product['media_id'] === 0): ?>
                                <img class="img-avatar img-circle" src="uploads/products/no_image.jpg" alt="">
                                <?php else: ?>
                                <img class="img-avatar" src="uploads/products/<?php echo $product['media_id']; ?>"
                                    alt="">
                                <?php endif;?>
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo $product['partNo'];?></td>
                            <td style="vertical-align: middle"> <?php echo remove_junk($product['name']); ?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo $valorDeseado;?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo read_date($product['date']); ?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo remove_junk($product['location']);?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo remove_junk($product['quantity']);?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo remove_junk($product['price']);?></td>
                            <td>Total</td>

                            <td class="text-center" style="vertical-align: middle">
                                <div class="btn-group">
                                    <a href="edit_product.php?id=<?php echo (int)$product['id'];?>"
                                        data-toggle="tooltip" data-placement="top" title="editar">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a>
                                    <a href="delete_product.php?id=<?php echo (int)$product['id'];?>"
                                        data-toggle="tooltip" title="eliminar"
                                        onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <br>
                <h3>Grafica que representa los valores de la categoria: <?php echo $valorDeseado;?></h3>
                <br>
                <button id="botonScript1" type="button" class="btn btn-primary">Monetario</button>
                <button id="botonScript2" type="button" class="btn btn-success">Cantidad de uso</button>
                <br>
                <div class='chart'>
                    <canvas id="doughnutChart" width="400" height="400"></canvas>

                    <script>
                    // Script 1
                    var script1 = function() {
                        var datos = {
                            datasets: [{
                                data: [
                                    <?php
                    $resultados = total_cantidad_categorias($conexion, $id);
                    echo implode(', ', $resultados['operaciones']);
                    ?>
                                ],
                                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C8', '#D87093',
                                    '#6F87D8', '#FF9F40', '#55C500', '#8E7CC3', '#FFD700',
                                    '#5E72E4',
                                    '#FF5E3A', '#68B3C8', '#FFB6C1', '#7ED321'
                                ]
                            }]
                        };

                        var opciones = {
                            cutoutPercentage: 50,
                            responsive: true,
                            maintainAspectRatio: false
                        };

                        var ctx = document.getElementById('doughnutChart').getContext('2d');

                        // Destruye el gráfico anterior si ya existe
                        if (window.donaChart) {
                            window.donaChart.destroy();
                        }

                        window.donaChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: datos,
                            options: opciones
                        });
                    };

                    var script2 = function() {
                        var datos = {
                            datasets: [{
                                data: [
                                    <?php
            $resultados = suma_categorias($conexion, $id);

            // Obtén los valores de la columna 'quantity' de cada registro
            $cantidades = array_column($resultados, 'quantity');

            // Imprime los valores como una cadena separada por comas
            echo implode(', ', $cantidades);
            ?>
                                ],
                                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C8', '#D87093',
                                    '#6F87D8', '#FF9F40', '#55C500', '#8E7CC3', '#FFD700',
                                    '#5E72E4', '#FF5E3A', '#68B3C8', '#FFB6C1', '#7ED321'
                                ]
                            }]
                        };

                        var opciones = {
                            cutoutPercentage: 50,
                            responsive: true,
                            maintainAspectRatio: false
                        };

                        var ctx = document.getElementById('doughnutChart').getContext('2d');

                        // Destruye el gráfico anterior si ya existe
                        if (window.donaChart) {
                            window.donaChart.destroy();
                        }

                        window.donaChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: datos,
                            options: opciones
                        });
                    };

                    // Asigna el evento click al botón para mostrar el Script 1
                    document.getElementById('botonScript1').addEventListener('click', script1);
                    document.getElementById('botonScript2').addEventListener('click', script2);

                    // Simula el clic inicial para mostrar el primer script al cargar la página
                    script1();
                    script2();
                    </script>



                </div>
            </div>
        </div>
    </div>
</div>

<!-- This is the jQuery script for background of this page -->
<script type="text/javascript" src="lib/js/products.js"></script>

<?php include_once('layouts/footer.php'); ?>