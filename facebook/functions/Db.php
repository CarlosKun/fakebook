<?php
/**
 * Created by PhpStorm.
 * User: webpro1-vdpflm
 * Date: 18/05/2017
 * Time: 15:44
 */

Class Db{

    private $servidor='sandbox.villagroupresorts.com';
    private $usuario='villacom_corp_u';
    private $password='VI9ZZIzueE16';
    private $base_datos='villacom_vgr_corp';
    private $link;
    private $sql;
    private $row;
    private $data;
    private $promos = [];


    static $_instance;

    /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
    private function __construct(){
        $this->conectar();
    }

    /*Evitamos el clonaje del objeto. Patrón Singleton*/
    private function __clone(){ }

//    /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
    public static function getInstance(){
        if (!(self::$_instance instanceof self)){
            self::$_instance=new self();
        }
        return self::$_instance;
    }

    /*Realiza la conexión a la base de datos.*/
    private function conectar(){
        $this->link=mysqli_connect($this->servidor, $this->usuario, $this->password);
        mysqli_select_db($this->link,$this->base_datos);
    }

    /*Método para ejecutar una sentencia sql*/
    public function getPromos($key){
        $this->promos = [];
        $this->sql = "SELECT itemJSON FROM vgr_content_items WHERE itemSearch Like '%$key%' AND itemRev=(Select MAX(itemRev) FROM vgr_content_items WHERE itemSearch LIKE '%$key%') ORDER BY vgr_content_items.itemID DESC";
        $this->row = mysqli_query($this->link, $this->sql);
        //$this->data = mysqli_fetch_assoc($this->row);
        while ($this->data = mysqli_fetch_array($this->row, MYSQLI_NUM)){
            array_push($this->promos,json_decode($this->data[0], true));
        }
        return $this->promos;
    }

    /* Metodo para saber si esta en fechas habiles  */
    public function validateDays($start_date, $end_date, $date){
        $dias = (strtotime($end_date) - strtotime($date)) / 86400;
        $dias_start = ($start_date) - strtotime($date) / 86400;
        $dias = floor($dias);
        return array($dias_start, $dias);
    }

    public function Login(){
        if ( !isset($_COOKIE['token']) AND !isset($_GET['token']) )
            return true;
    }

    public function validatePromo($title){
        if($title == 'It´s your call' || $title == '¡Aprovecha!'){
            return false;
        }else{
            return true;
        }
    }

}