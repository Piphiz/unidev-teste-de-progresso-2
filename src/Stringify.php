<?php

namespace App;

use DateTime;
use Exception;

class Stringify
{
    /**
     * Recebe uma String no formato Json e deve retornar um valor formatado:
     * 
     * Exemplo de entrada:
     * {
     *     "name": "Maria",
     *     "lastname": "Amaral",
     *     "birth": 1980-01-01,
     *     "childrens": [
     *         { "name": "João", "age": 7 },
     *         { "name": "Maria", "age": 9 }
     *     ]
     * }
     * 
     * Exemplo de saída:
     * [
     *     "full_name" => "Maria Amaral",
     *     "age" => 41,
     *     "childrens" => 2,
     *     "childrens_age"=> [7, 9]
     * ]
     */
    public static function generate($stringJson)
    {
        // Seu código aqui...
    }
}