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
			//'baseUrl' => 'http://83.238.168.145/bip',
			//'baseUrl' => 'http://isabel.drl.pl/bip/',
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
		
		
		/*'db'=>array(
			//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
			'connectionString' => 'Server=localhost;Database=system_reputacyjny;Uid=root;Pwd=root;',
		),*/
		// uncomment the following to use a MySQL database
		/* localhost */
		
		'db'=>array(
			//'connectionString' => 'mysql:host=localhost;dbname=bip',
			'connectionString' => 'mysql:host=localhost;dbname=bonafide_bip',
			'emulatePrepare' => true,
			'username' => 'root',
			//'password' => 'Katowice1',
			'password' => '',
			'charset' => 'utf8',
		),
		/*
		'db'=>array(
					'connectionString' => 'mysql:host=localhost;dbname=isabel_bip',
					'emulatePrepare' => true,
					'username' => 'isabel_bip',
					'password' => 'k@lafio4',
					'charset' => 'utf8',
		),*/
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
		'organization'=>'Bona Fides',
		'homepage'=>'http://bonafides.pl',
		'version'=>'1.0.8',
		'noindex'=>false,
		
		'subdomains'=>array
		(
			1 => "example", 
			2 => "example2", 
			3 => "spddar",
			4 => "kontra",
			5 => "pomozmysobie",
			6 => "stowdob",
			7 => "asperger",
			8 => "pozytywnezmiany",
			9 => "mrowisko",
			10 => "naszeslaskie",
			11 => "zabrzanskiekobiety",
			12 => "piaskowysmok",
			13 => "dignam",
			14 => "naprawsobiemiasto",
			15 => "babiniec",
			16 => "ceiwr",
			17 => "dlaszopienic",
			18 => "federacjaslask",
			19 => "pkegliwice",
			20 => "nereusz",
			21 => "gniazdo",
			22 => "rtpd",
		)
		
	),
);