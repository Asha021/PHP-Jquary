<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $nm = $_POST['nm'];
          $roll = $_POST['roll'];
          $cls = $_POST['cls'];
          $sem = $_POST['sem'];
          $schl = $_POST['schl'];
   }

   echo '$nm','$roll','$cls','$sem','$schl';
?>