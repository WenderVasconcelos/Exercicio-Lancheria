<?php

class Lancheria {
    private $cpf;
    private $end;
    private $lanche;
    private $bebida;
    private $valor;
    
    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }
    
    public function validaDados(){
        if(empty($this->cpf)||empty($this->end)){
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
    public function valorLanche(){
        if($this->lanche == 'Xis Salada'){
            return 12.00;
        }else if($this->lanche == 'Xis Bacon'){
            return 18.00;
        } else{ 
            return 22.00;
        }
    }
    public function valorBebida(){
        if($this->bebida == 'Água'){
            return 4.00;
        } else{
            return 12.00;
        }    
    }
    public function valorTotal(){
       return $this->valorBebida()+ $this->valorLanche();
    }
    public function __toString() {
        return "CPF: ".$this->cpf.
                "<br/>Endereço: ".$this->end.
                "<br/>Lanche: ".$this->lanche.
                "<br/>Bebida: ".$this->bebida.
                "<br/>Valor à Pagar: ".$this->valorTotal();
    }

}
