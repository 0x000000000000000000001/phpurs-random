<?php

$random = function () {
    return \mt_rand() / \mt_getrandmax();
};

$exports['random'] = $random;
return $exports;
