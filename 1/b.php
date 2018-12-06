<?php

	$lines = file('input');

	$i = 0;
	$length = count($lines);

	$position = 0;
	$seenFrequencies = [];

	while (1) {
		$position += $lines[$i];

		if (isset($seenFrequencies[$position]))
			break;
		else
			$seenFrequencies[$position] = true;

		$i++;
		if ($i >= $length)
			$i = 0;
	}

	echo "First Frequency Seen Twice: {$position}\n";
