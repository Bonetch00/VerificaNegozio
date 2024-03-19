<?php

class Ordine implements JsonSerializable{
    protected $numero_ordine;
    protected $data;
    protected $importo_totale;
    protected $articoli_venduti=[

    ];

    public function __construct($numero_ordine,$data,$importo_totale){
        $this->numero_ordine=$numero_ordine;
        $this->data=$data;
        $this->importo_totale=$importo_totale;
    }

    

    public function jsonSerialize(){
        return[
            "numero_ordine"=>$this->numero_ordine;
            "data"=>$this->data;
            "importo_totale"=>$this->importo_totale;
            "numArticoli_venduti"=>count($this->articoli_venduti);
        ];
    }

}

?>