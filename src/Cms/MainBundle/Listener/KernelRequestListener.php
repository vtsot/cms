<?php
namespace Cms\MainBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\DependencyInjection\Container;
use Cms\MainBundle\Lib\Globals;

/**
 * @Service
 */
class KernelRequestListener 
{
    
    /**
     * Конструктор
     */
    function __construct(Container $container)
    {
        // установить контейнер 
        Globals::$container = $container;
        
        // установить EntityManager
        Globals::$em = $container->get('doctrine')->getManager();
    }
    
    /**
     * @Observe("kernel.request")
     */
    public function onKernelRequest(GetResponseEvent $event) 
    {
        
    }

    
}