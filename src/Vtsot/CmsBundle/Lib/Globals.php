<?php
namespace vtsot\CmsBundle\Lib;

/**
 * Globals
 * класс глобальных настроек
 */
class Globals
{
    /** 
     * @var Symfony\Component\DependencyInjection\Container 
     */
    public static $container;
    
    /**
     * @var Doctrine\ORM\EntityManager
     */
    public static $em;
    
    /**
     * Получить локаль
     * @return string
     */
    public static function getLocale()
    {
        // вернуть локаль
        return self::getContainer()->get('request')->getLocale();
    }
    
    /**
     * Получить пользователя
     * @return mixed
     * @throws \LogicException If SecurityBundle is not available
     * @see Symfony\Component\Security\Core\Authentication\Token\TokenInterface::getUser()
     */
    public static function getUser()
    {
        if (!self::$container->has('security.context')) {
            throw new \LogicException('The SecurityBundle is not registered in your application.');
        }
        
        if (null === $token = self::$container->get('security.context')->getToken()) {
            return null;
        }
        
        if (!is_object($user = $token->getUser())) {
            return null;
        }
        
        // вернуть пользователя 
        return $user;
    }
    
}