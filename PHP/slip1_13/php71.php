<?php

          interface Example

          {

                   function gmtokg();

                   function kgtogm();

          }

          class Convert implements Example

          {

                                                                            

                     public $w;

                   function __construct($w)

                   {

                             $this->w=$w;

                            

                   }

                   function gmtokg()

                   {

                             echo"Value in gram :".$this->w."<br/>";

                             $this->w=$this->w/1000;

                             echo"Value in kg= ".$this->w." Kilogram<br>";

                   }

                   function kgtogm()

                   {

                             echo"value in kilogram:".$this->w."<br/>";

                             $this->w=$this->w*1000;

                             echo"value in gm= ".$this->w." Gram<br>";

                   }

          }

                  

          $c=new Convert(1000);

          $c->gmtokg();

         

          $c=new Convert(4);

          $c->kgtogm();

?>