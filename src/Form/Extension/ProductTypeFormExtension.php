<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * another great project.
 * You can find more information about us on https://bitbag.shop and write us
 * an email on kamil.twardowsky@gmail.com
 */

declare(strict_types=1);

namespace App\Form\Extension;

use App\Entity\Product\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

final class ProductTypeFormExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color', ChoiceType::class, [
                'label'        => 'app.form.product.color',
                'placeholder'  => 'app.form.product.color_placeholder',
                'required'     => false,
                'choices'      => Product::PRODUCT_COLORS,
                'choice_label' => function ($value) {
                    return $value;
                },
        ]);
    }

    public static function getExtendedTypes(): array
    {
        return [
            ProductType::class,
        ];
    }
}
