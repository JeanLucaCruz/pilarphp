<?php

class Imovel {
    protected $endereco;
    protected $preco;

    public function __construct($endereco, $preco) {
        $this->endereco = $endereco;
        $this->preco = $preco;
    }
}

class Novo extends Imovel {
    protected $adicional;

    public function __construct($endereco, $preco, $adicional) {
        parent::__construct($endereco, $preco);
        $this->adicional = $adicional;
    }

    public function imprimeAdicional() {
        echo "Adicional do imóvel novo: " . $this->adicional . " reais\n";
    }
}

class Velho extends Imovel {
    protected $desconto;

    public function __construct($endereco, $preco, $desconto) {
        parent::__construct($endereco, $preco);
        $this->desconto = $desconto;
    }

    public function imprimeDesconto() {
        echo "Desconto do imóvel velho: " . $this->desconto . " reais\n";
    }
}



?>
