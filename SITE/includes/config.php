<?php


try
                {
                    $db = new PDO('mysql:host=localhost;dbname=Mediplants-ecommerce','root','root');
                    $db -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                }
                catch(Exception $e){
                    echo'erreur';
                    die();
                }
session_start();

?>
