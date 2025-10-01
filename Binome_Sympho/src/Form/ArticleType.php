<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Entity\Pays;
use App\Entity\Races;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('pays', EntityType::class, [
                'class' => Pays::class,
                'choice_label' => 'name',
            ])
            ->add('races', EntityType::class, [
                'class' => Races::class,
                'choice_label' => 'names',
            ])
            ->add('commentaire', TextType::class, [
                'label' => 'Votre commentaire',
                'required' => true,
            ])
            ->add('submit', SubmitType::class, [
        'label' => 'Envoyer'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
