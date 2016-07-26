<?php
namespace SimpleThings\Tests\EntityAudit\Fixtures\Issue;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Issue198Car
{
    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Issue198Owner", inversedBy="cars")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    protected $owner;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getOwner()
    {
        return $this->owner;
    }
    
    public function setOwner(Issue198Owner $owner)
    {
        $this->owner = $owner;
    }
}
