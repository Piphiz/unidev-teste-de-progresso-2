<?php

namespace Tests;

use App\Stringify;
use PHPUnit\Framework\TestCase;
use stdClass;

class StringifyTest extends TestCase
{
    /**
     * @test
     */
    public function should_generate_correct_string()
    {
        $input = '{
            "name": "Joana",
            "lastname": "Pereira Maia",
            "birth": "1970-01-01",
            "childrens": [
                { "name": "Pedrinho", "age": 10 },
                { "name": "Mariana", "age": 11 },
                { "name": "Flavinha", "age": 18 }
            ]
        }';

        $output = [
            "full_name" => "Joana Pereira Maia",
            "age" => 51,
            "childrens" => 3,
            "childrens_age"=> [10, 11, 18]
        ];

        $this->assertEquals($output, Stringify::generate($input));
    }
}