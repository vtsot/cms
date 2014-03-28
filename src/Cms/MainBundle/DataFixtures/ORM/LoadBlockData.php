<?php
namespace Cms\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Cms\MainBundle\Entity\Block;

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
        return 0; // the order in which fixtures will be loaded
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
        $block->setDescription("Html контент блока контакты верх.<br />Html контент блока контакты верх. <br />");
        $block->setSwSite(true);
        $manager->persist($block);
        
        // создать блок
        $block = new Block();
        $block->setBlockKey('contacts_bottom');
        $block->setName('Контакты, низ страницы');
        $block->setDescription("Html контент блока контакты низ.<br />Html контент блока контакты низ. <br />");
        $block->setSwSite(true);
        $manager->persist($block);
       
        // сохранить 
        $manager->flush();
    }
    

}