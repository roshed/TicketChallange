<?php
namespace AppBundle\Form;

use AppBundle\Entity\Ticket;
use AppBundle\Entity\Reservation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('email')
            ->add('eventid', EntityType::class, [
                "class" => Ticket::class,
                "multiple" => false,
                "by_reference" => false
            ])
            ->add('adult', RangeType::class, array(
                'attr' => array(
                    'min' => 0,
                    'max' => 4
            )))
            ->add('child', RangeType::class, array(
            'attr' => array(
                'min' => 0,
                'max' => 4
            )))
            ->add('senior', RangeType::class, array(
                'attr' => array(
                    'min' => 0,
                    'max' => 3
            )))
            ->add('save', SubmitType::class, array(
                'attr' => array('class' => 'save'),
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Reservation'
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_reservation';
    }
}
