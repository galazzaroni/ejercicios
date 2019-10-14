<?php 
class Client {
    private $codClient;
    private $name;
    private $address;
    private $tel;

    public function __construct($codClient, $name, $address, $tel)
    {
        $this->codClient = $codClient;
        $this->name = $name;
        $this->address = $address;
        $this->tel = $tel;
    }

    public function getCodClient(){
        return $this->codClient;
    }

    public function getName(){
        return $this->name;
    }

    public function getAddress(){
        return $this->address;
    }

    public function setAddress($address){
        return $this->address;
    }

    public function getTel(){
        return $this->tel;
    }

    public function setTel($tel){
        return $this->tel = $tel;
    }
}
?>