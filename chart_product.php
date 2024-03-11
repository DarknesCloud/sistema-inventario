<?php
  $page_title = 'Lista de productos';
  require_once('include/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
  $products = join_product_table();
?>

<?php
  /* Userfom processing */
  if (isset($_POST['method'])) {
    if ($_POST['method'] == "update") {
      if (!isset($_POST['data'])) {
        /* no redirect, just exit, as it will be reloaded via JavaScript */
        exit;
      }

      foreach ($_POST['data'] as $item) {
        $p_id  = $item['id'];
        $p_qty = $item['quantity'];

        if (is_numeric($p_id) && is_numeric($p_qty) && $p_id > 0) {
          update_product_qty($p_id, $p_qty);
        }
      }
      exit;
    }
  }
?>

<?php include_once('layouts/header.php'); ?>
<!-- carousel -->
<link rel="stylesheet" href="lib/css/carousel.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="row">
    <div class="col-md-12">
        <?php echo display_msg($msg); ?>
    </div>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading clearfix">
                <span>Lista de Productos</span>
                <a href="add_product.php"><button type="button" class="btn btn-primary  btn-heading pull-right"
                        style="width: 6.5em" name="btn_new" id="btn_new">Nuevo</button></a>
                <button type="button" class="btn btn-primary pull-right" style="width: 6.5em" name="btn_update"
                    id="btn_update">Actualizar</button>

            </div>
            <div class="panel-body" style="padding:4%">
                <table class="table table-hover" id="tbl_products">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 2em;"></th>
                            <th class="text-center" style="width: 10%"> Imagen </th>
                            <th style="text-align: left;">COD/PartNo</th>
                            <th style="text-align: left;">Nombre</th>
                            <th style="text-align: left;">Fecha</th>
                            <th style="text-align: left;">Producto</th>
                            <th style="text-align: left;">Descripcion</th>
                            <th class="text-center" style="width: 10%;"> Categor&iacute;a </th>
                            <th class="text-center" style="width: 10%;"> Precio </th>
                            <th class="text-center" style="width: 10%;"> Subtotal </th>
                            <th class="text-center" style="width: 10%;"> Total </th>
                            <th class="text-center"> Acciones </th>
                        </tr>
                    </thead>
                    <!-- <tbody>
                        <?php foreach ($products as $product):?>
                        <tr id="<?php echo 'p_id_'.$product['id'];?>">
                            <td class="text-center" style="font-size: 110%; vertical-align: middle">
                                <?php echo count_id();?></td>
                            <td class="text-center" name="image" id="<?php echo 'img_id_'.$product['id'];?>">
                                <?php if($product['media_id'] === 0): ?>
                                <img class="img-avatar img-circle" src="uploads/products/no_image.jpg" alt="">
                                <?php else: ?>
                                <img class="img-avatar" src="uploads/products/<?php echo $product['image']; ?>" alt="">
                                <?php endif;?>
                            </td>
                            <td style="vertical-align: middle"> <?php echo remove_junk($product['name']); ?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo remove_junk($product['description']);?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo remove_junk($product['state']);?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo remove_junk($product['partNo']);?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo remove_junk($product['categorie']);?></td>

                            <td class="text-center" style="vertical-align: middle;"> <input type="number"
                                    class="form-control"
                                    style="width: 5em; margin:auto; text-align: center; font-size: 110%; font-weight:bold; background-color: #808080; color: white; padding: 5%; padding-right: 0;"
                                    name="quantity" id="<?php echo 'q_id_'.$product['id'];?>"
                                    value="<?php echo $product['quantity'];?>"></td>

                            <td class="text-center" style="vertical-align: middle">
                                <?php echo remove_junk($product['location']);?>
                            </td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo read_date($product['date']); ?></td>
                            <td class="text-center" style="vertical-align: middle">
                                <?php echo read_date($product['date']); ?></td>

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
                        <?php endforeach; ?>
                    </tbody> -->
                </table>
                <br>
                <h1>Grafica</h1>

                <div class='chart'>
                    <canvas id="doughnutChart" width="400" height="400"></canvas>

                    <script>
                    // Datos de ejemplo
                    var datos = {
                        labels: ['Categoría 1', 'Categoría 2', 'Categoría 3'],
                        datasets: [{
                            data: [30, 50, 20], // Valores para cada categoría
                            backgroundColor: ['#FF6384', '#36A2EB',
                                '#FFCE56'
                            ] // Colores de fondo para cada categoría
                        }]
                    };

                    // Configuración del gráfico
                    var opciones = {
                        cutoutPercentage: 50, // Porcentaje de recorte para hacer un gráfico de dona
                        responsive: true,
                        maintainAspectRatio: false
                    };

                    // Obtén el contexto del lienzo
                    var ctx = document.getElementById('doughnutChart').getContext('2d');

                    // Crea el gráfico de dona
                    var donaChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: datos,
                        options: opciones
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- This is the jQuery script for background of this page -->
<script type="text/javascript" src="lib/js/products.js"></script>

<?php include_once('layouts/footer.php'); ?>