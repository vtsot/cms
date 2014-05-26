<?php
namespace Nitra\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Vtsot\CmsBundle\Entity\User;

/**
 * LoadUserData
 */
class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{  
    
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 0;
    }
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        // создать пользователя
        $user1 = new User();
        $user1->setUsername('admin');
        $user1->setPlainPassword('admin');
        $user1->setSuperAdmin(true);
        $user1->setEnabled(true);
        $user1->setEmail('ad@ad.ad');
        $manager->persist($user1);
        
        // создать пользователя
        $user2 = new User();
        $user2->setUsername('vtsot');
        $user2->setPlainPassword('vtsot');
        $user2->setSuperAdmin(true);
        $user2->setEnabled(true);
        $user2->setEmail('vtsot@ya.ru');
        $manager->persist($user2);
        
        // создать пользователя
        $user3 = new User();
        $user3->setUsername('dbezgin');
        $user3->setPlainPassword('dbezgin');
        $user3->setSuperAdmin(true);
        $user3->setEnabled(true);
        $user3->setEmail('alphastudio@mail.ru');
        $manager->persist($user3);
        
        // сохранить
        $manager->flush();
    }
    

}
