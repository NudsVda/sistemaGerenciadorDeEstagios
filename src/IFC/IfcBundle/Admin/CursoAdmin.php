<?php

namespace IFC\IfcBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CursoAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nome', 'text', array('label' => 'Nome'))
            ->add('grau', 'text', array('label' => 'Grau', 'required'=>false))
            ->add('modalidade', 'sonata_type_model', array(
                'class' => 'IFC\IfcBundle\Entity\Modalidade',
                'property' => 'nome',
                'attr' => array(
                    'class' => 'select2'
                ),
            ))
                
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nome')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nome')
            ->add('grau')
            ->add('modalidade', 'sonata_type_model', array(
                'associated_property' => 'nome',
                'label'=>'Modalidade'
            ))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
        ;
    }
}