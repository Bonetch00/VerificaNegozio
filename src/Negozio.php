<?php

require_once "OrdineNegozio.php";
require_once "OrdineOnline.php";
require_once "Articolo.php";
require_once "Articolo_venduto.php";


class Negozio implements JsonSerializable{
    protected $nome;
    protected $telefono;
    protected $indirizzo;
    protected $url;
    protected $p_iva;
    protected $ordini=[];
    protected $articoli=[];
    protected $articoli_venduti=[];

    public function __construct($nome,$telefono,$indirizzo,$url,$p_iva,$ordini,$articoli,$articoli_venduti){
        $this->nome=$nome;
        $this->telefono=$telefono;
        $this->indirizzo=$indirizzo;
        $this->url=$url;
        $this->p_iva=$p_iva;
        if($ordini!=null){
            $this->ordini=$ordini;
        }
        if($articoli!=null){
            $this->articoli=$articoli;
        }
        if($articoli_venduti!=null){
            $this->articoli_venduti=$articoli_venduti;
        }
    }

    public function getArticoli(){
        return $this->articoli;
    }

    public function getArticolo($identificativo)
    {
        $a= null;
        foreach ($this->articoli as $ar) {
            if ($ar->getIdentificativo() == $identificativo) {
                $a = $ar;
            }
        }
        return $a;
    }

    public function getOrdini(){
        return $this->ordini;
    }

    public function popola(){

        
        
        $o=new OrdineNegozio(1,"01/02/2024",,"contanti",$articoli_venduti);


        array_push($this->articoli, new Articolo(1,"Iphone 13","165GB",1500));
        array_push($this->articoli, new Articolo(2,"Stampante HP","4 modalità",350));
        array_push($this->articoli, new Articolo(3,"GoPro 20","2 Obbiettivi",900));
        array_push($this->articoli, new Articolo(4,"Dualsense","Ps5",75));
        
        array_push($this->articoli_venduti, new Articolo_venduto(1,3000,2));
        array_push($this->articoli_venduti, new Articolo_venduto(2,1050,3));
        array_push($this->articoli_venduti, new Articolo_venduto(3,1800,2));
        array_push($this->articoli_venduti, new Articolo_venduto(4,300,4));

        

    }

    





    public function jsonSerialize(){
        return[
            "nome"=>$this->nome;
            "telefono"=>$this->telefono;
            "indirizzo"=>$this->indirizzo;
            "url"=>$this->url;
            "p_iva"=>$this->p_iva;
            "numOrdini"=>count($this->ordini);
            "numArticoli"=>count($this->articoli);
            "numArticoli_venduti"=>count($this->articoli_venduti);
        ];
    }






}

?>