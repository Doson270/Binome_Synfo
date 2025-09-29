<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Commentaire;
use App\Entity\Pays;
use App\Entity\Races;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('image')
            ->add('pays', EntityType::class, [
                'class' => Pays::class,
                'choice_label'
                 => 'id',
            ])
            ->add('races', EntityType::class, [
                'class' => Races::class,
                'choice_label' => 'id',
            ])
            ->add('commentaire', EntityType::class, [
                'class' => Commentaire::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
