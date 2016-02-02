<?php

namespace Keley\ProductBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProductAdmin extends Admin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('description')
                ->add('category', null, array(), 'entity', array(
                    'expanded' => true, 'multiple' => true,
                    'class' => 'Keley\categoryBundle\Entity\Category',
                    'property' => 'tag',
                ))
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {

        $listMapper
                ->add('image')
                ->add('description')
                ->add('category.tag')
                ->add('weight')
                ->add('price')

//            ->add('_action', 'actions', array(
//                'actions' => array(
//                    'show' => array(),
//                    'edit' => array(),
//                    'delete' => array(),
//                )
//            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper) {

        $formMapper
                ->add('id')
                ->add('name')
                ->add('description')
                ->add('weight')
                ->add('price')
                ->add('image')
//            ->add('category', 'entity', array(
//            'class' => 'Keley\categoryBundle\Entity\Category',
//            'property' => 'tag',
//        ))
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('name')
                ->add('description')
                ->add('weight')
                ->add('price')
                ->add('image')
        ;
    }

}
