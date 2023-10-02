<?php
//* Class Production */
class Production
{
    //* Add to class, general attribute in common to movies and tv series
    public $image;
    public $title;

    public $genre;

    //* Construction 
    public function __construct(
        string $title,
        Genre $genre
    ) {
        $this->title = $title;
        $this->genre = $genre;
    }
    //* From a function build the string title + genre
    public function getDescription()
    {
        return $this->title . " " . $this->genre->genre;
    }
}
?>