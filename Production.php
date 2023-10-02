<?php
//* classe Production */
class Production
{
    //* ASSEGNO alla classe, degli attributi
    public $title;

    public $genre;

    public $year;

    public function __construct(
        string $title,
        Genre $genre,
        string $year
    ) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->title . " " . $this->genre->genre . " " . $this->year;
    }


}
?>