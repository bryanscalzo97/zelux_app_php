<?php

require_once __DIR__ . '/../bibliotecas/productos.php';


$idProducto = (int) $_GET['id'];
$producto = productosTraerporId($idProducto);
?>

<article class=" container col-12" id="prodleer">
    <div class="container-prod row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col-4">
            <img class="img1" style="width: auto; height: auto;" src="./imgs/<?= $producto->getImg();?>" alt="<?= $producto->getAlt();?>">
        </div>
        <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0 titulo1"><?= $producto->getTitulo();?></h3>
            <p class="card-text mb-auto"><?= $producto->getIntro();?></p>
            <div class="row seccion-precio">
                <div class="col-sm-12 col-md-6">
                    <del>$<?= $producto->getPrecioInicial();?></del><p>$<?= $producto->getPrecioDescuento();?></p>
                </div>
                <div class="col-sm-12 col-md-6">
                    <a class="botoncomprar" href="#">Añadir al carrito</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 description">
                <h4>Descripción:</h4>
                <p class="card-text mb-auto"><?= $producto->getTexto();?></p>
            </div>

        </div>
    </div>


</article>





















