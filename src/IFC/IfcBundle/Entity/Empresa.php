<?php

namespace IFC\IfcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa", indexes={@ORM\Index(name="fk_empresa_area_atuacao_idx", columns={"area_atuacao_id"}), @ORM\Index(name="fk_empresa_endereco1_idx", columns={"endereco_id"})})
 * @ORM\Entity
 */
class Empresa
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
     * @ORM\Column(name="cnpj", type="string", length=45, nullable=false)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=200, nullable=true)
     */
    private $observacao;

    /**
     * @var \AreaAtuacao
     *
     * @ORM\ManyToOne(targetEntity="AreaAtuacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="area_atuacao_id", referencedColumnName="id")
     * })
     */
    private $areaAtuacao;

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
     * @ORM\ManyToMany(targetEntity="Contato", inversedBy="empresa")
     * @ORM\JoinTable(name="empresa_has_contato",
     *   joinColumns={
     *     @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="contato_id", referencedColumnName="id")
     *   }
     * )
     */
    private $contato;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pessoa", inversedBy="empresa")
     * @ORM\JoinTable(name="empresa_has_socio",
     *   joinColumns={
     *     @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="pessoa_id", referencedColumnName="id")
     *   }
     * )
     */
    private $pessoa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contato = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pessoa = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Empresa
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
     * Set cnpj
     *
     * @param string $cnpj
     * @return Empresa
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string 
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     * @return Empresa
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string 
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set areaAtuacao
     *
     * @param \IFC\IfcBundle\Entity\AreaAtuacao $areaAtuacao
     * @return Empresa
     */
    public function setAreaAtuacao(\IFC\IfcBundle\Entity\AreaAtuacao $areaAtuacao = null)
    {
        $this->areaAtuacao = $areaAtuacao;

        return $this;
    }

    /**
     * Get areaAtuacao
     *
     * @return \IFC\IfcBundle\Entity\AreaAtuacao 
     */
    public function getAreaAtuacao()
    {
        return $this->areaAtuacao;
    }

    /**
     * Set endereco
     *
     * @param \IFC\IfcBundle\Entity\Endereco $endereco
     * @return Empresa
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
     * Add contato
     *
     * @param \IFC\IfcBundle\Entity\Contato $contato
     * @return Empresa
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

    /**
     * Add pessoa
     *
     * @param \IFC\IfcBundle\Entity\Pessoa $pessoa
     * @return Empresa
     */
    public function addPessoa(\IFC\IfcBundle\Entity\Pessoa $pessoa)
    {
        $this->pessoa[] = $pessoa;

        return $this;
    }

    /**
     * Remove pessoa
     *
     * @param \IFC\IfcBundle\Entity\Pessoa $pessoa
     */
    public function removePessoa(\IFC\IfcBundle\Entity\Pessoa $pessoa)
    {
        $this->pessoa->removeElement($pessoa);
    }

    /**
     * Get pessoa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }
}
