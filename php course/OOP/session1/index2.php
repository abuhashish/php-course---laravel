<?php
class Calc{
    var $num1,$num2;
    function __construct($n1,$n2){
        $this->num1=$n1;
        $this->num2=$n2;
    }
    function add(){
        
       
        return $this->num1+$this->num2;
    }
    function sub(){
       
        
        return $this->num1-$this->num2;
    }
    function mul(){
        
        
        return $this->num1*$this->num2;
    }
    function div(){
        
        
        return $this->num1/$this->num2;
    }
}
$num1=5;
$num2=10;
$u1=new Calc($num1,$num2);
echo $u1->add();

?>