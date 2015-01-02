<?php

/*
 * PHP Server Monitor v2.0.1
 * Monitor your servers with error notification
 * http://phpservermon.sourceforge.net/
 *
 * Copyright (c) 2008-2011 Pepijn Over (ipdope@users.sourceforge.net)
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 */

$sm_lang = array(
	'system' => array(
		'title' => 'Server Monitor',
		'servers' => 'servers',
		'users' => 'users',
		'log' => 'log',
		'update' => 'update',
		'config' => 'config',
		'help' => 'help',
		'action' => 'Action',
		'save' => 'Save',
		'edit' => 'Edit',
		'delete' => 'Delete',
		'deleted' => 'Record has been deleted',
		'date' => 'Date',
		'message' => 'Message',
		'yes' => 'Yes',
		'no' => 'No',
		'edit' => 'Edit',
		'insert' => 'Insert',
		'add_new' => 'Add new?',
		'update_available' => 'A new update is available from <a href="http://phpservermon.sourceforge.net" target="_blank">http://phpservermon.sourceforge.net</a>.',
	),
	'users' => array(
		'user' => 'user',
		'name' => 'Name',
		'mobile' => 'Mobile',
		'email' => 'Email',
		'updated' => 'User updated.',
		'inserted' => 'User added.',
	),
	'log' => array(
		'title' => 'Log entries',
		'type' => 'Type',
		'status' => 'status',
		'email' => 'email',
		'sms' => 'sms',
	),
	'servers' => array(
		'server' => 'Server',
		'label' => 'Label',
		'domain' => 'Domain/IP',
		'port' => 'Port',
		'type' => 'Type',
		'last_check' => 'Last check',
		'last_online' => 'Last online',
		'monitoring' => 'Monitoring',
		'send_email' => 'Send Email',
		'send_sms' => 'Send SMS',
		'updated' => 'Server updated.',
		'inserted' => 'Server added.',
		'rtime' => 'Response time',
	),
	'config' => array(
		'general' => 'General',
		'language' => 'Language',
		'show_update' => 'Check for new updates weekly?',
		'english' => 'English',
		'dutch' => 'Dutch',
		'french' => 'French',
		'german' => 'German',
		'email_status' => 'Allow sending email?',
		'email_from_email' => 'Email from address',
		'email_from_name' => 'Email from name',
		'sms_status' => 'Allow sending text messages?',
		'sms_gateway' => 'Gateway to use for sending messages',
		'sms_gateway_mollie' => 'Mollie',
		'sms_gateway_spryng' => 'Spryng',
		'sms_gateway_inetworx' => 'Inetworx',
		'sms_gateway_clickatell' => 'Clickatell',
		'sms_gateway_username' => 'Gateway username',
		'sms_gateway_password' => 'Gateway password',
		'sms_from' => 'Sender\'s phone number',
		'alert_type' =>
			'Select when you\'d like to be notified.<br/>'.
			'<div class="small">'.
 			'1) Status change<br/>'.
			'You will receive a notifcation when a server has a change in status. So from online -> offline or offline -> online.<br/>'.
			 '2) Offline<br/>'.
			'You will receive a notification when a server goes offline for the *FIRST TIME ONLY*. For example, '.
			'your cronjob is every 15 mins and your server goes down at 1 am and stays down till 6 am. '.
			'You will get 1 notification at 1 am and thats it.<br/>'.
			'3) Always<br/>'.
			'You will receive a notification every time the script runs and a site is down, even if the site has been '.
			'offline for hours.'.
			'</div>',

		'alert_type_status' => 'Status change',
		'alert_type_offline' => 'Offline',
		'alert_type_always' => 'Always',
		'log_status' => 'Log status<br/><div class="small">If log status is set to TRUE, the monitor will log the event whenever the Notification settings are passed</div>',
		'log_email' => 'Log emails sent by the script?',
		'log_sms' => 'Log text messages sent by the script?',
		'updated' => 'The configuration has been updated.',
		'settings_email' => 'Email settings',
		'settings_sms' => 'Text message settings',
		'settings_notification' => 'Notification settings',
		'settings_log' => 'Log settings',
		'auto_refresh_servers' =>
			'Auto-refresh servers page<br/>'.
			'<div class="small">'.
			'Time in seconds, if 0 the page won\'t refresh.'.
			'</div>',
	),
	// for newlines in the email messages use <br/>
	'notifications' => array(
		'off_sms' => 'Server \'%LABEL%\' is DOWN: ip=%IP%, port=%PORT%. Error=%ERROR%',
		'off_email_subject' => 'IMPORTANT: Server \'%LABEL%\' is DOWN',
		'off_email_body' => "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional //EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">"
. "<html><head><title></title><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />"
. "<meta name=\"viewport\" content=\"width=320, target-densitydpi=device-dpi\" />"
. "<style type=\"text/css\"> @media only screen and (max-width: 660px) {  table[class=w0], td[class=w0] { width: 0 !important; } "
. "table[class=w10], td[class=w10], img[class=w10] { width:10px !important; } table[class=w15], td[class=w15], img[class=w15] { width:5px !important; } "
. "table[class=w30], td[class=w30], img[class=w30] { width:10px !important; } table[class=w60], td[class=w60], img[class=w60] { width:10px !important; }"
. "table[class=w125], td[class=w125], img[class=w125] { width:80px !important; } table[class=w130], td[class=w130], img[class=w130] { width:55px !important; }"
. "table[class=w140], td[class=w140], img[class=w140] { width:90px !important; } table[class=w160], td[class=w160], img[class=w160] { width:180px !important; } "
. "table[class=w170], td[class=w170], img[class=w170] { width:100px !important; } table[class=w180], td[class=w180], img[class=w180] { width:80px !important; } "
. "table[class=w195], td[class=w195], img[class=w195] { width:80px !important; } table[class=w220], td[class=w220], img[class=w220] { width:80px !important; } "
. "table[class=w240], td[class=w240], img[class=w240] { width:180px !important; } table[class=w255], td[class=w255], img[class=w255] { width:185px !important; } "
. "table[class=w275], td[class=w275], img[class=w275] { width:135px !important; } table[class=w280], td[class=w280], img[class=w280] { width:135px !important; } "
. "table[class=w300], td[class=w300], img[class=w300] { width:140px !important; } table[class=w325], td[class=w325], img[class=w325] { width:95px !important; } "
. "table[class=w360], td[class=w360], img[class=w360] { width:140px !important; } table[class=w410], td[class=w410], img[class=w410] { width:180px !important; } "
. "table[class=w470], td[class=w470], img[class=w470] { width:200px !important; } table[class=w580], td[class=w580], img[class=w580] { width:280px !important; } "
. "table[class=w640], td[class=w640], img[class=w640] { width:300px !important; } table[class*=hide], td[class*=hide], img[class*=hide], p[class*=hide], span[class*=hide] { display:none !important; } "
. "table[class=h0], td[class=h0] { height: 0 !important; } p[class=footer-content-left] { text-align: center !important; } #headline p { font-size: 30px !important; }"
. ".article-content, #left-sidebar{ -webkit-text-size-adjust: 90% !important; -ms-text-size-adjust: 90% !important; } .header-content, .footer-content-left {-webkit-text-size-adjust: 80% !important; -ms-text-size-adjust: 80% !important;} img { height: auto; line-height: 100%;}  }"
. "  #outlook a { padding: 0; }	 body { width: 100% !important; } .ReadMsgBody { width: 100%; } .ExternalClass { width: 100%; display:block !important; }  body { background-color: #dedede; margin: 0; padding: 0; } img { outline: none; text-decoration: none; display: block;} br, strong br, b br, em br, i br { line-height:100%; } h1, h2, h3, h4, h5, h6 { line-height: 100% !important; -webkit-font-smoothing: antialiased; } h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color: blue !important; } "
. "h1 a:active, h2 a:active,  h3 a:active, h4 a:active, h5 a:active, h6 a:active {	color: red !important; } h1 a:visited, h2 a:visited,  h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited { color: purple !important; }    table td, table tr { border-collapse: collapse; } .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited, .yshortcuts a:hover, .yshortcuts a span { color: black; text-decoration: none !important; border-bottom: none !important; background: none !important; }	"
. " code {   white-space: normal;   word-break: break-all; } #background-table { background-color: #dedede; }"
. " #top-bar { border-radius:6px 6px 0px 0px; -moz-border-radius: 6px 6px 0px 0px; -webkit-border-radius:6px 6px 0px 0px; -webkit-font-smoothing: antialiased; background-color: #c7c7c7; color: #ededed; } #top-bar a { font-weight: bold; color: #ffffff; text-decoration: none;} #footer { border-radius:0px 0px 6px 6px; -moz-border-radius: 0px 0px 6px 6px; -webkit-border-radius:0px 0px 6px 6px; -webkit-font-smoothing: antialiased; } "
. "body, td { font-family: 'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif; } .header-content, .footer-content-left, .footer-content-right { -webkit-text-size-adjust: none; -ms-text-size-adjust: none; } .header-content { font-size: 12px; color: #ededed; } .header-content a { font-weight: bold; color: #ffffff; text-decoration: none; } #headline p { color: #444444; font-family: 'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif; font-size: 36px; text-align: center; margin-top:0px; margin-bottom:30px; }"
. " #headline p a { color: #444444; text-decoration: none; } .article-title { font-size: 18px; line-height:24px; color: #482ce8; font-weight:bold; margin-top:0px; margin-bottom:18px; font-family: 'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif; } .article-title a { color: #482ce8; text-decoration: none; } .article-title.with-meta {margin-bottom: 0;} .article-meta { font-size: 13px; line-height: 20px; color: #ccc; font-weight: bold; margin-top: 0;} .article-content { font-size: 13px;"
. " line-height: 18px; color: #444444; margin-top: 0px; margin-bottom: 18px; font-family: 'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif; } .article-content a { color: #2f82de; font-weight:bold; text-decoration:none; } .article-content img { max-width: 100% }"
. " .article-content ol, .article-content ul { margin-top:0px; margin-bottom:18px; margin-left:19px; padding:0; } .article-content li { font-size: 13px; line-height: 18px; color: #444444; } .article-content li a { color: #2f82de; text-decoration:underline; }"
. " .article-content p {margin-bottom: 15px;} .footer-content-left { font-size: 12px; line-height: 15px; color: #ededed; margin-top: 0px; margin-bottom: 15px; } .footer-content-left a { color: #ffffff; font-weight: bold; text-decoration: none; } "
. ".footer-content-right { font-size: 11px; line-height: 16px; color: #ededed; margin-top: 0px; margin-bottom: 15px; } .footer-content-right a { color: #ffffff; font-weight: bold; text-decoration: none; }"
. " #footer { background-color: #c7c7c7; color: #ededed; } #footer a { color: #ffffff; text-decoration: none; font-weight: bold; } #permission-reminder { white-space: normal; } #street-address { color: #b0b0b0; white-space: normal; } </style>"
. " <!--[if gte mso 9]> <style _tmplitem=\"374\" > .article-content ol, .article-content ul {    margin: 0 0 0 24px !important;    padding: 0 !important;    list-style-position: inside !important; } </style> "
. "<![endif]--><meta name=\"robots\" content=\"noindex,nofollow\"></meta> <meta property=\"og:title\" content=\"Monitor\"></meta>"
. "</head><body style=\"width:100% !important;background-color:#dedede;margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;\" ><table id=\"background-table\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"background-color:#dedede;\" ><tbody><tr style=\"border-collapse:collapse;\" >"
. "<td align=\"center\" bgcolor=\"#dedede\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" >"
. "<table class=\"w640\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"640\" style=\"margin-top:0;margin-bottom:0;margin-right:10px;margin-left:10px;\" >"
. "<tbody><tr style=\"border-collapse:collapse;\" ><td class=\"w640\" height=\"20\" width=\"640\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr>"
. "<tr style=\"border-collapse:collapse;\" ><td class=\"w640\" width=\"640\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" >"
. "<table id=\"top-bar\" class=\"w640\" bgcolor=\"#ffffff\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"640\" style=\"border-radius:6px 6px 0px 0px;-moz-border-radius:6px 6px 0px 0px;-webkit-border-radius:6px 6px 0px 0px;-webkit-font-smoothing:antialiased;background-color:#c7c7c7;color:#ededed;\" ><tbody><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w15\" width=\"15\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td>"
. "<td class=\"w325\" align=\"left\" valign=\"middle\" width=\"350\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ><table class=\"w325\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"350\"><tbody>"
. "<tr style=\"border-collapse:collapse;\" ><td class=\"w325\" height=\"8\" width=\"350\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr></tbody></table>"
. "<div class=\"header-content\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:12px;color:#ededed;\" >&nbsp;</div><table class=\"w325\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"350\"><tbody><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w325\" height=\"8\" width=\"350\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr></tbody></table>"
. "</td><td class=\"w30\" width=\"30\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td>"
. "<td class=\"w255\" align=\"right\" valign=\"middle\" width=\"255\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" >"
. "<table class=\"w255\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"255\"><tbody><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w255\" height=\"8\" width=\"255\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" >"
. "</td></tr></tbody></table><table border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tbody><tr style=\"border-collapse:collapse;\">"
. "</tr></tbody></table><table class=\"w255\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"255\"><tbody><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w255\" height=\"8\" width=\"255\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\"></td></tr></tbody></table>"
. "</td><td class=\"w15\" width=\"15\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr></tbody></table></td></tr><tr style=\"border-collapse:collapse;\" >"
. "<td id=\"header\" class=\"w640\" align=\"center\" bgcolor=\"#ffffff\" width=\"640\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ><div  align=\"left\" style=\"text-align:left;padding:10px 0 0 10px;\" >"
. "<img id=\"customHeaderImage\" label=\"Header Image\" src=\"https://cloud.pebblejet.com/pjlogo.png\" class=\"w640\"  align=\"top\" border=\"0\" width=\"234\" style=\"display:inline;outline-style:none;text-decoration:none;\" /></div></td></tr><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w640\" bgcolor=\"#ffffff\" height=\"30\" width=\"640\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr><tr id=\"simple-content-row\" style=\"border-collapse:collapse;\" >"
. "<td class=\"w640\" bgcolor=\"#ffffff\" width=\"640\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" >"
. "<table class=\"w640\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"640\"><tbody><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w30\" width=\"30\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td>"
. "<td class=\"w580\" width=\"580\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" >"
. "<table class=\"w580\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"580\"><tbody><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w580\" width=\"580\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" >"
. "<p class=\"article-title\" align=\"left\" style=\"font-size:18px;line-height:24px;color:#482ce8;font-weight:bold;margin-top:0px;margin-bottom:18px;font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;\" >PebbleJet Monitor Status</p>"
. "<div class=\"article-content\" align=\"left\" style=\"font-size:13px;line-height:18px;color:#444444;margin-top:0px;margin-bottom:18px;font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;\" >"
. "<p style=\"text-align:left;margin-bottom:15px;\" ><span style=\"font-size:14px;\" >Application Name : %LABEL% </span></p> "
. "<p style=\"text-align:left;margin-bottom:15px;\" ><span style=\"font-size:14px;\" >Application URL : %IP% </span></p> "
. "<p style=\"text-align:left;margin-bottom:15px;\" ><span style=\"font-size:14px;\" >Status : Not Connected</span></p> "
. "<p style=\"text-align:left;margin-bottom:15px;\" ><span style=\"font-size:14px;\" >Error : %ERROR% </span></p>"
. " <p style=\"text-align:left;margin-bottom:15px;\" ><span style=\"font-size:14px;\" >Comments : Cannot be connected.Please restart the server (or) check the URL for more Information</span></p>"
. "<p style=\"text-align:left;margin-bottom:15px;\" ><span style=\"font-size:14px;\" >Time Stamp : %DATE% </span></p></div></td></tr><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w580\" height=\"10\" width=\"580\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr></tbody></table>"
. "</td><td class=\"w30\" width=\"30\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr></tbody></table></td></tr><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w640\" bgcolor=\"#ffffff\" height=\"15\" width=\"640\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w640\" width=\"640\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" >"
. "<table id=\"footer\" class=\"w640\" bgcolor=\"#c7c7c7\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"640\" style=\"border-radius:0px 0px 6px 6px;-moz-border-radius:0px 0px 6px 6px;-webkit-border-radius:0px 0px 6px 6px;-webkit-font-smoothing:antialiased;background-color:#c7c7c7;color:#ededed;\" ><tbody>"
. "<tr style=\"border-collapse:collapse;\" ><td class=\"w30\" width=\"30\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td>"
. "<td class=\"w580 h0\" height=\"30\" width=\"360\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td>"
. "<td class=\"w0\" width=\"60\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td><td class=\"w0\" width=\"160\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td>"
. "<td class=\"w30\" width=\"30\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr><tr style=\"border-collapse:collapse;\" >"
. "<td class=\"w30\" width=\"30\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td>"
. "<td class=\"w580\" valign=\"top\" width=\"360\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" >"
. "<span class=\"hide\"><p id=\"permission-reminder\" class=\"footer-content-left\" align=\"left\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:12px;line-height:15px;color:#ededed;margin-top:0px;margin-bottom:15px;white-space:normal;\" >"
. "<span></span></p></span></td><td class=\"hide w0\" width=\"60\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td>"
. "<td class=\"hide w0\" valign=\"top\" width=\"160\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\">"
. "<p id=\"street-address\" class=\"footer-content-right\" align=\"right\" style=\"-webkit-text-size-adjust:none;-ms-text-size-adjust:none;font-size:11px;line-height:16px;margin-top:0px;margin-bottom:15px;color:#b0b0b0;white-space:normal;\" ></p></td>"
. "<td class=\"w30\" width=\"30\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr></tbody></table></td></tr>"
. "<tr style=\"border-collapse:collapse;\" ><td class=\"w640\" height=\"60\" width=\"640\" style=\"font-family:'Helvetica Neue', Arial, Helvetica, Geneva, sans-serif;border-collapse:collapse;\" ></td></tr></tbody></table></td></tr></tbody></table></body></html> ",
		'on_sms' => 'Server \'%LABEL%\' is RUNNING: ip=%IP%, port=%PORT%',
		'on_email_subject' => 'IMPORTANT: Server \'%LABEL%\' is RUNNING',
		'on_email_body' => "Server '%LABEL%' is running again:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Date: %DATE%",
		'off_message' => "Server '%LABEL%' is Not running:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>ERROR: %ERROR%<br/>Date: %DATE%",
		'on_message' => "Server '%LABEL%' is running again:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Date: %DATE%",
	),
);

?>