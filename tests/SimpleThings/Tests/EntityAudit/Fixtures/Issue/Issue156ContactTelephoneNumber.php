<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 23/02/2016
 * Time: 15:57
 */

namespace SimpleThings\Tests\EntityAudit\Fixtures\Issue;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Issue156ContactTelephoneNumber
 * @package SimpleThings\Tests\EntityAudit\Fixtures\Issue
 * @ORM\Entity()
 */
class Issue156ContactTelephoneNumber
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue(strategy="AUTO") */
    protected $id;

    /**
     * @var Issue156Contact
     * @ORM\ManyToOne(targetEntity="Issue156Contact", inversedBy="telephoneNumbers")
     */
    private $contact;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $number;

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Issue156Contact $contact
     * @return $this
     */
    public function setContact(Issue156Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return Issue156Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }
}
