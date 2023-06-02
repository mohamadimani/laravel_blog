<?php

use Morilog\Jalali\Jalalian;

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

function upload($file)
{
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    $file->move(base_path('storage/app/public'), $fileName);
    return 'storage/' . $fileName;
}

function deleteImage($imageName)
{
    \File::delete($imageName);
}

function dateToJalali($data)
{
    $jalaliDate = Jalalian::fromCarbon($data);
    return $jalaliDate;
}
