<?php

if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF')) // If we are outside SMF and can't find SSI.php, then throw an error
	die('<b>Error:</b> Cannot install - please verify you put this file in the same place as SMF\'s SSI.php.');

global $smcFunc, $db_prefix;

// This is messy. Event name, incorrect date, correct date.
$dates_to_update = array(
	array('Thanksgiving', '2013-11-21', '2013-11-28'),
	array('Thanksgiving', '2014-11-20', '2014-11-27'),
	array('Thanksgiving', '2019-11-21', '2019-11-28'),
	array('Labor Day', '2013-09-09', '2013-09-02'),
	array('Labor Day', '2014-09-08', '2014-09-01'),
	array('Labor Day', '2019-09-09', '2019-09-02'),
);

// For each, we need to go through, query for that date and see if it's there.
// If the new date is already there, just delete the old one.
// If the old date is still there, fix it.
if (!empty($smcFunc['db_query']))
{
	foreach ($dates_to_update as $holiday)
	{
		list($event, $old_date, $new_date) = $holiday;
		$request = $smcFunc['db_query']('', '
			SELECT id_holiday
			FROM {db_prefix}calendar_holidays
			WHERE title = {string:event}
				AND event_date = {string:new_date}',
			array(
				'event' => $event,
				'new_date' => $new_date,
			)
		);
		if ($smcFunc['db_num_rows']($request) == 0)
		{
			$smcFunc['db_query']('', '
				UPDATE {db_prefix}calendar_holidays
				SET event_date = {string:new_date}
				WHERE title = {string:event}
					AND event_date = {string:old_date}',
				array(
					'new_date' => $new_date,
					'event' => $event,
					'old_date' => $old_date,
				)
			);
		}
		else
		{
			$smcFunc['db_query']('', '
				DELETE FROM {db_prefix}calendar_holidays
				WHERE title = {string:event}
					AND event_date = {string:old_date}',
				array(
					'event' => $event,
					'old_date' => $old_date,
				)
			);
		}
	}
}
else
{
	die('Could not find suitable database connection. Please contact simplemachines.org for support.');
}

// Are we done?
if (SMF == 'SSI')
	echo 'Database changes are complete!';
?>