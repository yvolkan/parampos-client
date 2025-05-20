<?php

namespace Param\PhpSdk\Features;

use Param\PhpSdk\Features\G;

class Config extends G
{
    public $version = "v2.0.0";
    public string $URL;
    public string $GUID;
    public object $G;
    private static $instance = null;

    
    private function __construct($URL, $CLIENT_CODE, $CLIENT_USERNAME, $CLIENT_PASSWORD, $GUID)
    {
        $this->URL = $URL;
        $this->CLIENT_CODE = $CLIENT_CODE;
        $this->CLIENT_USERNAME = $CLIENT_USERNAME;
        $this->CLIENT_PASSWORD = $CLIENT_PASSWORD;
        $this->GUID = $GUID;
    }

    public static function set(array $config): void
    {
        if (self::$instance === null) {
            self::$instance = new self(
                $config['URL'],
                $config['CLIENT_CODE'],
                $config['CLIENT_USERNAME'],
                $config['CLIENT_PASSWORD'],
                $config['GUID']
            );
        }
    }

    public static function getInstance(): ?self
    {
        return self::$instance;
    }
}