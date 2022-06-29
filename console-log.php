<?php
namespace Grav\Plugin;
use \Grav\Common\Plugin;
class ConsoleLogPlugin extends Plugin
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigInitialized' => ['onTwigInitialized', 0]
        ];
    }
    public function onTwigInitialized()
    {
      $this->grav['twig']->twig()->addFunction(
        new \Twig_SimpleFunction('conlog', [$this, 'conlogFunction'])
      );
    }
    public function conlogFunction(string $input)
    {
      $encoded = htmlspecialchars($input);
      echo "<script type='text/JavaScript'>console.log('$encoded');</script>";
    }
}
