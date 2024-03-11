<?php
  $page_title = 'Lista de categorías';
  require_once('include/load.php');
  include_once('./consultas.php'); 
  // Checkin What level user has permission to view this page
  page_require_level(1);
  $products = join_product_table();



  $all_categories = find_all('categories')
?>

<?php
 if(isset($_POST['add_cat'])){
   $req_field = array('categorie-name');
   validate_fields($req_field);
   $cat_name = remove_junk($db->escape($_POST['categorie-name']));
   if(empty($errors)){
      $sql  = "INSERT INTO categories (name)";
      $sql .= " VALUES ('{$cat_name}')";
      if ($db->query($sql)) {
        $session->msg("s", "Categoría agregada exitosamente.");
        redirect(SITE_URL.'categorie.php', false);
      } else {
        $session->msg("d", "Lo siento, registro falló");
        redirect(SITE_URL.'categorie.php', false);
      }
   } else {
     $session->msg("d", $errors);
     redirect(SITE_URL.'categorie.php', false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <i class="glyphicon glyphicon-plus-sign"></i>
                    <span>Agregar categoría</span>
                </strong>
            </div>
            <div class="panel-body">
                <form method="post" action="categorie.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="categorie-name"
                            placeholder="Nombre de la categoría" required>
                    </div>
                    <button type="submit" name="add_cat" class="btn btn-primary">Agregar categoría</button>
                </form>
            </div>
        </div>
    </div>
    <?php foreach ($products as $product):?>
    <script>
    <?php 
          // Obtén los valores del producto
      $quantity = remove_junk($product['quantity']);
      $price = remove_junk($product['price']);

      // Realiza la multiplicación
      $resultado = $quantity * $price;
    ?>
    console.log('<?php echo $resultado; ?>');
    </script>
    <?php endforeach; ?>
    <div class="col-md-7">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <i class="glyphicon glyphicon-list"></i>
                    <span>Lista de categorías</span>
                </strong>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;"></th>
                            <th>Categorías</th>
                            <th class="text-center" style="width: 100px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
    // Array de colores hexadecimales
    $colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C8', '#D87093', '#6F87D8', '#FF9F40', '#55C500', '#8E7CC3', '#FFD700', '#5E72E4', '#FF5E3A', '#68B3C8', '#FFB6C1', '#7ED321'];

    foreach ($all_categories as $index => $cat): 
        // Obtener un color del array
        $currentColor = $colors[$index % count($colors)];
    ?>
                        <tr>
                            <td class="text-center"><?php echo count_id();?></td>
                            <td><?php echo remove_junk(ucfirst($cat['name']));?></td>
                            <td>
                                <div
                                    style="background-color: <?php echo $currentColor; ?>; width: 70px; height: 30px; border-radius: 15px;">
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="edit_categorie.php?id=<?php echo (int)$cat['id'];?>" data-toggle="tooltip"
                                        title="Editar">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a href="delete_categorie.php?id=<?php echo (int)$cat['id'];?>"
                                        data-toggle="tooltip" title="Eliminar"
                                        onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                    <!-- 
                    <script>
                    $(document).ready(function() {
                        // Array de colores hexadecimales
                        var colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C8', '#D87093', '#6F87D8',
                            '#FF9F40', '#55C500', '#8E7CC3', '#FFD700', '#5E72E4', '#FF5E3A', '#68B3C8',
                            '#FFB6C1', '#7ED321'
                        ];

                        // Iterar sobre cada celda con clase 'color-cell'
                        $('.color-cell').each(function() {
                            // Obtener un color aleatorio del array
                            var randomColor = colors[Math.floor(Math.random() * colors.length)];

                            // Aplicar el color al fondo de la celda
                            $(this).find('div').css('background-color', randomColor);
                        });
                    });
                    </script> -->

                </table>
            </div>
        </div>

    </div>

    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>
                    <i class="glyphicon glyphicon-graph"></i>
                    <span>Grafica</span>
                </strong>
            </div>
            <br>
            <br>
            <div style=" width: auto; height: 35px; display: flex; justify-content: space-around;">
                <button onclick="cargarScript('script1')" type="button" class="btn btn-primary">Monetario</button>
                <button onclick="cargarScript('script2')" type="button" class="btn btn-success">Cantidad de uso</button>
            </div>
            <br>
            <div style="height: 1px; background-color: #BFBFBF;"></div>
            <div id="graficoContainer" class='chart'>

                <canvas id="doughnutChart" width="400" height="400"></canvas>

                <script>
                // Definir datos fuera de la función cargarScript
                let datos;
                let opciones;
                let ctx;
                let donaChart;

                // Función para cargar el script según el botón presionado
                function cargarScript(scriptNombre) {
                    // Eliminar el gráfico existente si hay alguno
                    document.getElementById('graficoContainer').innerHTML = '<canvas id="doughnutChart"></canvas>';

                    // Eliminar el script anterior si hay alguno
                    let scriptsAnteriores = document.querySelectorAll('script[data-script]');
                    scriptsAnteriores.forEach(scriptAnterior => scriptAnterior.remove());


                    // Crear un nuevo script según el botón presionado
                    let nuevoScript = document.createElement('script');
                    nuevoScript.type = 'text/javascript';

                    if (scriptNombre === 'script1') {
                        datos = {
                            datasets: [{
                                data: [<?php echo floatval(suma_categorias_26($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_22($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_18($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_16($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_15($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_14($conexion)); ?>,
                                    <?php echo floatval(suma_categorias($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_20($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_17($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_19($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_23($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_25($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_21($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_24($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_27($conexion)); ?>
                                ],
                                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C8', '#D87093',
                                    '#6F87D8', '#FF9F40', '#55C500', '#8E7CC3', '#FFD700', '#5E72E4',
                                    '#FF5E3A', '#68B3C8', '#FFB6C1', '#7ED321'
                                ]
                            }]
                        };
                        opciones = {
                            cutoutPercentage: 50,
                            responsive: true,
                            maintainAspectRatio: false
                        };
                        ctx = document.getElementById('doughnutChart').getContext('2d');
                        donaChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: datos,
                            options: opciones
                        });
                    } else if (scriptNombre === 'script2') {
                        datos = {
                            datasets: [{
                                data: [<?php echo floatval(suma_categorias_26($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_22($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_18($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_16($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_15($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_14($conexion)); ?>,
                                    <?php echo floatval(suma_categorias($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_20($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_17($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_19($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_23($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_25($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_21($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_24($conexion)); ?>,
                                    <?php echo floatval(suma_categorias_27($conexion)); ?>
                                ],
                                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C8', '#D87093',
                                    '#6F87D8', '#FF9F40', '#55C500', '#8E7CC3', '#FFD700', '#5E72E4',
                                    '#FF5E3A', '#68B3C8', '#FFB6C1', '#7ED321'
                                ]
                            }]
                        };
                        opciones = {
                            cutoutPercentage: 50,
                            responsive: true,
                            maintainAspectRatio: false
                        };
                        ctx = document.getElementById('doughnutChart').getContext('2d');
                        donaChart = new Chart(ctx, {
                            type: 'doughnut',
                            data: datos,
                            options: opciones
                        });
                    }

                    nuevoScript.innerHTML = `
        // Configuración del gráfico
       

        // Obtén el contexto del lienzo
        

        // Crea el gráfico de dona
        
    `;

                    // Adjuntar el nuevo script al contenedor
                    document.getElementById('graficoContainer').appendChild(nuevoScript);
                }
                </script>

                <!-- Inicialmente, cargar el primer script por defecto -->
                <script>
                cargarScript('script1');
                </script>

                <script>

                </script>
            </div>
            <br>
            <br>

        </div>
    </div>

</div>

</div>
<?php include_once('layouts/footer.php'); ?>