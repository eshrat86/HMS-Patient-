<?php
      

      $src = "";

       if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST['src'])) {
         echo "Please fill up the Doctor Name";
        }
        else {
          $src = $_POST['src'];
        }

       }
      

    ?>