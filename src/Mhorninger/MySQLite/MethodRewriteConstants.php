<?php

namespace Mhorninger\MySQLite;

class MethodRewriteConstants
{
    const METHOD_REPLACEMENTS = [
        '/DATE_SUB\\((.*?), INTERVAL (.*?)\\)/' => 'datetime(\1, \'-\2)',
        '/DATE_ADD\\((.*?), INTERVAL (.*?)\\)/' => 'datetime(\1, \'+\2)',
        '/SECOND(?=\\))/' => 'seconds\'',
        '/MINUTE(?=\\))/' => 'minutes\'',
        '/HOUR(?=\\))/' => 'hours\'',
        '/DAY(?=\\))/' => 'days\'',
        '/WEEK(?=\\))/' => 'weeks\'',
        '/MONTH(?=\\))/' => 'months\'',
        '/YEAR(?=\\))/' => 'years\'',
    ];
}
