<?php

namespace CommandApp\Cinema\Commands\Search\Application;

use CommandApp\Cinema\Commands\Shared\Exceptions\ResourceNotFoundException;
use CommandApp\Cinema\Commands\Shared\Model\Movie;
use CommandApp\Cinema\Commands\Shared\Model\MovieRepositoryInterface;
use CommandApp\Cinema\Commands\Shared\Model\ValueObject\PlotEnum;
use Exception;

final class SearcherByName
{

    /**
     * @param MovieRepositoryInterface $repository
     */
    public function __construct(private readonly MovieRepositoryInterface $repository) {}

    /**
     * @param $name
     * @param string|null $modePlot
     * @return Movie|null
     * @throws Exception
     */
    public function __invoke($name, ?string $modePlot = null) : ?Movie
    {
        $plot = PlotEnum::tryFrom($modePlot ?? 'short');

        if (!$plot instanceof PlotEnum) {
            throw new Exception ('Invalid plot, possible values are: '.
                implode(',', array_map( fn(PlotEnum $plot) => $plot->value, PlotEnum::cases()))
            );
        }

        $movie = $this->repository->searchByName($name, $plot);

        if (!$movie) {
            throw new ResourceNotFoundException('Movie not found');
        }

        return $movie;
    }
}
