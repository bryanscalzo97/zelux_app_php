<?php

/**
 * Obtiene las rutas del sitio.
 * Las rutas están ordenadas en un array asociativo donde cada ruta está indica como la "key" del array.
 * Como valor de cada key, hay otro array con los datos propios de esa ruta, como por ejemplo el "title".
 * Ej:
 *      [
 *          'home' => [
 *              'title' => 'Página principal',
 *              ...
 *          ],
 *          ...
 *      ]
 *
 * @return string[][]
 */
function getRutasSitio()
{
    return [
        'home' => [
            'title' => 'Página principal',
        ],
        'productos' => [
            'title' => 'Últimas noticias',
        ],
        'productos-leer' => [
            'title' => 'Leer noticia',
        ],
        'contacto' => [
            'title' => 'Iniciar sesión',
        ],

        '404' => [
            'title' => 'Página no encontrada',
        ],
    ];
}
