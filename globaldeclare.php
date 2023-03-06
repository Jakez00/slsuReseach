<?php
    class GlobalDeclare
    {
        protected $atype;
        
        public function setAccountType($a){
            $this->atype = $a;
        }

        public function getAccountType(){
            return $this->atype;
        }
        public function getAccountTypeString(){
            $out = "invalid";
            switch($this->getAccountType()){
                case 1:
                    $out = "Admin";
                    break;
                case 2:
                    $out = "Proponents";
                    // submit proposal
                    break;
                case 3:
                    $out = "Coordinator";
                    // request form to director Form (RI09)  - REQUST FORM ATTACHMENT
                    break;
                case 4:
                    $out = "Director"; 
                    // received form from coordinator (RI90)
                    //approved form  RI09   - LEAVE COMMENT
                    // RI09 declined -return to coordinator - LEAVE COMMENT
                    break;
                case 5:
                    $out = "Evaluation and Review"; // "Evaluation and Review";
                    //create FORM RI04 
                    //ATTACH FORM RI04 - MULTIPLE ATTACHMENT
                    break;
                case 6:
                    $out = "Information System & Data Analytics"; //"Information System & Data Analytics"
                    //form RI13
                    //ATTACH RI13 
                    break;
                case 7:
                    $out = "Monitoring and Evaluation Head"; 
                    //ATTACH RI13
                    // FORWARD TO PROPONENTS AND LEAVE COMMENTS
                    // PROPONENTS CREATE/ ATTACH RI05 -> 3
                    // COORDINATOR ATTACH SIGNED RI05 -> 4
                    // DIRECTOR APPROVED/SIGNED RI05 -> 7
                    
                    
                    break;
            }

            return $out;
        }
    }

?>