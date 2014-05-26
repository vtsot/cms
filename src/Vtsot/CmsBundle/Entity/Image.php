<?php
namespace Vtsot\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Vtsot\CmsBundle\Traits as CmsBehaviors;

/**
 * @ORM\Entity()
 */
class Image
{

    use ORMBehaviors\Timestampable\Timestampable,
        ORMBehaviors\Blameable\Blameable,
//        ORMBehaviors\SoftDeletable\SoftDeletable,
//        CmsBehaviors\MetaEntity,
        CmsBehaviors\DisplayEntity;
    
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     **/
    private $id;
    
    /**
     * @var integer $width
     * @ORM\Column(type="integer", options={"comment"="Ширина"})
     * @Assert\NotBlank(message="Не указана ширина изображения.")
     * @Assert\Range(min=0, max=9999)
     */
    private $width;
    
    /**
     * @var integer $height
     * @ORM\Column(type="integer", options={"comment"="Высота"})
     * @Assert\NotBlank(message="Не указана высота изображения.")
     * @Assert\Range(min=0, max=9999)
     */
    private $height;
    
    /**
     * @var string $mime
     * @ORM\Column(type="string", length=100, options={"comment"="Mime тип"})
     * @Assert\NotBlank(message="Не указан Mime тип изображения.")
     * @Assert\Length(max=100)
     **/
    private $mime;
    
    /**
     * @var string $title
     * @ORM\Column(type="string", length=255, nullable=true, options={"comment"="Title"})
     * @Assert\Length(max=255)
     **/
    private $title;
    
    /**
     * @var string $name
     * @ORM\Column(type="string", length=255, nullable=true, options={"comment"="Название"})
     * @Assert\Length(max=255)
     **/
    private $name;
    
    /**
     * @var string $originalName
     * @ORM\Column(type="string", length=255, options={"comment"="Оригинальное имя файла"})
     * @Assert\NotBlank(message="Не указано оригинальное имя файла.")
     * @Assert\Length(max=255)
     **/
    private $originalName;
    
    /**
     * @var string $fileName
     * @ORM\Column(type="string", length=255, options={"comment"="Имя файла"})
     * @Assert\NotBlank(message="Не указано имя файла.")
     * @Assert\Length(max=255)
     **/
    private $fileName;
    
    /**
     * @var string $thumb1
     * @ORM\Column(type="string", length=255, options={"comment"="Превью 1"})
     * @Assert\NotBlank(message="Не указано превью 1 для изображения.")
     * @Assert\Length(max=255)
     **/
    private $thumb1;
        
    /**
     * @var string $thumb2
     * @ORM\Column(type="string", length=255, options={"comment"="Превью 2"})
     * @Assert\NotBlank(message="Не указано превью 2 для изображения.")
     * @Assert\Length(max=255)
     **/
    private $thumb2;
    
    /**
     * @var string $thumb3
     * @ORM\Column(type="string", length=255, options={"comment"="Превью 3"})
     * @Assert\NotBlank(message="Не указано превью 3 для изображения.")
     * @Assert\Length(max=255)
     **/
    private $thumb3;
    
    /**
     * @var string $thumb4
     * @ORM\Column(type="string", length=255, options={"comment"="Превью 4"})
     * @Assert\NotBlank(message="Не указано превью 4 для изображения.")
     * @Assert\Length(max=255)
     **/
    private $thumb4;
    
    /**
     * @var string $thumb5
     * @ORM\Column(type="string", length=255, options={"comment"="Превью 5"})
     * @Assert\NotBlank(message="Не указано превью 5 для изображения.")
     * @Assert\Length(max=255)
     **/
    private $thumb5;
    

    
    
    
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
     * Set width
     *
     * @param integer $width
     * @return Image
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return integer 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     * @return Image
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set mime
     *
     * @param string $mime
     * @return Image
     */
    public function setMime($mime)
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * Get mime
     *
     * @return string 
     */
    public function getMime()
    {
        return $this->mime;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Image
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Image
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
     * Set originalName
     *
     * @param string $originalName
     * @return Image
     */
    public function setOriginalName($originalName)
    {
        $this->originalName = $originalName;

        return $this;
    }

    /**
     * Get originalName
     *
     * @return string 
     */
    public function getOriginalName()
    {
        return $this->originalName;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     * @return Image
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set thumb1
     *
     * @param string $thumb1
     * @return Image
     */
    public function setThumb1($thumb1)
    {
        $this->thumb1 = $thumb1;

        return $this;
    }

    /**
     * Get thumb1
     *
     * @return string 
     */
    public function getThumb1()
    {
        return $this->thumb1;
    }

    /**
     * Set thumb2
     *
     * @param string $thumb2
     * @return Image
     */
    public function setThumb2($thumb2)
    {
        $this->thumb2 = $thumb2;

        return $this;
    }

    /**
     * Get thumb2
     *
     * @return string 
     */
    public function getThumb2()
    {
        return $this->thumb2;
    }

    /**
     * Set thumb3
     *
     * @param string $thumb3
     * @return Image
     */
    public function setThumb3($thumb3)
    {
        $this->thumb3 = $thumb3;

        return $this;
    }

    /**
     * Get thumb3
     *
     * @return string 
     */
    public function getThumb3()
    {
        return $this->thumb3;
    }

    /**
     * Set thumb4
     *
     * @param string $thumb4
     * @return Image
     */
    public function setThumb4($thumb4)
    {
        $this->thumb4 = $thumb4;

        return $this;
    }

    /**
     * Get thumb4
     *
     * @return string 
     */
    public function getThumb4()
    {
        return $this->thumb4;
    }

    /**
     * Set thumb5
     *
     * @param string $thumb5
     * @return Image
     */
    public function setThumb5($thumb5)
    {
        $this->thumb5 = $thumb5;

        return $this;
    }

    /**
     * Get thumb5
     *
     * @return string 
     */
    public function getThumb5()
    {
        return $this->thumb5;
    }

}
