<?php

// phpcs:disable Generic.Files.LineLength

global $sgAutoloadLocalNamespaces;

global $sgAutoloadLocalClasses;

$sgAutoloadLocalNamespaces = array(
	'Tkufd\\' => __DIR__ . '/src',
);

$sgAutoloadLocalClasses = array(
	'Tkufd\\Config\\DefaultConfig' => __DIR__ . '/src/Config/DefaultConfig.php',
	'Tkufd\\Output\\BankPage' => __DIR__ . '/src/Output/BankPage.php',
	'Tkufd\\Output\\ErrorPage' => __DIR__ . '/src/Output/ErrorPage.php',
	'Tkufd\\Output\\MainPage' => __DIR__ . '/src/Output/MainPage.php',
	'Tkufd\\Output\\Page' => __DIR__ . '/src/Output/Page.php',
	'Tkufd\\Output\\PageFactory' => __DIR__ . '/src/Output/PageFactory.php',
	'Tkufd\\Services\\TkufdServices' => __DIR__ . '/src/Services/TkufdServices.php',
	'Tkufd\\Title\\Title' => __DIR__ . '/src/Title/Title.php',
	'Tkufd\\Web\\Request' => __DIR__ . '/src/Web/Request.php',
	'Tkufd\\Web\\Request' => __DIR__ . '/src/Web/Start.php',
);
