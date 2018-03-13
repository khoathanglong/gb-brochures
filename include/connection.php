<?php
/**
 * Created by PhpStorm.
 * User: Bianca_neu
 * Date: 12.03.2018
 * Time: 16:08
 */

$conn = new mysqli('localhost', 'root', '', 'gb_brochure_project');


if ($conn->connect_errno) {
    header("HTTP/1.1 502 Bad Gateway");

    printf("Failed to connect to MySQL. Mysqli error (%i) %s.\n", $conn->connect_errno, $conn->connect_error);

    exit();
}

if (!$conn->set_charset('utf8')) {
    header("HTTP/1.1 500 Internal Server Error");

    printf("Error setting character set to utf8: (%i) %s\n", $conn->connect_errno, $conn->connect_error);

    exit();
}