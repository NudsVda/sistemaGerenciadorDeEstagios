<?php

namespace IFC\IfcBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EnderecoAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('uf', 'text', array('label' => 'Estado'))
            ->add('cep', 'text', array('label' => 'Cep'))
            ->add('rua', 'text', array('label' => 'Rua'))
            ->add('cidade', 'text', array('label' => 'Cidade'))
            ->add('numero', 'integer', array('label' => 'Número'))
            ->add('complemento', 'text', array('label' => 'Complemento'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('uf')
            ->add('cep')
            ->add('cidade')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('cidade')
            ->add('uf')
            ->add('rua')
                
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
        ;
    }
}