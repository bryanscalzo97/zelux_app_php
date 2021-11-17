<?php
/**
 * Obtiene todas las noticias.
 *
 * @return Producto[]
 */
function productosTodos(): array {
    // Levantamos el contenido del archivo de noticias.json.
    $filename       = __DIR__ . '/../data/productos.json';
    $json           = file_get_contents($filename);
    $productosData   = json_decode($json, true);

//    echo "<pre>";
//    print_r($noticiasData);
//    echo "</pre>";

    // Convertimos ese array de arrays en un array de Noticias.
    // Podemos hacerlo de diferentes formas.
    // 1. Haciéndolo manualmente con un foreach.
    $salida = [];

    foreach($productosData as $producto) {
//        $noticiaObj = new Noticia;
//        $noticiaObj->noticia_id         = $noticia['noticia_id'];
//        $noticiaObj->titulo             = $noticia['titulo'];
//        $noticiaObj->sinopsis           = $noticia['sinopsis'];
//        $noticiaObj->texto              = $noticia['texto'];
//        $noticiaObj->imagen             = $noticia['imagen'];
//        $noticiaObj->imagen_descripcion = $noticia['imagen_descripcion'];
//        $salida[] = $noticiaObj;
        // 2. Separando la lógica de creación a una función.
//        $noticiaObj = noticiasArrayAObjeto($noticia);
        $productoObj = new Producto;
        $productoObj->loadDataFromArray($producto);
//        $noticiaObj->cargarDataDelArray($noticia);
        $salida[] = $productoObj;
    }

    return $salida;
}

/*
 * Transforma un array de datos con las claves de una noticia a un objeto Noticia.
 *
 * @param array $data
 * @return Noticia
 */
//function noticiasArrayAObjeto(array $data): Noticia {
//    $noticiaObj = new Noticia;
//    $noticiaObj->loadDataFromArray($data);
//    return $noticiaObj;
//}

// Vamos a hacer un "type hint" de lo que el parámetro $id debe ser y lo que la función retorna.
// "type hint" significa que le aclaramos en la definición de la función los tipos de datos
// correspondientes. Al hacerlo, php puede verificar al ejecutar la función que todos los valores
// tengan los tipos de dato correctos.
// En algunos casos eso puede incluir auto-castear el valor, y muy comúnmente, suele simplemente
// informarnos de errores con los tipos de dato en los parámetros.
// En los parámetros, el tipo de dato se indica delante del parámetro.
// Para el retorno de la función, escribimos después de los paréntesis ":" seguido del tipo de dato.
// Si alguno de los valores o el retorno pueden aceptar además el valor null, podemos indicarlo
// prefijando al tipo de dato un "?" (sin comillas).
/**
 * Retorna la noticia con el id $id.
 * De no existir, retorna null.
 *
 * @param int $id
 * @return Producto|null
 */
function productosTraerPorId(int $id): ?Producto {
    $productos = productosTodos();

    foreach($productos as $producto) {
        if($producto->getProductoId() === $id) {
            return $producto;
        }
    }

    // Si no encontramos la noticia, y por extensión no salimos con el return anterior,
    // entonces retornamos null.
    return null;
}
