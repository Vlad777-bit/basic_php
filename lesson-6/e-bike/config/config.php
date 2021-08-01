<?php

const SERVER = "localhost";
const DB = "shop";
const LOGIN = "vlad"; 
const PASS = "0000"; 

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения!");