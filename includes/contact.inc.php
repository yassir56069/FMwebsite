<?php

if (isset($_POST['submit'])) 
{
    header("location: ../contact_us.php?status=contact");
}

else
{
    header("location: ../index.php");
    exit();
}