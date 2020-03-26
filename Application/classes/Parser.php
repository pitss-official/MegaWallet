<?php
namespace Parser;
class FileParser
{
    public static function parse($fileName, $delimiter)
    {
        $file = fopen($fileName, 'r');
        if (!$file)die('Error :: EOF_XCP');
        $data = [];
        while (!feof($file)) {
            $str = explode($delimiter, fgets($file));
            $data[$str[0]] = $str[1];
        }
        return $data;
    }
}