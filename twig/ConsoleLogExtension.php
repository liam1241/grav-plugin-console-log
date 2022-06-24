<?php
namespace Grav\Plugin;
use Grav\Common\Twig\Extension\GravExtension;

class ConsoleLogExtension extends GravExtension
{
    public function getName()
    {
        return 'ConsoleLogExtension';
    }
    public function getFunctions(): array
    {
        return [
            new \Twig_SimpleFunction('conlog', [$this, 'conlogFunction'])
        ];
    }
    public function conlogFunction($input)
    {
        $cleaninput = filter_var($input, FILTER_SANITIZE_STRING);
        echo '<script type="text/JavaScript">console.log("' . $cleaninput . '");</script>';
    }
}
