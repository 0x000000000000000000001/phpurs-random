<?php

$random = function() use (&$random) {
    return mt_rand() / mt_getrand\max();
};

$exports['random'] = $random;
return $exports;
