<?php
    class accountrole
    {
        protected $atype;
        
        public function setAccountRole($a){
            $this->atype = $a;
        }

        public function getAccountRole(){
            return $this->atype;
        }
        public function getAccountRoleString(){
            $out = "invalid";
            switch($this->getAccountRole()){
                case 1:
                    $out = "Admin";
                    break;
                case 2:
                    $out = "Proponents";
                    break;
                case 3:
                    $out = "Director";
                    break;
                case 4:
                    $out = "Evaluation and Review"; 
                    break;
                case 5:
                    $out = "Information System & Data Analytics"; 
                    break;
                case 6:
                    $out = "Monitoring and Evaluation Head";
                    break;
                case 7:
                    $out = "Proponents"; 
                    
                    
                    
                    break;
            }

            return $out;
        }
    }

?>