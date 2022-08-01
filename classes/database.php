<?php 

   class Database{
       protected $con;
        function __construct()
        {
           $result= $this->con=new mysqli( "localhost", "root","","loginregisterphp");

         
        }



   }

  








?>