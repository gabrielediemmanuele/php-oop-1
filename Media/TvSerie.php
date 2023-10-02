<?php
//* creo una classe TvSerie */
class TvSerie extends Production
{
    //* ASSEGNO alla classe, degli attributi
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    //* con __construct costruisco le stringhe dei miei film (come prova).
    public function __construct(
        //* affermo che sono stringe
        string $title,
        Genre $genre,
        string $aired_from_year,
        string $aired_to_year,
        string $number_of_episodes,
        string $number_of_seasons
    ) {
        //*li trasformo in stringhe
        parent::__construct($title, $genre);
        $this->first_episode = $aired_from_year;
        $this->last_episode = $aired_to_year;
        $this->episodes_number = $number_of_episodes;
        $this->seasons_number = $number_of_seasons;
    }

    //* tramite metodo, creo la stringa della descrizione completa del film.
    public function getDescription()
    {
        return
            "
        <strong>Title:</strong> $this->title, <br>
        <strong>Genre:</strong> {$this->genre->genre}, <br> 
        <strong>First Episode:</strong> $this->first_episode, <br>
        <strong>Last Episode:</strong> $this->last_episode, <br>
        <strong>Episodes:</strong> $this->episodes_numbere, <br>
        <strong>Seasons:</strong> $this->seasons_number <br>";
    }
}
?>