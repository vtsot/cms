<?php
namespace Cms\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
// use Nitra\OrderBundle\Entity\OrderStatus;
// use Nitra\OrderBundle\Entity\OrderEntryStatus;
use Cms\MainBundle\Entity\Page;

/**
 * LoadPageData
 */
class LoadPageData extends AbstractFixture implements OrderedFixtureInterface
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
        
        // создать страницу
        $page = new Page();
        $page->setUrl('index');
        $page->setName('Главная страница');
        $page->setDescription("Html контент главной страницы. <br />Html контент главной страницы. <br />");
        $page->setMetaTitle("Title: Главная страница");
        $page->setMetaKeywords("Keywords: Главная страница");
        $page->setMetaDescription("Description: Главная страница");
        $page->setSwSite(true);
        $manager->persist($page);
        
        // создать страницу
        $page = new Page();
        $page->setUrl('about');
        $page->setName('О нас');
        $page->setDescription("Html контент страницы \"О нас\". <br />Html контент страницы \"О нас\". <br>");
        $page->setMetaTitle("Title: О нас");
        $page->setMetaKeywords("Keywords: О нас");
        $page->setMetaDescription("Description: О нас");
        $page->setSwSite(true);
        $manager->persist($page);
        
        // сохранить 
        $manager->flush();
    }
    

}