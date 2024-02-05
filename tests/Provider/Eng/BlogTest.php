<?php

namespace Tests\Provider\Eng;

use PHPUnit\Framework\TestCase;
use Fauxify\Fauxify\Provider\Eng\Blog;

class BlogTest extends TestCase{

    public function testBlogTitle()
    {
        $blog = new Blog();
        $blogTitle = $blog->blogTitle();

        // Assert that the generated blog title is a non-empty string
        $this->assertNotEmpty($blogTitle);
        $this->assertIsString($blogTitle);
    }

    public function testBlogContent()
    {
        $blog = new Blog();
        $blogContent = $blog->blogContent();

        // Assert that the generated blog content is a non-empty string
        $this->assertNotEmpty($blogContent);
        $this->assertIsString($blogContent);
    }

    public function testGenerateRandomWords()
    {
        $blog = new Blog();

        // Use ReflectionMethod to test protected method
        $reflectionMethod = new \ReflectionMethod($blog, 'generateRandomWords');
        $reflectionMethod->setAccessible(true);

        // Test generating a specific number of random words
        $randomWords = $reflectionMethod->invoke($blog, 5);
        $this->assertIsString($randomWords);

        // Test generating random words with the default number
        $randomWordsDefault = $reflectionMethod->invoke($blog);
        $this->assertIsString($randomWordsDefault);

        // Test generating zero words
        $randomWordsZero = $reflectionMethod->invoke($blog, 0);
        $this->assertSame('', $randomWordsZero);
    }

}