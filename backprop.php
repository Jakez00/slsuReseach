<?php
    class backproposal
    {
        protected $atype;
        
        public function setbackproposal($a){
            $this->atype = $a;
        }

        public function getbackproposal(){
            return $this->atype;
        }
        public function getbackproposalString(){
            $out = "invalid";
            switch($this->getbackproposal()){
                case 1:
                    $out = "Admin";
                    break;
                case 2:
                    $out = "Proponents";
                    break;
                case 3:
                    $out = "Proponents";
                    break;
                case 4:
                    $out = "Coordinator"; 
                    break;
                case 5:
                    $out = "Coordinator"; 
                    break;
                case 6:
                    $out = "Coordinator";
                    break;
                case 7:
                    $out = "Coordinator"; 
                    
                    
                    
                    break;
            }

            return $out;
        }
    }

?>