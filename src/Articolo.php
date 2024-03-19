<?php

class Articolo implements JsonSerializable{
    protected $id;
    protected $nome;
    protected $descrizione;
    protected $prezzo_di_listino;

    public function __construct($id,$nome,$descrizione,$prezzo_di_listino){
        $this->id=$id;
        $this->nome=$nome;
        $this->descrizione=$descrizione;
        $this->prezzo_di_listino=$prezzo_di_listino;
    }

    public function getIdentificativo(){
        return $this->id;

    }

    public function jsonSerialize(){
        return[
            "id"=>$this->id;
            "nome"=>$this->nome;
            "descrizione"=>$this->descrizione;
            "prezzo_di_listino"=>$this->prezzo_di_listino;
        ];
    }
}
?>