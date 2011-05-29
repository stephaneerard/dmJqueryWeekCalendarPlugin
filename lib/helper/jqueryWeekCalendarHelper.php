<?php
function jq_week_calendar($response, $user)
{
	$response->addJavascript('lib.ui-button');
	$response->addJavascript('lib.ui-datepicker');
	$response->addJavascript('/dmCorePlugin/lib/jquery-ui/js/i18n/jquery-ui-i18n.js');
	$response->addJavascript('/dmCorePlugin/lib/jquery-ui/js/i18n/jquery.ui.datepicker-' . $user->getCulture() . '.js');
	
	$response->addJavascript('/dmJqueryWeekCalendarPlugin/lib/jquery-week-calendar/jquery.weekcalendar.js');
	$response->addStylesheet('/dmJqueryWeekCalendarPlugin/lib/jquery-week-calendar/jquery.weekcalendar.css');
}