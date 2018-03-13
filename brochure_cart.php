<?php
/**
 * Created by PhpStorm.
 * User: Bianca_neu
 * Date: 12.03.2018
 * Time: 16:07
 */

    require 'include/connection.php';

    $result = mysqli_query($conn, 'SELECT * FROM packages');
?>