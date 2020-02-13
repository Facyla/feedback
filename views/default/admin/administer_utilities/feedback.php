<?php

/**
 * Admin listing
 */

$no_results = '<p class="mtm">' . elgg_echo('feedback:list:noopenfeedback') . '</p>';

echo elgg_list_entities([
	'types' => 'object', 'subtypes' => 'feedback', 
	//'metadata_name_value_pairs' => ['name' => 'status', 'value' => 'closed', 'operand' => '<>']
	'no_results' => $no_results,
]);

