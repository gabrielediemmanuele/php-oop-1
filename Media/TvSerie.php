<?php
//* Class TvSerie extended to "Production" Production.php
class TvSerie extends Production
{
    //* Add to class specific attribute about tv series.
    public $first_episode;
    public $last_episode;
    public $episodes_number;
    public $seasons_number;


    public function __construct(
        //* confirm the type
        string $image,
        string $title,
        Genre $genre,
        string $language,
        string $first_episode,
        string $last_episode,
        string $episodes_number,
        string $seasons_number
    ) {
        //*transform to string (call the parent general attributes)
        parent::__construct($image, $title, $genre, $language);
        $this->first_episode = $first_episode;
        $this->last_episode = $last_episode;
        $this->episodes_number = $episodes_number;
        $this->seasons_number = $seasons_number;
    }

    //* With the function i build the string merging with the father (Production)
    public function getDescription()
    {
        return parent::getDescription() .
            "
        <strong>First Episode:</strong> $this->first_episode <br>
        <strong>Last Episode:</strong> $this->last_episode <br>
        <strong>Episodes:</strong> $this->episodes_number <br>
        <strong>Seasons:</strong> $this->seasons_number";
    }

    public function getImage()
    {
        return $this->image;
    }
}
?>