<?php

namespace IFC\IfcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estagiario
 *
 * @ORM\Table(name="estagiario", indexes={@ORM\Index(name="fk_estagiario_endereco1_idx", columns={"endereco_id"}), @ORM\Index(name="fk_estagiario_pessoa1_idx", columns={"pai_id"}), @ORM\Index(name="fk_estagiario_pessoa2_idx", columns={"mae_id"}), @ORM\Index(name="fk_estagiario_curso1_idx", columns={"curso_id"}), @ORM\Index(name="fk_estagiario_pessoa3_idx", columns={"pessoa_id"}), @ORM\Index(name="fk_estagiario_contato1_idx", columns={"contato_id"}), @ORM\Index(name="fk_estagiario_empresa1_idx", columns={"empresa_id"})})
 * @ORM\Entity
 */
class Estagiario
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
     * @ORM\Column(name="disponibilidade", type="string", length=200, nullable=true)
     */
    private $disponibilidade;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_trabalha", type="string", length=45, nullable=true)
     */
    private $horarioTrabalha;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=45, nullable=true)
     */
    private $matricula;

    /**
     * @var \Contato
     *
     * @ORM\ManyToOne(targetEntity="Contato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contato_id", referencedColumnName="id")
     * })
     */
    private $contato;

    /**
     * @var \Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso_id", referencedColumnName="id")
     * })
     */
    private $curso;

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
     * @var \Endereco
     *
     * @ORM\ManyToOne(targetEntity="Endereco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="endereco_id", referencedColumnName="id")
     * })
     */
    private $endereco;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pai_id", referencedColumnName="id")
     * })
     */
    private $pai;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mae_id", referencedColumnName="id")
     * })
     */
    private $mae;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoa_id", referencedColumnName="id")
     * })
     */
    private $pessoa;



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
     * Set disponibilidade
     *
     * @param string $disponibilidade
     * @return Estagiario
     */
    public function setDisponibilidade($disponibilidade)
    {
        $this->disponibilidade = $disponibilidade;

        return $this;
    }

    /**
     * Get disponibilidade
     *
     * @return string 
     */
    public function getDisponibilidade()
    {
        return $this->disponibilidade;
    }

    /**
     * Set horarioTrabalha
     *
     * @param string $horarioTrabalha
     * @return Estagiario
     */
    public function setHorarioTrabalha($horarioTrabalha)
    {
        $this->horarioTrabalha = $horarioTrabalha;

        return $this;
    }

    /**
     * Get horarioTrabalha
     *
     * @return string 
     */
    public function getHorarioTrabalha()
    {
        return $this->horarioTrabalha;
    }

    /**
     * Set matricula
     *
     * @param string $matricula
     * @return Estagiario
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set contato
     *
     * @param \IFC\IfcBundle\Entity\Contato $contato
     * @return Estagiario
     */
    public function setContato(\IFC\IfcBundle\Entity\Contato $contato = null)
    {
        $this->contato = $contato;

        return $this;
    }

    /**
     * Get contato
     *
     * @return \IFC\IfcBundle\Entity\Contato 
     */
    public function getContato()
    {
        return $this->contato;
    }

    /**
     * Set curso
     *
     * @param \IFC\IfcBundle\Entity\Curso $curso
     * @return Estagiario
     */
    public function setCurso(\IFC\IfcBundle\Entity\Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \IFC\IfcBundle\Entity\Curso 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set empresa
     *
     * @param \IFC\IfcBundle\Entity\Empresa $empresa
     * @return Estagiario
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
     * Set endereco
     *
     * @param \IFC\IfcBundle\Entity\Endereco $endereco
     * @return Estagiario
     */
    public function setEndereco(\IFC\IfcBundle\Entity\Endereco $endereco = null)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return \IFC\IfcBundle\Entity\Endereco 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set pai
     *
     * @param \IFC\IfcBundle\Entity\Pessoa $pai
     * @return Estagiario
     */
    public function setPai(\IFC\IfcBundle\Entity\Pessoa $pai = null)
    {
        $this->pai = $pai;

        return $this;
    }

    /**
     * Get pai
     *
     * @return \IFC\IfcBundle\Entity\Pessoa 
     */
    public function getPai()
    {
        return $this->pai;
    }

    /**
     * Set mae
     *
     * @param \IFC\IfcBundle\Entity\Pessoa $mae
     * @return Estagiario
     */
    public function setMae(\IFC\IfcBundle\Entity\Pessoa $mae = null)
    {
        $this->mae = $mae;

        return $this;
    }

    /**
     * Get mae
     *
     * @return \IFC\IfcBundle\Entity\Pessoa 
     */
    public function getMae()
    {
        return $this->mae;
    }

    /**
     * Set pessoa
     *
     * @param \IFC\IfcBundle\Entity\Pessoa $pessoa
     * @return Estagiario
     */
    public function setPessoa(\IFC\IfcBundle\Entity\Pessoa $pessoa = null)
    {
        $this->pessoa = $pessoa;

        return $this;
    }

    /**
     * Get pessoa
     *
     * @return \IFC\IfcBundle\Entity\Pessoa 
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }
}
