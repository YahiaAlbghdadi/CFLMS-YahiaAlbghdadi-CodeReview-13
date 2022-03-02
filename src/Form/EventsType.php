<?php

namespace App\Form;

use App\Entity\Events;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


class EventsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add("name",TextType::class,array("attr" => array("class"=>"form-control", "style"=>"margin-bottom:15px")))
            ->add('date',DateTimeType::class,array("attr"=>array("style"=>"margin-bottom:15px")))
            

            ->add('type',ChoiceType::class, array("choices" =>array("riding"=>"riding", "adventure"=>"adventure", "dance"=>"dance"),'attr'=>array("class"=>'form-control',"style"=>"margin-bottom:15px" )))            
            ->add('capacity',IntegerType::class,array("attr"=>array("style"=>"margin-bottom:15px ","class"=>"form-control")))


            ->add('description',TextareaType::class,array("attr"=>array("class"=>"form-control","style"=>"margin-bottom:15px")))
            ->add('image',TextType::class,array("attr"=>array("class"=>"form-control","style"=>"margin-bottom:15px")))
            ->add('eMail',TextType::class,array("attr"=>array("class"=>"form-control","style"=>"margin-bottom:15px")))
            ->add('phoneNr',IntegerType::class,array("attr"=>array("class"=>"form-control","style"=>"margin-bottom:15px")))
            ->add('address',TextType::class,array("attr"=>array("class"=>"form-control","style"=>"margin-bottom:15px")))
            ->add('URL',TextType::class,array("attr"=>array("class"=>"form-control","style"=>"margin-bottom:15px")));
    }
   

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Events::class,
        ]);
    }
}
