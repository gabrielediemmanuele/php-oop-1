<?php

require_once __DIR__ . '/../Traits/Features.php';
//* Class Production */
class Production
{
    use Features;
    //* Add to class, general attribute in common to movies and tv series
    public $title;

    public $genre;

    //* Construction 
    public function __construct(
        string $image,
        string $title,
        Genre $genre,
        string $language,

    ) {
        $this->image = $image;
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;

    }
    //* From a function build the string title + genre
    public function getDescription()
    {
        return "
        <strong>Title:</strong> $this->title <br>
        <strong>Genre:</strong> {$this->genre->genre} <br>
        <strong>Language:</strong> $this->language <br>";
    }
}
?>