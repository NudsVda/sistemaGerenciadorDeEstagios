<?php

namespace IFC\IfcBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contato
 *
 * @ORM\Table(name="contato")
 * @ORM\Entity
 */
class Contato
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
     * @ORM\Column(name="telefone", type="string", length=45, nullable=false)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Empresa", mappedBy="contato")
     */
    private $empresa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Estagiario", mappedBy="contato")
     */
    private $estagiario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pessoa", mappedBy="contato")
     */
    private $pessoa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->empresa = new \Doctrine\Common\Collections\ArrayCollection();
        $this->estagiario = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set telefone
     *
     * @param string $telefone
     * @return Contato
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contato
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add empresa
     *
     * @param \IFC\IfcBundle\Entity\Empresa $empresa
     * @return Contato
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
     * Add estagiario
     *
     * @param \IFC\IfcBundle\Entity\Estagiario $estagiario
     * @return Contato
     */
    public function addEstagiario(\IFC\IfcBundle\Entity\Estagiario $estagiario)
    {
        $this->estagiario[] = $estagiario;

        return $this;
    }

    /**
     * Remove estagiario
     *
     * @param \IFC\IfcBundle\Entity\Estagiario $estagiario
     */
    public function removeEstagiario(\IFC\IfcBundle\Entity\Estagiario $estagiario)
    {
        $this->estagiario->removeElement($estagiario);
    }

    /**
     * Get estagiario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstagiario()
    {
        return $this->estagiario;
    }

    /**
     * Add pessoa
     *
     * @param \IFC\IfcBundle\Entity\Pessoa $pessoa
     * @return Contato
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
