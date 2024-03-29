<?php
require_once( 'Config.php' );
require_once( 'Alien.php' );

Log::$_strScript = basename( dirname( __FILE__ ) );

echo "\n<html><body><pre>\n";
echo "Super simple example!\n";

Log::always( 'This will always be logged' );
Log::info( 'This will be logged, if Config::debug is true' );
Log::error( 'This will be logged always as error' );
//Log::systemError( 'bad bad error'  );

echo "Please open php system log: " . ini_get( 'error_log' ) . "\n";
echo "and your database table: " . Config::$_DB_DB . '.' . Config::$_DB_PREFIX . Config::$_DB_DEBUG_TABLE . " !\n\n\n";
echo "</pre>\n\n";

echo Log::toHtml();

echo "</body></html>";

👽::🖖();
