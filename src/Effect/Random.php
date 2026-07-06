<?php

$random = function() use (&$random) {
    return mt_rand() / mt_getrandmax();
};

$exports['random'] = $random;
return $exports;
