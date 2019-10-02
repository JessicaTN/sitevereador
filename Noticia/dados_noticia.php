<?php

Class DadosNoticia{
    private $idnoticias;
    private $titulo_da_noticia;
    private $foto;
    private $data;
    private $texto;
    
    
   /* function __construct($idnoticias, $titulo_da_noticia, $foto, $data, $texto) {
        $this->idnoticias = $idnoticias;
        $this->titulo_da_noticia = $titulo_da_noticia;
        $this->foto = $foto;
        $this->data = $data;
        $this->texto = $texto;
    }*/
    
    function getIdnoticias() {
        return $this->idnoticias;
    }

    function getTitulo_da_noticia() {
        return $this->titulo_da_noticia;
    }

    function getFoto() {
        return $this->foto;
    }

    function getData() {
        return $this->data;
    }

    function getTexto() {
        return $this->texto;
    }

    function setIdnoticias($idnoticias) {
        $this->idnoticias = $idnoticias;
    }

    function setTitulo_da_noticia($titulo_da_noticia) {
        $this->titulo_da_noticia = $titulo_da_noticia;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }



    
    
}

