<?php
    class Package {
        private $packageCode;
        private $type; 

        function __construct($packageCode, $type){
            $this->packageCode = $packageCode;
            $this->type = $type;
        }

        public function getPackageCode(){
            return $this->packageCode;
        }

        public function setPackageCode($packageCode){
            $this->packageCode = $packageCode;
        }

        public function getType(){
            return $this->type;
        }

        public function setType($type){
            $this->type = $type;
        }
    }
?>