<?php

namespace IFC\IfcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estagio
 *
 * @ORM\Table(name="estagio", indexes={@ORM\Index(name="fk_estagio_estagiario1_idx", columns={"estagiario_id"}), @ORM\Index(name="fk_estagio_empresa1_idx", columns={"empresa_id"}), @ORM\Index(name="fk_estagio_pessoa1_idx", columns={"orientador_id"}), @ORM\Index(name="fk_estagio_pessoa2_idx", columns={"superior_id"})})
 * @ORM\Entity
 */
class Estagio
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
     * @var float
     *
     * @ORM\Column(name="remuneracao", type="float", precision=10, scale=0, nullable=true)
     */
    private $remuneracao;

    /**
     * @var integer
     *
     * @ORM\Column(name="carga_horaria", type="integer", nullable=false)
     */
    private $cargaHoraria;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inicio", type="date", nullable=false)
     */
    private $inicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="final", type="date", nullable=false)
     */
    private $final;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", nullable=false)
     */
    private $status = 'Andamento';

    /**
     * @var string
     *
     * @ORM\Column(name="horario", type="string", length=100, nullable=true)
     */
    private $horario;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     * })
     */
    private $empresa;

    /**
     * @var \Estagiario
     *
     * @ORM\ManyToOne(targetEntity="Estagiario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estagiario_id", referencedColumnName="id")
     * })
     */
    private $estagiario;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orientador_id", referencedColumnName="id")
     * })
     */
    private $orientador;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="superior_id", referencedColumnName="id")
     * })
     */
    private $superior;



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
     * Set remuneracao
     *
     * @param float $remuneracao
     * @return Estagio
     */
    public function setRemuneracao($remuneracao)
    {
        $this->remuneracao = $remuneracao;

        return $this;
    }

    /**
     * Get remuneracao
     *
     * @return float 
     */
    public function getRemuneracao()
    {
        return $this->remuneracao;
    }

    /**
     * Set cargaHoraria
     *
     * @param integer $cargaHoraria
     * @return Estagio
     */
    public function setCargaHoraria($cargaHoraria)
    {
        $this->cargaHoraria = $cargaHoraria;

        return $this;
    }

    /**
     * Get cargaHoraria
     *
     * @return integer 
     */
    public function getCargaHoraria()
    {
        return $this->cargaHoraria;
    }

    /**
     * Set inicio
     *
     * @param \DateTime $inicio
     * @return Estagio
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime 
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set final
     *
     * @param \DateTime $final
     * @return Estagio
     */
    public function setFinal($final)
    {
        $this->final = $final;

        return $this;
    }

    /**
     * Get final
     *
     * @return \DateTime 
     */
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Estagio
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set horario
     *
     * @param string $horario
     * @return Estagio
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string 
     */
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set empresa
     *
     * @param \IFC\IfcBundle\Entity\Empresa $empresa
     * @return Estagio
     */
    public function setEmpresa(\IFC\IfcBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \IFC\IfcBundle\Entity\Empresa 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set estagiario
     *
     * @param \IFC\IfcBundle\Entity\Estagiario $estagiario
     * @return Estagio
     */
    public function setEstagiario(\IFC\IfcBundle\Entity\Estagiario $estagiario = null)
    {
        $this->estagiario = $estagiario;

        return $this;
    }

    /**
     * Get estagiario
     *
     * @return \IFC\IfcBundle\Entity\Estagiario 
     */
    public function getEstagiario()
    {
        return $this->estagiario;
    }

    /**
     * Set orientador
     *
     * @param \IFC\IfcBundle\Entity\Pessoa $orientador
     * @return Estagio
     */
    public function setOrientador(\IFC\IfcBundle\Entity\Pessoa $orientador = null)
    {
        $this->orientador = $orientador;

        return $this;
    }

    /**
     * Get orientador
     *
     * @return \IFC\IfcBundle\Entity\Pessoa 
     */
    public function getOrientador()
    {
        return $this->orientador;
    }

    /**
     * Set superior
     *
     * @param \IFC\IfcBundle\Entity\Pessoa $superior
     * @return Estagio
     */
    public function setSuperior(\IFC\IfcBundle\Entity\Pessoa $superior = null)
    {
        $this->superior = $superior;

        return $this;
    }

    /**
     * Get superior
     *
     * @return \IFC\IfcBundle\Entity\Pessoa 
     */
    public function getSuperior()
    {
        return $this->superior;
    }
}
