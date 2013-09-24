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
			'password'=>'///',
			'generatorPaths'=>array(
			'bootstrap.gii', // since 0.9.1
			),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
			'class' => 'WebUser',
		),
		'session' => array(
			'autoStart'=>true,
			'sessionName' => 'DomainSession',
		),
		'bootstrap'=>array(
		        'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
		),

        'request' => array(
			'class'=>'CHttpRequestSubDomain',
        ),

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
			'connectionString' => 'mysql:host=localhost;dbname=bipnij',
			'emulatePrepare' => true,
			'username' => 'your_username',
			'password' => 'your_password',
			'charset' => 'utf8',
		),

		'authManager'=>array(
			'class'=>'CDbAuthManager',
			'connectionID'=>'db',
		),

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
		'version'=>'1.0.18',
		'noindex'=>false,
		'subdomains'=>array
		(
			1 => "example", 
		)

	),
);