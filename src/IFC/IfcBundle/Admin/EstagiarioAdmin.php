<?php
/**
 * Created by PhpStorm.
 * User: leonardoalbuquerque
 * Date: 26/07/14
 * Time: 17:10
 */

namespace IFC\IfcBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EstagiarioAdmin extends Admin{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('pessoa','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'property'=>'nome',
            ))
            ->add('endereco','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Endereco',
                'property'=>'rua',
            ))
            ->add('pai','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'property'=>'nome',
            ))
            ->add('mae','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'property'=>'nome',
            ))
            ->add('curso','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Curso',
                'property'=>'nome',
            ))
            ->add('disponibilidade')
            ->add('horarioTrabalha')
            ->add('matricula')
            ->add('contato','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Contato',
                'property'=>'telefone',
                'multiple'=>true
            ))

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('pessoa.nome')
            ->add('matricula')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('pessoa','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'associated_property'=>'nome',
            ))
            ->add('endereco','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Endereco',
                'associated_property'=>'rua',
            ))
            ->add('pai','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'associated_property'=>'nome',
            ))
            ->add('mae','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'associated_property'=>'nome',
            ))
            ->add('curso','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Curso',
                'associated_property'=>'nome',
            ))
            ->add('disponibilidade')
            ->add('horarioTrabalha')
            ->add('matricula')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }
}