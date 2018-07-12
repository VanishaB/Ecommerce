<?php

session_start();
try
                {
                    $db = new PDO('mysql:host=localhost;dbname=site','root','');
                    $db -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                }
                catch(Exception $e){
                    echo'erreurr';
                    die();
                }


?>