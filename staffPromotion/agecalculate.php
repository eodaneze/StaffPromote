<?php
  $dob = "1999-03-03";
  $month = date("m");
  $year = (date('Y') - date('Y', strtotime($dob)));
  echo "You are $year and $month months";
?>