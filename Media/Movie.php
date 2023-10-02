<?php
//* creo una classe movie */
class Movie extends Production
{
    //* ASSEGNO alla classe, degli attributi
    public static $time_unit = "min";
    public $published_year;

    public $running_time;

    //* con __construct costruisco le stringhe dei miei film (come prova).
    public function __construct(
        //* affermo che sono stringe
        string $title,
        Genre $genre,
        string $running_time,
        string $published_year
    ) {
        //*li trasformo in stringhe
        parent::__construct($title, $genre);
        $this->running_time = $running_time;
        $this->published_year = $published_year;
    }

    //* tramite metodo, creo la stringa della descrizione completa del film.
    public function getDescription()
    {
        $minuts = self::$time_unit;
        return
            "
        <strong>Title:</strong> $this->title, <br>
        <strong>Genre:</strong> {$this->genre->genre}, <br> 
        <strong>Running Time:</strong> $this->running_time $minuts, <br>
        <strong>Published Year:</strong> $this->published_year <br>";
    }
}
?>