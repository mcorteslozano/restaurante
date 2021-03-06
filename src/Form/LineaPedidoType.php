<?php

namespace App\Form;

use App\Entity\LineaPedido;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LineaPedidoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_articulo',null,[
                'label' => 'Artículo',
                'multiple' => false,
                'expanded' => false,
                'required' => true,
                'label_attr' =>['class' => 'articulo'],
                'placeholder' => 'Seleccione un Artículo'
            ])
            ->add('unidades')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LineaPedido::class,
        ]);
    }
}
