<?php

class Producto
{
    /** @var int */
    protected $producto_id;

    /** @var string */
    protected $titulo;

    /** @var string */
    protected $intro;

    /** @var string */
    protected $texto;

    /** @var int */
    protected $precio_inicial;

    /** @var int */
    protected $precio_descuento;

    /** @var int */
    protected $img;

    /** @var int */
    protected $alt;


    /**
     * Carga los datos del array $data en las propiedades equivalentes de la clase.
     *
     * @param array $data
     */
    public function loadDataFromArray(array $data): void
    {
        $this->setProductoId($data['producto_id']);
        $this->setTitulo($data['titulo']);
        $this->setIntro($data['intro']);
        $this->setTexto($data['texto']);
        $this->setPrecioInicial($data['precio_inicial']);
        $this->setPrecioDescuento($data['precio_descuento']);
        $this->setImg($data['img']);
        $this->setAlt($data['alt']);
    }

    /**
     * @return int
     */
    public function getProductoId(): int
    {
        return $this->producto_id;
    }

    /**
     * @param int $producto_id
     */
    public function setProductoId(int $producto_id): void
    {
        $this->producto_id = $producto_id;
    }


    /**
     * @return string
     */
    public function getTitulo(): string
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return string
     */
    public function getIntro(): string
    {
        return $this->intro;
    }

    /**
     * @param string $intro
     */
    public function setIntro(string $intro): void
    {
        $this->intro = $intro;
    }

    /**
     * @return string
     */
    public function getTexto(): string
    {
        return $this->texto;
    }

    /**
     * @param string $texto
     */
    public function setTexto(string $texto): void
    {
        $this->texto = $texto;
    }


    /**
     * @return int
     */
    public function getPrecioInicial(): int
    {
        return $this->precio_inicial;
    }

    /**
     * @param int $precio_inicial
     */
    public function setPrecioInicial(int $precio_inicial): void
    {
        $this->precio_inicial = $precio_inicial;
    }

    /**
     * @return int
     */
    public function getPrecioDescuento(): int
    {
        return $this->precio_descuento;
    }

    /**
     * @param int $precio_descuento
     */
    public function setPrecioDescuento(int $precio_descuento): void
    {
        $this->precio_descuento = $precio_descuento;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * @param string $img
     */
    public function setImg(string $img): void
    {
        $this->img = $img;
    }


    /**
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     */
    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
    }

}