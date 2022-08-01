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
                else{

                    $check= $this->checkEmailuserName($uName,$email);

                    if($check){
                       echo '<div class="alert alert-danger" role="alert">
                        Email or User Name alredy Exist
                        </div>';

                    }
                    else{
                          
                         $password=md5($password);
                        $dataadd= $this->con->query("INSERT INTO user (fName,uName,email,password,role,status) VALUES('$fName','$uName','$email','$password','$role','$status') ");

                        if($dataadd){

                            echo '<div class="alert alert-success" role="alert">
                            Registration Successfully
                          </div>';
                        }
                        else{

                            echo '<div class="alert alert-danger" role="alert">
                            Registration failed
                          </div>';
                        }


                    }
                }

           
                              

      }

       function checkEmailuserName($uName,$email){

       $result =$this->con->query(("SELECT *FROM user WHERE uName='$uName' OR email='$email'"));
        if($result->num_rows>0){
                
          return true;

        }
        else{

          return false;
        }
       }
        
  }

?>