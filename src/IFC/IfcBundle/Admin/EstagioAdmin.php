<?php
/**
 * Created by PhpStorm.
 * User: leonardoalbuquerque
 * Date: 26/07/14
 * Time: 20:14
 */

namespace IFC\IfcBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EstagioAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('estagiario','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Estagiario',
                'property'=>'pessoa.nome',
                'label'=>'Estagiario'
            ))
            ->add('empresa','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Empresa',
                'property'=>'nome',
            ))
            ->add('orientador','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'property'=>'nome',
                'label'=>'Orientador'
            ))
            ->add('superior','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'property'=>'nome',
                'label'=>'Superior'
            ))
            ->add('remunerado',NULL,array('label'=>"Remunerado?"))
            ->add('remuneracao','number',array("required"=>false))
            ->add('cargaHoraria','text')
            ->add('inicio','date',array('years'=>range(2011,2037)))
            ->add('final','date',array('years'=>range(2011,2037)))
            ->add('status',NULL,array("label"=>"Andamento"))
            ->add('horario',"text",array("label"=>"Horario de trabalho"))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('estagiario.pessoa.nome',NULL,array('label'=>"Nome do estagiario"))
            ->add('orientador.nome',NULL,array('label'=>"Nome do orientador"))
            ->add('superior.nome',NULL,array('label'=>"Nome do superior"))
            ->add('empresa.nome',NULL,array('label'=>"Empresa"))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier("id")
            ->add('estagiario','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Estagiario',
                'associated_property'=>'pessoa.nome'
            ))
            ->add('empresa','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Empresa',
                'associated_property'=>'nome'
            ))
            ->add('orientador','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'associated_property'=>'nome'
            ))
            ->add('superior','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'associated_property'=>'nome'
            ))
            ->add('remuneracao')
            ->add('carga_horaria')
            ->add('inicio')
            ->add('final')
            ->add('status',NULL,array("label"=>"Andamento"))
            ->add('horario',"text",array("label"=>"Horario de trabalho"))
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show'=>array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ));
    }
    protected function configureShowFields(ShowMapper $showMapper){
        $showMapper
            ->add('estagiario','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Estagiario',
                'associated_property'=>'pessoa.nome'
            ))
            ->add('empresa','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Empresa',
                'associated_property'=>'nome'
            ))
            ->add('orientador','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'associated_property'=>'nome'
            ))
            ->add('superior','sonata_type_model',array(
                'class' => 'IFC\IfcBundle\Entity\Pessoa',
                'associated_property'=>'nome'
            ))
            ->add('remunerado',NULL,array('label'=>"Remunerado?"))
            ->add('remuneracao')
            ->add('carga_horaria')
            ->add('inicio')
            ->add('final')
            ->add('status',NULL,array("label"=>"Andamento"))
            ->add('horario',"text",array("label"=>"Horario de trabalho"))
            ;
    }

}