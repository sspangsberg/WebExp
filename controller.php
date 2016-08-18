<?php

require_once "db.php";

function handleRequest($index)
{
    switch ($index)
    {
        case 1:
            return retrieveContent($index);
            break;
        case 2:
            break;
        case 3:
            break;

    }
}

?>