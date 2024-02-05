<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentBook extends Base
{

    protected $books = [
        [
            "name" => "The Great Gatsby",
            "price" => 10.99,
            "author" => "F. Scott Fitzgerald",
            "category" => "Novel",
            "publish" => "1925"
        ]
    ];

    public function bookName()
    {
        return "Testing";
    }

    public function bookPrice()
    {
        return "book Price";
    }

    public function bookAuthor()
    {
        return "book Author";
    }

    public function bookCategory()
    {
        return "book Category";
    }

    public function bookPublish()
    {
        return "book Publish";
    }
}