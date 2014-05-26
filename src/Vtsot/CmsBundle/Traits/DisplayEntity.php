<?php
namespace Vtsot\CmsBundle\Traits;

/**
 * DisplayEntity
 */
trait DisplayEntity
{

    /**
     * @var string $rank
     * @ORM\Column(type="integer", nullable=true, options={"comment"="Индекс сортировки"})
     * @Assert\Range(min=1, max=9999999)
     **/
    private $rank = 1000;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", options={"comment"="Отображение на сайте"})
     **/
    private $swSite = true;
    
    /**
     * Set rank
     *
     * @param integer $rank
     * @return Page
     */
    public function setRank($rank = null)
    {
        $this->rank = $rank;
        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set swSite
     *
     * @param boolean $swSite
     * @return Page
     */
    public function setSwSite($swSite)
    {
        $this->swSite = $swSite;
    
        return $this;
    }

    /**
     * Get swSite
     *
     * @return boolean 
     */
    public function getSwSite()
    {
        return $this->swSite;
    }
    
    /**
     * Получить отображается ли сущность
     * @return boolean
     */
    public function isDisplay()
    {
        // вернуть отображение сущности
        return ($this->swSite) 
            ? true
            : false;
    }

}