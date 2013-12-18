<?php

// http://www.reddit.com/r/dailyprogrammer/comments/1t0r09/121613_challenge_145_easy_tree_generation/

$tree = new TreeGeneration;
$tree->buildTree($argv[1], $argv[2], $argv[3]);

class TreeGeneration
{
    public function buildTree($baseSize, $baseChar, $truckChar)
    {
        if ($baseSize < 3 || $baseSize > 21 || $baseSize % 2 == 0) {
            echo "Invalid base range. Please enter an odd base from 3 to 21." . PHP_EOL;
            exit;
        }

        $this->buildTop($baseSize, $baseChar);
        $this->buildTrunk($baseSize, $truckChar);
    }

    public function buildTop($baseSize, $baseChar) {
        for ($i = 1; $i <= $baseSize; $i += 2) {
            echo str_repeat(" ", ($baseSize - $i) / 2);
            echo str_repeat($baseChar, $i);
            echo PHP_EOL;
        }
    }

    public function buildTrunk($baseSize, $truckChar) {
        echo str_repeat(" ", $baseSize / 2 - 1);
        echo str_repeat($truckChar, 3);
        echo PHP_EOL;
    }
}