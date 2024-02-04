<?php

namespace Fauxify\Fauxify\Provider\Eng;

use Fauxify\Fauxify\Provider\ParentBook;

class Book extends ParentBook
{
    protected $books = [
        [
            "name" => "The Great Gatsby",
            "price" => 10.99,
            "author" => "F. Scott Fitzgerald",
            "category" => "Novel",
            "publish" => "1925"
        ],
        [
            "name" => "To Kill a Mockingbird",
            "price" => 12.99,
            "author" => "Harper Lee",
            "category" => "Novel",
            "publish" => "1960"
        ],
        [
            "name" => "1984",
            "price" => 15.99,
            "author" => "George Orwell",
            "category" => "Novel",
            "publish" => "1949"
        ],
        [
            "name" => "The Catcher in the Rye",
            "price" => 11.99,
            "author" => "J.D. Salinger",
            "category" => "Novel",
            "publish" => "1951"
        ],
        [
            "name" => "The Hobbit",
            "price" => 14.99,
            "author" => "J.R.R. Tolkien",
            "category" => "Novel",
            "publish" => "1937"
        ]
    ];
}