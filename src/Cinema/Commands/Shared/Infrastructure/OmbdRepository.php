<?php

namespace CommandApp\Cinema\Commands\Shared\Infrastructure;

use CommandApp\Cinema\Commands\Shared\Infrastructure\Exception\ResourceNotFoundException;
use CommandApp\Cinema\Commands\Shared\Model\Movie;
use CommandApp\Cinema\Commands\Shared\Model\MovieRepositoryInterface;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use CommandApp\Cinema\Commands\Shared\Model\ValueObject\PlotEnum;
use RuntimeException;

/**
 * This repository use Ombd api as a origin to fetch information
 */
final class OmbdRepository implements MovieRepositoryInterface
{

    /**
     * @var string
     */
    private string $url;

    /**
     * @var string
     */
    private string $apiKey;

    public function __construct(private readonly ClientInterface $client)
    {
        $this->url = $_ENV['REMOTE_CINEMA_LIBRARY'] ?? '';
        $this->apiKey = $_ENV['REMOTE_CINEMA_OMD_API_KEY'] ?? '';

        if (empty($this->url || empty($this->apiKey))) {
            throw new RuntimeException('The remote is not configured yet.');
        }
    }

    /**
     * @param string $name
     * @param PlotEnum $fullPlot
     * @return Movie|null
     * @throws GuzzleException
     */
    public function searchByName(string $name, PlotEnum $fullPlot): ?Movie
    {
        $result = $this->client->request('GET', $this->makeUrl('', [
            't' => $name,
            'plot' => $fullPlot->value,
        ]));

        $result = json_decode($result->getBody()->getContents(), true);

        return !isset($result['Error']) ? new Movie($result) : null;
    }

    /**
     * @param string $name
     * @param array $queryString
     * @return string
     */
    private function makeUrl(string $name, array $queryString): string
    {
        return "$this->url/$name?apiKey=$this->apiKey&". http_build_query($queryString);
    }
}
