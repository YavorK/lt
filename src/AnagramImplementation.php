<?php
declare(strict_types=1);

namespace LeadDeskTasks;

class AnagramImplementation implements Anagram
{
    public function isAnagram(string $word1, string $word2): bool
    {
        // if words are the same that's not an anagram
        if($word1 === $word2){
            return false;
        }


        $word1Letters = mb_str_split($word1);
        $word2Letters = mb_str_split( $word2);
        foreach ($word1Letters as $word1Letter) {
            $foundLetterIndex = array_search($word1Letter, $word2Letters);
            if (is_numeric($foundLetterIndex)) {
                // This letter is ok
                // Remove the letter from word2Letters, because it was already 'used' and then continue.
                unset($word2Letters[$foundLetterIndex]);
                continue;
            }

            // this letter is not in word 2, so not ok
            return false;
        }

        //did both words' letters overlap completely?
        return empty($word2Letters);
    }
}
