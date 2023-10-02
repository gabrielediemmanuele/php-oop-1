<?php
//* classe Production */
class Production
{
    //* ASSEGNO alla classe, degli attributi
    public $title;

    public $genre;

    public function __construct(
        string $title,
        Genre $genre,
    ) {
        $this->title = $title;
        $this->genre = $genre;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->title . " " . $this->genre->genre;
    }


}
?>