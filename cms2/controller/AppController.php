<?php

namespace App\Controller;

use App\Model\Contenido;
use App\Helper\ViewHelper;
use App\Helper\DbHelper;


class AppController
{
    var $db;
    var $view;

    function __construct()
    {
        //Conexión a la BBDD
        $dbHelper = new DbHelper();
        $this->db = $dbHelper->db;

        //Instancio el ViewHelper
        $viewHelper = new ViewHelper();
        $this->view = $viewHelper;
    }

    public function index(){

        //Consulta a la bbdd
        $rowset = $this->db->query("SELECT * FROM contenidos WHERE activo=1 AND home=1 ORDER BY fundacion DESC");

        //Asigno resultados a un array de instancias del modelo
        $noticias = array();
        while ($row = $rowset->fetch(\PDO::FETCH_OBJ)){
            array_push($noticias,new Contenido($row));
        }

        //Llamo a la vista
        $this->view->vista("app", "index", $noticias);
    }

    public function acercade(){

        //Llamo a la vista
        $this->view->vista("app", "acerca-de");

    }

    public function noticias(){

        //Consulta a la bbdd
        $rowset = $this->db->query("SELECT * FROM contenidos WHERE activo=1 ORDER BY fundacion DESC");

        //Asigno resultados a un array de instancias del modelo
        $noticias = array();
        while ($row = $rowset->fetch(\PDO::FETCH_OBJ)){
            array_push($noticias,new Contenido($row));
        }

        //Llamo a la vista
        $this->view->vista("app", "noticias", $noticias);

    }

    public function noticia($slug){

        //Consulta a la bbdd
        $rowset = $this->db->query("SELECT * FROM contenidos WHERE activo=1 AND slug='$slug' LIMIT 1");

        //Asigno resultado a una instancia del modelo
        $row = $rowset->fetch(\PDO::FETCH_OBJ);
        $noticia = new Contenido($row);

        //Llamo a la vista
        $this->view->vista("app", "noticia", $noticia);

    }
}