<?php

namespace App\UserBundle\Services;

use \Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\FormBuilderInterface;
use Sonata\AdminBundle\Form\ChoiceList\ModelChoiceList;
use Sonata\AdminBundle\Form\ChoiceList\ModelChoiceLoader;
use Sonata\AdminBundle\Form\DataTransformer\LegacyModelsToArrayTransformer;
use Sonata\AdminBundle\Form\DataTransformer\ModelsToArrayTransformer;
use Sonata\AdminBundle\Form\DataTransformer\ModelToIdTransformer;
use Sonata\AdminBundle\Form\EventListener\MergeCollectionListener;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PatchedModelType extends ModelType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($options['multiple']) {
            $builder
                ->addEventSubscriber(new MergeCollectionListener($options['model_manager']))
                ->addViewTransformer(new PatchedModelsToArrayTransformer($options['choice_list']), true)
            ;
        } else {
            $builder
                ->addViewTransformer(new ModelToIdTransformer($options['model_manager'], $options['class']), true)
            ;
        }
    }
}

class PatchedModelsToArrayTransformer extends \Sonata\AdminBundle\Form\DataTransformer\ModelsToArrayTransformer
{
    public function __construct($choiceList)
    {
        // if ($choiceList instanceof LegacyChoiceListAdapter) {
            // $this->choiceList = $choiceList->getAdaptedList();
        // } else if ($choiceList instanceof ModelChoiceList) {
            $this->choiceList = $choiceList;
        // } else {
            // throw new \InvalidArgumentException('Argument 1 must be an instance of Sonata\AdminBundle\Form\ChoiceList\ModelChoiceList or Symfony\Component\Form\ChoiceList\LegacyChoiceListAdapter');
        // }
    }
}
