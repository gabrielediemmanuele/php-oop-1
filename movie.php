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
        string $title,
        string $genre,
        string $year
    ) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    //* tramite metodo, creo la stringa della descrizione completa del film.
    public function getDescription()
    {
        return "$this->title, $this->genre, $this->year";
    }
}
?>