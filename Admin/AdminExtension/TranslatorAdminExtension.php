<?php

namespace Elcodi\Bundle\EntityTranslatorBundle\Admin\AdminExtension;

use Sonata\AdminBundle\Admin\AdminExtension;
use Sonata\AdminBundle\Form\FormMapper;

use Elcodi\Component\EntityTranslator\EventListener\Traits\EntityTranslatableFormTrait;

class TranslatorAdminExtension extends AdminExtension
{
    use EntityTranslatableFormTrait;

    /**
     * {@inheritdoc}
     */
    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->getFormBuilder()
            ->addEventSubscriber($this->getEntityTranslatorFormEventListener());
    }
}
