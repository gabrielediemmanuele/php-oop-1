<?php
//* creo una classe movie */
class Movie
{
    //* ASSEGNO alla classe, degli attributi
    public $title;

    public $genre;

    public $year;

    //* con __construct costruisco le stringhe dei miei film (come prova).
    public function __construct(
        //* affermo che sono stringe
        string $title,
        Genre $genre,
        string $year
    ) {
        //*li trasformo in stringhe
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    //* tramite metodo, creo la stringa della descrizione completa del film.
    public function getDescription()
    {
        return $this->title . " " . $this->genre->genre . " " . $this->year;
    }

}
?>