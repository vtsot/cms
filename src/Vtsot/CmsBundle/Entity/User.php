<?php
namespace Vtsot\CmsBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="Почтовый ящик уже используется")
 * @UniqueEntity(fields="username", message="Логин уже используется")
 */
class User extends BaseUser
{
    
    use ORMBehaviors\Timestampable\Timestampable,
        ORMBehaviors\Blameable\Blameable,
        ORMBehaviors\SoftDeletable\SoftDeletable;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
//    /**
//     * @var string $firstname
//     * @ORM\Column(name="firstname", type="string", length=255)
//     * @Assert\NotBlank()
//     * @Assert\Length(max=255)
//     */
//    private $firstname;
//        
//    /**
//     * @var string $lastname
//     *
//     * @ORM\Column(name="lastname", type="string", length=255)
//     * @Assert\NotBlank()
//     * @Assert\Length(max=255)
//     */
//    private $lastname;
    
//    /**
//     * object to string
//     * @return string
//     */
//    public function __toString() {
//        return (string)$this->firstname . ' ' . (string)$this->lastname;
//    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
}
