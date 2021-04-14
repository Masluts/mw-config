<?php // This is a default global extension, new extensions can be add to localextensions.php
wfLoadExtensions( [	
    	'AbuseFilter',
//	'AntiSpoof',
	'CentralNotice',
	'CheckUser',
	'ConfirmEdit',
	'DismissableSiteNotice',
	'Echo',
	'EventLogging',
	'EventStreamConfig',
	'GlobalBlocking',
	'GlobalCssJs',
	'GlobalPreferences',
	'GlobalUsage',
	'GlobalUserPage',
	'ImageMap',
	'Interwiki',
	'LocalisationUpdate',
	'Nuke',
	'OATHAuth',
	'OAuth',
	'ParserFunctions',
	'Renameuser',
	'Scribunto',
	'SpamBlacklist',
	'SyntaxHighlight_GeSHi',
	'TorBlock',
	'UserMerge',
	'WikiEditor',
] );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;
