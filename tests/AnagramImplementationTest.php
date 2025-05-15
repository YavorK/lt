<?php
declare(strict_types=1);


use LeadDeskTasks\AnagramImplementation;
use PHPUnit\Framework\TestCase;

final class AnagramImplementationTest extends TestCase
{

    public function testWithDataFromTask()
    {
        $anagram = new AnagramImplementation();
        $this->assertFalse($anagram->isAnagram("RAT", "CAR"));
    }

    public function testBothWordsAreExactlyTheSame(){
        $anagram = new AnagramImplementation();
        $this->assertFalse($anagram->isAnagram("CAR", "CAR"));
    }

    public function testRealAnagram(){
        $anagram = new AnagramImplementation();
        $this->assertTrue($anagram->isAnagram("BOT", "TOB"));
    }
    public function testDifferentLengthSameLetters(){
        $anagram = new AnagramImplementation();
        $this->assertFalse($anagram->isAnagram("BOTT", "TOB"));
    }
}
