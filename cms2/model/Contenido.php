<?php

namespace App\Model;

class Contenido
{
//Variables o atributos
    var $id;
    var $equipo;
    var $slug;
    var $entradilla;
    var $texto;
    var $activo;
    var $home;
    var $fundacion;
    var $entrenador;
    var $imagen;

    function __construct($data=null){

        $this->id = ($data) ? $data->id : null;
        $this->equipo = ($data) ? $data->equipo : null;
        $this->slug = ($data) ? $data->slug : null;
        $this->entradilla = ($data) ? $data->entradilla : null;
        $this->texto = ($data) ? $data->texto : null;
        $this->activo = ($data) ? $data->activo : null;
        $this->home = ($data) ? $data->home : null;
        $this->fundacion = ($data) ? $data->fundacion : null;
        $this->entrenador = ($data) ? $data->entrenador : null;
        $this->imagen = ($data) ? $data->imagen : null;

    }
}