<?php
declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_error', '1');

function dump($data){
        echo '<div style="
         border: 1px solid black;">
        <span>
         ';
         print_r($data);
         echo '</span>
         </div>
         </br>
         ';
        }
?>