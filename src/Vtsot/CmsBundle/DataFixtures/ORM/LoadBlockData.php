<?php
namespace Nitra\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Vtsot\CmsBundle\Entity\Block;

/**
 * LoadBlockData
 */
class LoadBlockData extends AbstractFixture implements OrderedFixtureInterface
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
        // создать блок 
        $block = new Block();
        $block->setBlockKey('contacts_top');
        $block->setName('Контакты, верх страницы');
        $block->setDescription('Блок контакты вверху страницы<br />'
            . 'Блок контакты вверху страницы<br />'
            . 'Блок контакты вверху страницы<br />'
            . 'Блок контакты вверху страницы<br />'
            );
        // persist
        $manager->persist($block);
        
        // создать блок 
        $block = new Block();
        $block->setBlockKey('contacts_bottom');
        $block->setName('Контакты, низ страницы');
        $block->setDescription('Блок контакты внизу страницы<br />'
            . 'Блок контакты внизу страницы<br />'
            . 'Блок контакты внизу страницы<br />'
            . 'Блок контакты внизу страницы<br />'
            );
        // persist
        $manager->persist($block);
        
        // сохранить
        $manager->flush();
    }
    

}
