<?php
//* Class Movie extended to "Production" Production.php
class Movie extends Production
{
    //* Add to class specific attribute about movies.
    public static $time_unit = "min";
    public $published_year;

    public $running_time;

    //* Add to all the attribute a type
    public function __construct(
        //* confirm the type
        string $title,
        Genre $genre,
        string $running_time,
        string $published_year
    ) {
        //*transform to string (call the parent general attributes)
        parent::__construct($title, $genre);
        $this->running_time = $running_time;
        $this->published_year = $published_year;
    }

    //* With the function i build the string merging with the father (Production)
    public function getDescription()
    {
        $minuts = self::$time_unit;
        return
            "
        
        <strong>Title:</strong> $this->title, <br>
        <strong>Genre:</strong> {$this->genre->genre}, <br> 
        <strong>Running Time:</strong> $this->running_time $minuts, <br>
        <strong>Published Year:</strong> $this->published_year";
    }
}
?>