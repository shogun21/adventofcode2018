<?php

	$input = fopen('input', 'r');

	$position = 0;
	while (($line = fgets($input)) !== false) {
		$position += (int) $line;
	}

	echo "Final Position: {$position}\n";

	fclose($input);