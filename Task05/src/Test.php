<?php

namespace PochtovAA\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('������� �����', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('������ ������� �������������') . PHP_EOL;
    echo $truncater->truncate('������ ������� �������������', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('������ ������� �������������', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('������ ������� �������������', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('������ ������� �������������', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('������ ������� �������������', ['separator' => '*']) . PHP_EOL;
}