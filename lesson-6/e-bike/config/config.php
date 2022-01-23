<?php

const SERVER = "localhost";
const DB = "e-bikes";
const LOGIN = "vlad"; 
const PASS = "0000"; 

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения!");