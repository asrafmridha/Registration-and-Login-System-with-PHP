<?php 

   class Database{
       protected $con;
        function __construct()
        {
           $res= $this->con=new mysqli( "localhost", "root","","loginregisterphp");

           
        }



   }

  








?>