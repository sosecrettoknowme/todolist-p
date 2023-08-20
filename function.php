<?php

// Koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "db_todolist_p");

if(!$conn)
{
    die("Koneksi Gagal: ". mysqli_connect_error($conn));
} 







?>