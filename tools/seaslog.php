<?php

$basePath_1 = SeasLog::getBasePath();
var_dump($basePath_1);

$t1 = SeasLog::log('info','abc');
$t2 = SeasLog::info('this is a info log');

var_dump($t1,$t2);

$lastLogger_1 = SeasLog::getLastLogger();
var_dump($lastLogger_1);

var_dump(SeasLog::getBasePath);

SeasLog::closeLoggerStream(SEASLOG_CLOSE_LOGGER_STREAM_MOD_ALL);
