<?php

abstract class Ingresso {
    protected $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    abstract public function imprimeValor();
}

class Normal extends Ingresso {
    public function imprimeValor() {
        echo "Valor do ingresso normal: " . $this->valor . " reais\n";
    }
}

class VIP extends Ingresso {
    protected $adicional;

    public function __construct($valor, $adicional) {
        parent::__construct($valor);
        $this->adicional = $adicional;
    }

    public function imprimeValor() {
        echo "Valor do ingresso VIP: " . ($this->valor + $this->adicional) . " reais\n";
    }
}

class Camarote extends Ingresso {
    protected $adicional_camarote;

    public function __construct($valor, $adicional_camarote) {
        parent::__construct($valor);
        $this->adicional_camarote = $adicional_camarote;
    }

    public function imprimeValor() {
        echo "Valor do ingresso Camarote: " . ($this->valor + $this->adicional_camarote) . " reais\n";
    }
}



?>
