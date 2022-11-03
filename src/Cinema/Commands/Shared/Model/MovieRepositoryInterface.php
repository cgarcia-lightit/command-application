<?php

namespace CommandApp\Cinema\Commands\Shared\Model;

use CommandApp\Cinema\Commands\Shared\Infrastructure\Exception\ResourceNotFoundException;
use CommandApp\Cinema\Commands\Shared\Model\ValueObject\PlotEnum;

interface MovieRepositoryInterface
{
    /**
     * @param string $name
     * @param PlotEnum $fullPlot
     * @return Movie|null
     * Return the movie with the given name
     */
    public function searchByName(string $name, PlotEnum $fullPlot) : ?Movie;
}
