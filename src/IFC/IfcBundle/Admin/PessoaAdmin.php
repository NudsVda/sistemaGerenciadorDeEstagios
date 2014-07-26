<?php

namespace IFC\IfcBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PessoaAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nome', 'text', array('label' => 'Nome'))
            ->add('rg', 'text', array('label' => 'RG'))
            ->add('cpf', 'text', array('label' => 'CPF'))
            ->add('data_nascimento', 'date', array('label' => 'Data nascimento'))
            ->add('formacao', 'text', array('label' => 'Formação'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nome')
            ->add('cpf')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('nome')
            ->add('formacao')
        ;
    }
}