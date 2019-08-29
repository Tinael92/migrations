<?
require(dirname(dirname(__DIR__)) . "/bitrix/vendor/autoload.php");
Arrilot\BitrixMigrations\Autocreate\Manager::init($_SERVER["DOCUMENT_ROOT"].'/local/migrations');