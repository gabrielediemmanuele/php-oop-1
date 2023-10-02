<?php
//* Class TvSerie extended to "Production" Production.php
class TvSerie extends Production
{
    //* Add to class specific attribute about tv series.
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;


    public function __construct(
        //* confirm the type
        string $title,
        Genre $genre,
        string $aired_from_year,
        string $aired_to_year,
        string $number_of_episodes,
        string $number_of_seasons
    ) {
        //*transform to string (call the parent general attributes)
        parent::__construct($title, $genre);
        $this->first_episode = $aired_from_year;
        $this->last_episode = $aired_to_year;
        $this->episodes_number = $number_of_episodes;
        $this->seasons_number = $number_of_seasons;
    }

    //* With the function i build the string merging with the father (Production)
    public function getDescription()
    {
        return
            "
        <strong>Title:</strong> $this->title, <br>
        <strong>Genre:</strong> {$this->genre->genre}, <br> 
        <strong>First Episode:</strong> $this->first_episode, <br>
        <strong>Last Episode:</strong> $this->last_episode, <br>
        <strong>Episodes:</strong> $this->episodes_number, <br>
        <strong>Seasons:</strong> $this->seasons_number";
    }
}
?>