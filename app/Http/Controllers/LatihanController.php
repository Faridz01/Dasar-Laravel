<?php
    class LatihanController extends Controller
    {
        public function hallo()
        {
            $f = 1;
            $total = $f * 100;
            if($total >= 1000){
                return'Diatas Seribu';
            }else{
                return'Di Bawah Seribu';                
            }
            
        }
    }


?>