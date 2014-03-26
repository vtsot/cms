<?php
namespace Vtsot\CmsBundle\Traits;

/**
 * MetaEntity
 */
trait MetaEntity
{

    /**
     * @var string $name
     * @ORM\Column(type="string", length=255, nullable=true, options={"comment"="Мета title"})
     * @Assert\Length(max=255)
     **/
    private $metaTitle;

    /**
     * @var string $name
     * @ORM\Column(type="string", length=255, nullable=true, options={"comment"="Мета keywords"})
     * @Assert\Length(max=255)
     **/
    private $metaKeywords;

    /**
     * @var string $name
     * @ORM\Column(type="string", length=255, nullable=true, options={"comment"="Мета description"})
     * @Assert\Length(max=255)
     **/
    private $metaDescription;
    
    /**
     * Set metaTitle
     * @param string $metaTitle
     * @return Page
     */
    public function setMetaTitle($metaTitle = null)
    {
        $this->metaTitle = $metaTitle;
        return $this;
    }

    /**
     * Get metaTitle
     * @return string 
     */
    public function getMetaTitle()
    {
        return $this->metaTitle;
    }

    /**
     * Set metaKeywords
     * @param string $metaKeywords
     * @return Page
     */
    public function setMetaKeywords($metaKeywords = null)
    {
        $this->metaKeywords = $metaKeywords;
        return $this;
    }

    /**
     * Get metaKeywords
     * @return string 
     */
    public function getMetaKeywords()
    {
        return $this->metaKeywords;
    }

    /**
     * Set metaDescription
     * @param string $metaDescription
     * @return Page
     */
    public function setMetaDescription($metaDescription = null)
    {
        $this->metaDescription = $metaDescription;
        return $this;
    }

    /**
     * Get metaDescription
     * @return string 
     */
    public function getMetaDescription()
    {
        return $this->metaDescription;
    }
    
}