<?php

    /** 
     * Securise une chaine venant de l'utilisateur ou de la base de donnee
     * @param string
     * @return string
    */

    function str_secure(string $var)
    {
        return trim(htmlspecialchars($var));
    }

    /** 
     * Nous donne un rendu plus visible de var_dump
     * @param string
    */

    function debug($var): void
    {
        echo '<pre>';
            var_dump($var);
        echo '</pre>';
    }
