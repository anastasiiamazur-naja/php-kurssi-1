<?php

function first_function(string $word): string
{
    return $word . " World!";
}

function second(): float
{
    return 123.30;
}

function third(string $letter): array
{
    return ['A', 'B', $letter];
}

function fourth(int $a, int $b): int
{
	return $a + $b;
}
