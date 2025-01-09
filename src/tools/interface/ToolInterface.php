<?php
namespace Aequation\ToolsBundle\tools\interface;

use Stringable;

interface ToolInterface extends Stringable
{

    public function __toString(): string;
    public function getName(): string;
    

}