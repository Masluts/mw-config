<?php
wfLoadExtensions( [	
    	'AbuseFilter',
//	'AntiSpoof',
	'BetaFeatures',
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
	'Interwiki',
	'LocalisationUpdate',
        'MaamediaMessages',
	'Nuke',
	'OATHAuth',
	'OAuth',
	'ParserFunctions',
	'PdfHandler',
	'RelatedArticles',
	'Renameuser',
	'Scribunto',
	'SpamBlacklist',
	'SyntaxHighlight_GeSHi',
	'TorBlock',
	'UserMerge',
	'WikiEditor',
	// 'cldr'
] );
$wgScribuntoDefaultEngine = 'luastandalone';
$wgScribuntoUseGeSHi = true;
$wgScribuntoUseCodeEditor = true;
