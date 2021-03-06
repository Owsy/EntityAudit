<?php

namespace SimpleThings\Tests\EntityAudit\Fixtures\Issue;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class DuplicateRevisionFailureTestSecondaryOwner extends DuplicateRevisionFailureTestEntity
{
    /**
     * @ORM\ManyToOne(targetEntity="DuplicateRevisionFailureTestPrimaryOwner", inversedBy="secondaryOwners")
     */
    protected $primaryOwner;

    /**
     * @ORM\OneToMany(targetEntity="DuplicateRevisionFailureTestOwnedElement", mappedBy="secondaryOwner",
     *                                                                         cascade={"persist", "remove"})
     */
    protected $elements;

    public function __construct()
    {
        $this->elements = new ArrayCollection();
    }

    public function setPrimaryOwner(DuplicateRevisionFailureTestPrimaryOwner $owner)
    {
        $this->primaryOwner = $owner;
    }

    public function addElement(DuplicateRevisionFailureTestOwnedElement $element)
    {
        $element->setSecondaryOwner($this);
        $this->elements->add($element);
    }
}
