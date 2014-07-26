<?php

namespace IFC\IfcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Curso
 *
 * @ORM\Table(name="curso", indexes={@ORM\Index(name="fk_curso_modalidade1_idx", columns={"modalidade_id"})})
 * @ORM\Entity
 */
class Curso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="grau", type="string", length=45, nullable=true)
     */
    private $grau;

    /**
     * @var \Modalidade
     *
     * @ORM\ManyToOne(targetEntity="Modalidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modalidade_id", referencedColumnName="id")
     * })
     */
    private $modalidade;



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
     * Set nome
     *
     * @param string $nome
     * @return Curso
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set grau
     *
     * @param string $grau
     * @return Curso
     */
    public function setGrau($grau)
    {
        $this->grau = $grau;

        return $this;
    }

    /**
     * Get grau
     *
     * @return string 
     */
    public function getGrau()
    {
        return $this->grau;
    }

    /**
     * Set modalidade
     *
     * @param \IFC\IfcBundle\Entity\Modalidade $modalidade
     * @return Curso
     */
    public function setModalidade(\IFC\IfcBundle\Entity\Modalidade $modalidade = null)
    {
        $this->modalidade = $modalidade;

        return $this;
    }

    /**
     * Get modalidade
     *
     * @return \IFC\IfcBundle\Entity\Modalidade 
     */
    public function getModalidade()
    {
        return $this->modalidade;
    }
}
