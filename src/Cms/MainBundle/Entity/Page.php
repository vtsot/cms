<?php
namespace Cms\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;

/**
 * Page
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Vtsot\CmsBundle\Repository\PageRepository")
 */
class Page
{

//    use ORMBehaviors\Timestampable\Timestampable,
//        ORMBehaviors\Blameable\Blameable,
//        ORMBehaviors\SoftDeletable\SoftDeletable;
    use \Vtsot\CmsBundle\Traits\MetaEntity;
    use \Vtsot\CmsBundle\Traits\DisplayEntity;
    
    
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     **/
    private $id;

    /**
     * @var string $name
     * @ORM\Column(type="string", length=255, nullable=true, options={"comment"="Url"})
     * @Assert\Length(max=255)
     **/
    private $url;
    
    /**
     * @var string $name
     * @ORM\Column(type="string", length=255, options={"comment"="Название"})
     * @Assert\NotBlank(message="Не указано название.")
     * @Assert\Length(max=255)
     **/
    private $name;

    /**
     * @var string $about
     * @ORM\Column(type="string", length=255, nullable=true, options={"comment"="Краткое описание"})
     **/
    private $about;
    
    /**
     * @var string $description
     * @ORM\Column(type="string", length=255, nullable=true, options={"comment"="Подробное описание"})
     **/
    private $description;
    
    
    /**
     * object to string
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getName();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Page
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Page
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set about
     *
     * @param string $about
     * @return Page
     */
    public function setAbout($about)
    {
        $this->about = $about;
    
        return $this;
    }

    /**
     * Get about
     *
     * @return string 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Page
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
}