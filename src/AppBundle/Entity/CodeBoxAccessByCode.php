<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CodeBoxAccessByCode
 *
 * @ORM\Table(name="code_box_access_by_code")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CodeBoxAccessByCodeRepository")
 */
class CodeBoxAccessByCode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=55)
     */
    private $code;

    /**
     * @ORM\ManyToOne(targetEntity="CodeBox", inversedBy="accessesByCode")
     * @ORM\JoinColumn(name="code_box_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $codeBox;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return CodeBoxAccessByCode
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set code.
     *
     * @param string $code
     *
     * @return CodeBoxAccessByCode
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getCodeBox()
    {
        return $this->codeBox;
    }

    /**
     * @param mixed $codeBox
     */
    public function setCodeBox($codeBox): void
    {
        $this->codeBox = $codeBox;
    }
}
