<?php
namespace Cms\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Admingenerator\GeneratorBundle\Traits\ValidForDelete;
use Cms\MainBundle\Traits as CmsBehaviors;

/**
 * Block
 * @ORM\Entity(repositoryClass="CmsMainBundle\Repository\BlockRepository")
 */
class Block
{
    
    use ORMBehaviors\Timestampable\Timestampable,
        ORMBehaviors\Blameable\Blameable,
        ORMBehaviors\SoftDeletable\SoftDeletable,
        ValidForDelete,
        CmsBehaviors\DisplayEntity;
     
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string $name
     * @ORM\Column(type="string", length=255, options={"comment"="Ключ блока"})
     * @Assert\Length(max=255)
     **/
    private $blockKey;
    
    /**
     * @var string $name
     * @ORM\Column(type="string", length=255, options={"comment"="Название"})
     * @Assert\NotBlank(message="Не указано название.")
     * @Assert\Length(max=255)
     **/
    private $name;
    
    /**
     * @var string $description
     * @ORM\Column(type="text", nullable=true, options={"comment"="Подробное описание"})
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
     * Set blockKey
     *
     * @param string $blockKey
     * @return Block
     */
    public function setBlockKey($blockKey)
    {
        $this->blockKey = $blockKey;
    
        return $this;
    }

    /**
     * Get blockKey
     *
     * @return string 
     */
    public function getBlockKey()
    {
        return $this->blockKey;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Block
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
     * Set description
     *
     * @param string $description
     * @return Block
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