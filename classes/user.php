<?php  
  include "classes/database.php";

  class User extends Database{


      function registration($data){

           $fName=$data['fName'];
           $uName=$data['uName'];
           $email=$data['email'];
           $password=$data['password'];
           $cpassword=$data['cpassword'];
           $role ="user";
           $status="0";

           if(empty ($fName)){

         echo   '<div class="alert alert-danger" role="alert">
               Full Name is Required
                </div>';
           }

           elseif(empty ($uName)){

            echo   '<div class="alert alert-danger" role="alert">
                  User name is required
                   </div>';
              }

              elseif(empty ($email)){

                echo   '<div class="alert alert-danger" role="alert">
                      Email is Required
                       </div>';
                  }
              
                  elseif(empty ($password)){

                    echo   '<div class="alert alert-danger" role="alert">
                           Password is required
                           </div>';
                      }

                      elseif(empty ($cpassword)){

                        echo   '<div class="alert alert-danger" role="alert">
                              Confirm Password is required
                               </div>';
                          }

                      elseif(($password !=$cpassword)){

                        echo   '<div class="alert alert-danger" role="alert">
                               Password is not match
                               </div>';
                          }


           
                              

      }
        
  }

?>