<?php

include_once "Ordine.php";

class OrdineOnline extends Ordine implements JsonSerializable{
    protected $indirizzo_IP;
    protected $codice_di_autorizzazione;

    public function __construct($numero_ordine,$data,$importo_totale,$indirizzo_IP,$codice_di_autorizzazione){
        parent::__construct($numero_ordine,$data,$importo_totale);
        $this->indirizzo_IP=$indirizzo_IP;
        $this->codice_di_autorizzazione=$codice_di_autorizzazione;
    }

    public function jsonSerialize(){
        return[
            return array_merge(parent::jsonSerialize(), ["indirizzo_IP" => $this->indirizzo_IP],["codice_di_autorizzazione" => $this->codice_di_autorizzazione]);
        ];
    }
}
?>