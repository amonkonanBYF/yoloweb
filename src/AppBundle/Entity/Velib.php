<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Velib
 *
 * @ORM\Table(name="velib")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VelibRepository")
 */
class Velib
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
     * @var string|null
     *
     * @ORM\Column(name="COL1", type="string", length=255, nullable=true)
     */
    private $col1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COL2", type="string", length=255, nullable=true)
     */
    private $col2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COL3", type="string", length=255, nullable=true)
     */
    private $col3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COL4", type="string", length=255, nullable=true)
     */
    private $col4;

    /**
     * @return null|string
     */
    public function getCol3()
    {
        return $this->col3;
    }

    /**
     * @param null|string $col3
     */
    public function setCol3($col3)
    {
        $this->col3 = $col3;
    }

    /**
     * @return null|string
     */
    public function getCol4()
    {
        return $this->col4;
    }

    /**
     * @param null|string $col4
     */
    public function setCol4($col4)
    {
        $this->col4 = $col4;
    }

    /**
     * @return null|string
     */
    public function getCol5()
    {
        return $this->col5;
    }

    /**
     * @param null|string $col5
     */
    public function setCol5($col5)
    {
        $this->col5 = $col5;
    }

    /**
     * @return null|string
     */
    public function getCol6()
    {
        return $this->col6;
    }

    /**
     * @param null|string $col6
     */
    public function setCol6($col6)
    {
        $this->col6 = $col6;
    }

    /**
     * @return null|string
     */
    public function getCol7()
    {
        return $this->col7;
    }

    /**
     * @param null|string $col7
     */
    public function setCol7($col7)
    {
        $this->col7 = $col7;
    }

    /**
     * @return null|string
     */
    public function getCol8()
    {
        return $this->col8;
    }

    /**
     * @param null|string $col8
     */
    public function setCol8($col8)
    {
        $this->col8 = $col8;
    }

    /**
     * @var string|null
     *
     * @ORM\Column(name="COL5", type="string", length=255, nullable=true)
     */
    private $col5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COL6", type="string", length=255, nullable=true)
     */
    private $col6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COL7", type="string", length=255, nullable=true)
     */
    private $col7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="COL8", type="string", length=255, nullable=true)
     */
    private $col8;


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
     * Set col1.
     *
     * @param string|null $col1
     *
     * @return Velib
     */
    public function setCol1($col1 = null)
    {
        $this->col1 = $col1;

        return $this;
    }

    /**
     * Get col1.
     *
     * @return string|null
     */
    public function getCol1()
    {
        return $this->col1;
    }

    /**
     * Set col2.
     *
     * @param string|null $col2
     *
     * @return Velib
     */
    public function setCol2($col2 = null)
    {
        $this->col2 = $col2;

        return $this;
    }

    /**
     * Get col2.
     *
     * @return string|null
     */
    public function getCol2()
    {
        return $this->col2;
    }
}
