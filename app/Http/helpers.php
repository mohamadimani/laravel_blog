<?php
function currentRoute()
{
    return request()->route()->getName();
}

function shortText($string, $lenth = 50)
{
    if (mb_strlen($string)  >= $lenth) { 
        return mb_substr($string, 0, $lenth) . '...';
    }
    return $string;
}
