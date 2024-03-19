<?php

class Articolo_venduto implements JsonSerializable{
    protected $id;
    protected $prezzo_di_vendita;
    protected $quantita_acquistata;

    public function __construct($id,$prezzo_di_vendita,$quantita_acquistata){
        $this->id=$id;
        $this->prezzo_di_vendita=$prezzo_di_vendita;
        $this->quantita_acquistata=$quantita_acquistata;
    }

    public function jsonSerialize(){
        return[
            "id"=>$this->nome;
            "prezzo_di_vendita"=>$this->prezzo_di_vendita;
            "quantita_acquistata"=>$this->quantita_acquistata;
        ];
    }
}
?>