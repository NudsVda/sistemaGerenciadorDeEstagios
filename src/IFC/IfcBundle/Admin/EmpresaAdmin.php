<?php
/**
 * Created by PhpStorm.
 * User: leonardoalbuquerque
 * Date: 26/07/14
 * Time: 17:46
 */

namespace IFC\IfcBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EmpresaAdmin extends Admin{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nome')
            ->add('cnpj')
            ->add('areaAtuacao','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\AreaAtuacao',
                'property'=>'nome'
            ))
            ->add('contato','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Contato',
                'property'=>'email',
                'multiple'=>true
            ))
            //->add('')
            //->add('')
            ->add('observacao')

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('email')
            //->add('telefone')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nome')
            ->add('cnpj')
            ->add('areaAtuacao',NULL,array('associated_property'=>'nome'))
            ->add('pessoa',NULL,array('associated_property'=>'nome'))
            ->add('endereco',NULL,array('associated_property'=>'rua'))
            ->add('observacao')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
        ;
    }
}