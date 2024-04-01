<?php

namespace App\Services;

class ProblemService {

    public function getResultProblemTwo(String $stringValue) {
        return $this->maxValue($stringValue);
    }

    function maxValue(String $stringValue) {
        $suffixes = $this->getSuffixes($stringValue);
        return max($suffixes);
    }

    function getSuffixes(String $stringValue) {
        $tLength = mb_strlen($stringValue);
        $suffixes = [];
        for($i = 0; $i < $tLength; $i++) {
            $suffix = mb_substr($stringValue, $i);
            $regex = "/(?=$suffix)/";
            $countCoincidence = preg_match_all($regex, $stringValue);
            $calculate = mb_strlen($suffix) * $countCoincidence;
            array_push($suffixes, $calculate);
        }
        return $suffixes;
    }
}
