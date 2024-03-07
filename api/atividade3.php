<?php

abstract class Animal {
    protected $nome;
    protected $idade;
    protected $especie;

    public function __construct($nome, $idade, $especie) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->especie = $especie;
    }

    abstract public function fazSom();
}

class Cachorro extends Animal {
    public function fazSom() {
        echo "O cachorro late\n";
    }
}

class Cavalo extends Animal {
    public function fazSom() {
        echo "O cavalo relincha\n";
    }
}

class Gato extends Animal {
    public function fazSom() {
        echo "O gato mia\n";
    }
}


?>
