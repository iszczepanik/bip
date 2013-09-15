<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Biuletyn Informacji Publicznej',
	'sourceLanguage'=>'pl',
	'language'=>'pl',
	//'debug'=>true,
	// preloading 'log' component
	'preload'=>array('log','bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.CAdvancedArBehavior',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'tr@mwaj',
			'generatorPaths'=>array(
			            'bootstrap.gii', // since 0.9.1
			),
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class' => 'WebUser',
			//'identityCookie' => array('domain' => 'localhost.com')
		),
		'session' => array(
			'autoStart'=>true,
			//'cookieParams' => array('domain' => 'localhost.com'),
			'sessionName' => 'DomainSession',
		),
		'bootstrap'=>array(
		        'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
		),
		
        'request' => array(
			'class'=>'CHttpRequestSubDomain',
            //'baseUrl' => 'http://localhost/bip',
			//'baseUrl' => 'http://bonafides.pl/bip/',
        ),
		
		/*'file'=>array(
			'class'=>'application.extensions.file.CFile',
		),*/

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
					'connectionString' => 'mysql:host=localhost;dbname=bonafide_bip',
					'emulatePrepare' => true,
					'username' => 'bonafide_bip',
					'password' => 'tr@mw@j',
					'charset' => 'utf8',
		),
		'authManager'=>array(
			'class'=>'CDbAuthManager',
			'connectionID'=>'db',
		),
		/* server wehost */
		// 'db'=>array(
			// 'connectionString' => 'mysql:host=sql5.projekty.pl;dbname=isabel_sysrep-tw', 
			// 'emulatePrepare' => true,
			// 'username' => 'isabel_sysreptw',
			// 'password' => 'Ecl|p$e',
			// 'charset' => 'utf8',
		// ),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'debug'=>false,
		'organization'=>'Stowarzyszenie Bona Fides',
		'version'=>'1.0.16',
		'noindex'=>true,
		
		'subdomains'=>array
		(
			1 => "bonafides", 
		)
	),
);