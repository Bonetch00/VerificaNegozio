<?php

include_once "Ordine.php";

class OrdineNegozio extends Ordine implements JsonSerializable{
    protected $pagamento;

    public function __construct($numero_ordine,$data,$importo_totale,$pagamento){
        parent::__construct($numero_ordine,$data,$importo_totale);
        $this->pagamento=$pagamento;

    }

    public function jsonSerialize(){
        return[
            return array_merge(parent::jsonSerialize(), ["pagamento" => $this->pagamento]);
        ];
    }
}
?>