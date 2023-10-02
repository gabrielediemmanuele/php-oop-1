<?php
//* creo una classe Genre */
class Genre
{
    //* ASSEGNO alla classe, degli attributi
    public $genre;

    //* con __construct costruisco le stringhe dei miei film (come prova).
    public function __construct(
        //* affermo che è una stringa
        string $genre,
    ) {
        //*li trasformo in stringhe
        $this->genre = $genre;
    }
}
?>