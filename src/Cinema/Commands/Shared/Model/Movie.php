<?php

namespace CommandApp\Cinema\Commands\Shared\Model;

/**
 *
 */
final class Movie extends Printable
{

    /**
     * @var string
     */
    private string $Title;
    /**
     * @var string
     */
    private string $Year;
    /**
     * @var string
     */
    private string $Rated;
    /**
     * @var string
     */
    private string $Released;
    /**
     * @var string
     */
    private string $Runtime;
    /**
     * @var string
     */
    private string $Genre;
    /**
     * @var string
     */
    private string $Director;
    /**
     * @var string
     */
    private string $Writer;
    /**
     * @var string
     */
    private string $Actors;
    /**
     * @var string
     */
    private string $Plot;
    /**
     * @var string
     */
    private string $Language;
    /**
     * @var string
     */
    private string $Country;
    /**
     * @var string
     */
    private string $Awards;
    /**
     * @var string
     */
    private string $Poster;
    /**
     * @var string
     */
    private string $Metascore;
    /**
     * @var string
     */
    private string $imdbRating;
    /**
     * @var string
     */
    private string $imdbVotes;
    /**
     * @var string
     */
    private string $imdbID;
    /**
     * @var string
     */
    private string $Type;
    /**
     * @var string
     */
    private string $DVD;
    /**
     * @var string
     */
    private string $BoxOffice;
    /**
     * @var string
     */
    private string $Production;
    /**
     * @var string
     */
    private string $Website;
    /**
     * @var string
     */
    private string $Response;
    /**
     * @param array $dataSource
     */

    public function __construct(private array $dataSource)
    {
        $this->Title = $dataSource['Title'] ?? '';
        $this->Year = $dataSource['Year'] ?? '';
        $this->Rated = $dataSource['Rated'] ?? '';
        $this->Released = $dataSource['Released'] ?? '';
        $this->Runtime = $dataSource['Runtime'] ?? '';
        $this->Genre = $dataSource['Genre'] ?? '';
        $this->Director = $dataSource['Director'] ?? '';
        $this->Writer = $dataSource['Writer'] ?? '';
        $this->Actors = $dataSource['Actors'] ?? '';
        $this->Plot = $dataSource['Plot'] ?? '';
        $this->Language = $dataSource['Language'] ?? '';
        $this->Country = $dataSource['Country'] ?? '';
        $this->Awards = $dataSource['Awards'] ?? '';
        $this->Poster = $dataSource['Poster'] ?? '';
        $this->Metascore = $dataSource['Metascore'] ?? '';
        $this->imdbRating = $dataSource['imdbRating'] ?? '';
        $this->imdbVotes = $dataSource['imdbVotes'] ?? '';
        $this->imdbID = $dataSource['imdbID'] ?? '';
        $this->Type = $dataSource['Type'] ?? '';
        $this->DVD = $dataSource['DVD'] ?? '';
        $this->BoxOffice = $dataSource['BoxOffice'] ?? '';
        $this->Production = $dataSource['Production'] ?? '';
        $this->Website = $dataSource['Website'] ?? '';
        $this->Response = $dataSource['Response'] ?? '';
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * @return string
     */
    public function getYear(): string
    {
        return $this->Year;
    }

    /**
     * @return string
     */
    public function getRated(): string
    {
        return $this->Rated;
    }

    /**
     * @return string
     */
    public function getReleased(): string
    {
        return $this->Released;
    }

    /**
     * @return string
     */
    public function getRuntime(): string
    {
        return $this->Runtime;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->Genre;
    }

    /**
     * @return string
     */
    public function getDirector(): string
    {
        return $this->Director;
    }

    /**
     * @return string
     */
    public function getWriter(): string
    {
        return $this->Writer;
    }

    /**
     * @return string
     */
    public function getActors(): string
    {
        return $this->Actors;
    }

    /**
     * @return string
     */
    public function getPlot(): string
    {
        return $this->Plot;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->Language;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->Country;
    }

    /**
     * @return string
     */
    public function getAwards(): string
    {
        return $this->Awards;
    }

    /**
     * @return string
     */
    public function getPoster(): string
    {
        return $this->Poster;
    }

    /**
     * @return string
     */
    public function getMetascore(): string
    {
        return $this->Metascore;
    }

    /**
     * @return string
     */
    public function getImdbRating(): string
    {
        return $this->imdbRating;
    }

    /**
     * @return string
     */
    public function getImdbVotes(): string
    {
        return $this->imdbVotes;
    }

    /**
     * @return string
     */
    public function getImdbID(): string
    {
        return $this->imdbID;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @return string
     */
    public function getDVD(): string
    {
        return $this->DVD;
    }

    /**
     * @return string
     */
    public function getBoxOffice(): string
    {
        return $this->BoxOffice;
    }

    /**
     * @return string
     */
    public function getProduction(): string
    {
        return $this->Production;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->Website;
    }

    /**
     * @return string
     */
    public function getResponse(): string
    {
        return $this->Response;
    }

    public function getOriginalData(): array
    {
        return $this->dataSource;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'Title' => $this->Title,
            'Year' => $this->Year,
            'Rated' => $this->Rated,
            'Released' => $this->Released,
            'Runtime' => $this->Runtime,
            'Genre' => $this->Genre,
            'Director' => $this->Director,
            'Writer' => $this->Writer,
            'Actors' => $this->Actors,
            'Plot' => $this->Plot,
            'Language' => $this->Language,
            'Country' => $this->Country,
            'Awards' => $this->Awards,
            'Poster' => $this->Poster,
            'Metascore' => $this->Metascore ,
            'imdbRating' => $this->imdbRating ,
            'imdbVotes' => $this->imdbVotes ,
            'imdbID' => $this->imdbID,
            'Type' => $this->Type,
            'DVD' => $this->DVD,
            'BoxOffice' => $this->BoxOffice,
            'Production' => $this->Production,
            'Website' => $this->Website,
            'Response' => $this->Response,
        ];
    }
}
