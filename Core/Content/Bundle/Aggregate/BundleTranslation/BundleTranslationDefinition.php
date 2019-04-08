<?php


namespace SwagBundleExample\Core\Content\Bundle\Aggregate\BundleTranslation;


use Shopware\Core\Framework\DataAbstractionLayer\EntityTranslationDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use SwagBundleExample\Core\Content\Bundle\BundleDefinition;

class BundleTranslationDefinition extends EntityTranslationDefinition
{

    public static function getEntityName(): string
{
    return 'swag_bundle_translation';
}

    public static function getParentDefinitionClass(): string
{
    return BundleDefinition::class;
}

    protected static function defineFields(): FieldCollection
{
    return new FieldCollection([
        (new StringField('name', 'name'))->addFlags(new Required()),
    ]);
}
}