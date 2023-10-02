<?php
//* Create Class Genre
class Genre
{
    //* Add to class attribute.
    public $genre;

    //* Add to the attribute a type.
    public function __construct(
        //* Confirm the type.
        string $genre,
    ) {
        //* Transform to string with construct.
        $this->genre = $genre;
    }
}
?>