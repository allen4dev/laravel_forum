<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Serie;

class SerieTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_serie_knows_his_path()
    {
        $serie = create(Serie::class);

        $this->assertEquals('/series/' . $serie->id, $serie->path());
    }

    /** @test */
    public function a_serie_has_many_threads()
    {
        $serie = create(Serie::class);
        
        $this->assertInstanceOf(
            'Illuminate\Database\Eloquent\Collection',
            $serie->threads
        );
    }
}
