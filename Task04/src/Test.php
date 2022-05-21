<?php

namespace PochtovAA\Task04;

function runTest()
{
    $stack1 = new Stack('1', '2', '3', '4', '5');
    echo "����1: ", $stack1->__toString(), PHP_EOL, 
	"��������� ������ top(): ", $stack1->top(), PHP_EOL, "����1 ����� ������ top(): ", $stack1->__toString(), PHP_EOL, 
	"��������� ������ pop(): ", $stack1->pop(), PHP_EOL, "����1 ����� ������ pop(): ", $stack1->__toString(), PHP_EOL;
    $stack2 = $stack1->copy();
    $stack2->push(6, 7, 8);
    echo "������� ����� ����1 ������� copy() - ����2; ���������� ����� push() �� ����2; ������� ����1 � ����2:", PHP_EOL,
	$stack1->__toString(), PHP_EOL, $stack2->__toString(), PHP_EOL;
	echo "��������� �����:", PHP_EOL;
    echo "(ab#c, ade##c) - ", compareStrings("ab#c", "ade##c"), PHP_EOL, 
	"(a#d, c) - ", compareStrings("a#d", "c"), PHP_EOL, 
	"(abc###, a#b#) - ", compareStrings("abc###", "a#b#"), PHP_EOL;
}