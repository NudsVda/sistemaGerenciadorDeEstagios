<?php

namespace IFC\IfcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pessoa
 *
 * @ORM\Table(name="pessoa", indexes={@ORM\Index(name="fk_pessoa_endereco1_idx", columns={"endereco_id"})})
 * @ORM\Entity
 */
class Pessoa
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
     * @ORM\Column(name="rg", type="string", length=45, nullable=false)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=45, nullable=false)
     */
    private $cpf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nascimento", type="datetime", nullable=false)
     */
    private $dataNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="formacao", type="string", length=45, nullable=true)
     */
    private $formacao;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Empresa", mappedBy="pessoa")
     */
    private $empresa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Contato", inversedBy="pessoa")
     * @ORM\JoinTable(name="pessoa_has_contato",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pessoa_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="contato_id", referencedColumnName="id")
     *   }
     * )
     */
    private $contato;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->empresa = new \Doctrine\Common\Collections\ArrayCollection();
        $this->contato = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * @return Pessoa
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
     * Set rg
     *
     * @param string $rg
     * @return Pessoa
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     * @return Pessoa
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set dataNascimento
     *
     * @param \DateTime $dataNascimento
     * @return Pessoa
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;

        return $this;
    }

    /**
     * Get dataNascimento
     *
     * @return \DateTime 
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set formacao
     *
     * @param string $formacao
     * @return Pessoa
     */
    public function setFormacao($formacao)
    {
        $this->formacao = $formacao;

        return $this;
    }

    /**
     * Get formacao
     *
     * @return string 
     */
    public function getFormacao()
    {
        return $this->formacao;
    }

    /**
     * Set endereco
     *
     * @param \IFC\IfcBundle\Entity\Endereco $endereco
     * @return Pessoa
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
     * Add empresa
     *
     * @param \IFC\IfcBundle\Entity\Empresa $empresa
     * @return Pessoa
     */
    public function addEmpresa(\IFC\IfcBundle\Entity\Empresa $empresa)
    {
        $this->empresa[] = $empresa;

        return $this;
    }

    /**
     * Remove empresa
     *
     * @param \IFC\IfcBundle\Entity\Empresa $empresa
     */
    public function removeEmpresa(\IFC\IfcBundle\Entity\Empresa $empresa)
    {
        $this->empresa->removeElement($empresa);
    }

    /**
     * Get empresa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Add contato
     *
     * @param \IFC\IfcBundle\Entity\Contato $contato
     * @return Pessoa
     */
    public function addContato(\IFC\IfcBundle\Entity\Contato $contato)
    {
        $this->contato[] = $contato;

        return $this;
    }

    /**
     * Remove contato
     *
     * @param \IFC\IfcBundle\Entity\Contato $contato
     */
    public function removeContato(\IFC\IfcBundle\Entity\Contato $contato)
    {
        $this->contato->removeElement($contato);
    }

    /**
     * Get contato
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContato()
    {
        return $this->contato;
    }
}
