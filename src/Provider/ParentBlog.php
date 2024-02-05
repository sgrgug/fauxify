<?php

namespace Fauxify\Fauxify\Provider;
use Fauxify\Fauxify\Provider\Base;

class ParentBlog extends Base
{
    protected $blogs = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet enim expedita quasi quidem rem illum.';

    public function blogTitle(int $numWords = NULL)
    {
        return $this->generateRandomWords($numWords ?? mt_rand(5, 10));
    }

    public function blogContent(int $numWords = NULL)
    {
        return $this->generateRandomWords($numWords ?? mt_rand(1200, 2000));
    }

    protected function generateRandomWords($numWords = 1)
    {
        // Remove punctuation and split the string into an array of words
        $words = preg_split('/[\s,]+/', preg_replace('/[[:punct:]]/', '', $this->blogs));
    
        // Get the total number of words in the array
        $totalWords = count($words);
    
        // Initialize an array to store randomly chosen words
        $randomWords = [];
    
        // Choose random indices and extract the random words
        for ($i = 0; $i < $numWords; $i++) {
            $randomIndex = mt_rand(0, $totalWords - 1);
            $randomWords[] = $words[$randomIndex];
        }
    
        // Combine the random words
        $combinedWords = implode(' ', $randomWords);
    
        // Display the combined words
        return $combinedWords;
    }
}