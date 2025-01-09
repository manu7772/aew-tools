<?php
namespace Aequation\ToolsBundle\tools;

use Aequation\ToolsBundle\tools\Base\BaseTool;

class HttpRequest implements BaseTool
{

    public function __toString(): string
    {
        return Objects::getShortname(static::class, false);
    }


    /*************************************************************************************
     * IP
     *************************************************************************************/

    public static function getIp(): ?string
    {
        return $_SERVER['REMOTE_ADDR'] ?? null;
    }

    /*************************************************************************************
     * CLI
     *************************************************************************************/

    /**
     * Is command line
     * @see PHP php_sapi_name() or PHP_SAPI
     */
    public static function isCli(): bool
    {
        return strtolower(PHP_SAPI) === 'cli';
    }



}