<?php

namespace Tests;

use App\Geometry;
use Exception;
use PHPUnit\Framework\TestCase;

class GeometryTest extends TestCase
{
    /**
     * @test
     */
    public function should_throw_an_exception_if_calculate_rectangle_area_receive_invalid_values()
    {
        $this->expectException(Exception::class);

        Geometry::rectangleArea(-1, 0);
        Geometry::rectangleArea(3, -2);
        Geometry::rectangleArea('a', 'b');
    }

    /**
     * @test
     */
    public function should_calculate_rectangle_area()
    {
        $this->assertEquals(200, Geometry::rectangleArea(10, 20));
        $this->assertEquals(35, Geometry::rectangleArea(3.5, 10));
        $this->assertEquals(0.96, Geometry::rectangleArea(1.2, 0.8));
    }

    /**
     * @test
     */
    public function should_throw_an_exception_if_calculate_triangle_area_receive_invalid_values()
    {
        $this->expectException(Exception::class);

        Geometry::triangleArea(-1, 0);
        Geometry::triangleArea(3, -2);
        Geometry::triangleArea('a', 'b');
    }

    /**
     * @test
     */
    public function should_calculate_triangle_area()
    {
        $this->assertEquals(100, Geometry::triangleArea(10, 20));
        $this->assertEquals(17.5, Geometry::triangleArea(3.5, 10));
        $this->assertEquals(0.48, Geometry::triangleArea(1.2, 0.8));
    }

    /**
     * @test
     */
    public function should_throw_an_exception_if_calculate_circle_area_receive_invalid_values()
    {
        $this->expectException(Exception::class);

        Geometry::circleArea(-1);
        Geometry::circleArea('b');
    }

    /**
     * @test
     */
    public function should_calculate_circle_area()
    {
        $this->assertEquals(314.159, Geometry::circleArea(10));
        $this->assertEquals(162.86, Geometry::circleArea(7.2));
        $this->assertEquals(1.131, Geometry::circleArea(0.6));
    }
}