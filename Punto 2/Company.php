<?php
    class Company {
        private $codCompany;
        private $name;
        private $address;
        private $tel;
        
        public $transports = [];

        public function __construct($codCompany, $name, $address, $tel){
            $this->codCompany = $codCompany;
            $this->name = $name;
            $this->address = $address;
            $this->tel = $tel;
        }
        public function getCodCompany(){
            return $this->codCompany;
        }
        public function setCodCompany($codCompany){
            $this->codCompany = $codCompany;
        }
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getAddress(){
            return $this->address;
        }
        public function setAddress($address){
            $this->address = $address;
        }
        public function getTel(){
            return $this->tel;
        }
        public function setTel($tel){
            $this->tel = $tel; 
        }   

        public function transport(Client $client, Package $package, $from, $to, $price, $date)
        {
            $transport = (object)[
                'client' => $client, 
                'package' => $package,
                'from' => $from, 
                'to' => $to,
                'price' => $price,
                'date' => $date
            ];
            array_push($this->transports, $transport);
            return 'Package OK';
        }

        public function getReportByDate($date) {
            $total = 0;
            $cant = 0;
            $report = "";
            $report .= "<strong>" . $this->getName() . " - Fecha: " . $date . "</strong><br /><br />";

            foreach($this->transports as $key){
                if ($date == $key->date) {
                    $report .= "Cliente: " . $key->client->getCodClient() . " - " . $key->client->getName() . "<br />";
                    $report .= "Paquete: " . $key->package->getType() . "<br />";
                    $report .= "Origen: " . $key->from . "<br />";
                    $report .= "Destino: " . $key->to . "<br />";
                    $report .= "Precio: " . $key->price . "<br /><br />";
                    $total += $key->price;
                    $cant++;
                }
            }
            $report .= "<strong>Total de paquetes transportados: " . $cant . "</strong><br />";
            $report .= "<strong>Total recaudado: " . $total . "</strong>";

            return $report;
        }
    }
?>