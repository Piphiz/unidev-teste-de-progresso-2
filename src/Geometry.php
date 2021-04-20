<?php

namespace App;

use Exception;

class Geometry
{
    /**
     * Deve retornar um valor numérico com a área do retângulo
     */
    public static function rectangleArea($base, $height)
    {
        if(!is_numeric($base) || !is_numeric($height) || $base < 0 || $height < 0) {
            throw new Exception('Apenas valores numéricos são aceitos!');
        }

        return $base * $height;
    }

    /**
     * Deve retornar um valor numérico com a área do triângulo
     */
    public static function triangleArea($base, $height)
    {
        // Seu código aqui...
    }

    /**
     * Deve retornar um valor numérico com a área do circulo
     * Com aproximação de 3 casas decimais. Ex.: 123.321
     */
    public static function circleArea($radius)
    {
        // Seu código aqui...
    }
}