<?php
class myclass{
   const MYCONSTANT=100;
   public $var1="Hello";
   function dispvar(){
      echo $this->var1;
   }
}
$obj=new myclass();
$obj->dispvar();
?>