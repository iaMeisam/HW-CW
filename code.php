<?php
              

              $Name=$_POST["name"];
              
              $Email=$_POST["email"];
              $nazarat=$_POST["nazarat"];
              $Details ="Name: <br />" $Name . "Email : <br>" . $Email . "nazarat : <br>" . $nazarat;
              $fp = fopen("database.php", "w");

              fwrite($fp, "<br />" . $Details);
              fclose($fp);
              echo"DONE !!!!!!";
              
              ?>