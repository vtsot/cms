<?php
namespace Nitra\ManagerBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Vtsot\CmsBundle\Entity\Page;

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
        return 0;
    }
    
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        // создать страницу
        $page = new Page();
        $page->setUrl('index');
        $page->setName('Главная страница сайта');
        $page->setMetaTitle('Мета title index');
        $page->setMetaKeywords('Мета keywords index');
        $page->setMetaDescription('Мета description index');
        $page->setAbout('Краткое описание главной страницы сайта <br />'
            . 'Краткое описание главной страницы сайта <br />'
            . 'Краткое описание главной страницы сайта <br />'
            . 'Краткое описание главной страницы сайта <br />'
            );
        $page->setDescription('Подробное описание главной страницы сайта <br />'
            . 'Подробное описание главной страницы сайта <br />'
            . 'Подробное описание главной страницы сайта <br />'
            . 'Подробное описание главной страницы сайта <br />'
            . 'Подробное описание главной страницы сайта <br />'
            . 'Подробное описание главной страницы сайта <br />'
            . 'Подробное описание главной страницы сайта <br />'
            . 'Подробное описание главной страницы сайта <br />'
            . 'Подробное описание главной страницы сайта <br />'
            . 'Подробное описание главной страницы сайта <br />'
            );
        // persist
        $manager->persist($page);
        
        // создать страницу
        $page = new Page();
        $page->setUrl('about');
        $page->setName('О нас');
        $page->setMetaTitle('Мета title about');
        $page->setMetaKeywords('Мета keywords about');
        $page->setMetaDescription('Мета description about');
        $page->setAbout('Краткое описание страницы "О нас" <br />'
            . 'Краткое описание страницы "О нас" <br />'
            . 'Краткое описание страницы "О нас" <br />'
            . 'Краткое описание страницы "О нас" <br />'
            );
        $page->setDescription('Подробное описание страницы "О нас" <br />'
            . 'Подробное описание страницы "О нас" <br />'
            . 'Подробное описание страницы "О нас" <br />'
            . 'Подробное описание страницы "О нас" <br />'
            . 'Подробное описание страницы "О нас" <br />'
            . 'Подробное описание страницы "О нас" <br />'
            . 'Подробное описание страницы "О нас" <br />'
            . 'Подробное описание страницы "О нас" <br />'
            . 'Подробное описание страницы "О нас" <br />'
            . 'Подробное описание страницы "О нас" <br />'
            );
        // persist
        $manager->persist($page);
        
        // сохранить
        $manager->flush();
    }
    

}
