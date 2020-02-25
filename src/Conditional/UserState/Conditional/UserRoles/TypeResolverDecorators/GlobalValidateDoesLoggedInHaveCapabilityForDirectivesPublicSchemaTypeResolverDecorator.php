<?php
namespace PoP\TranslateDirective\Conditional\UserState\Conditional\UserRoles\TypeResolverDecorators;

use PoP\ComponentModel\TypeResolvers\AbstractTypeResolver;
use PoP\TranslateDirective\DirectiveResolvers\AbstractTranslateDirectiveResolver;
use PoP\TranslateDirective\Conditional\UserState\Conditional\UserRoles\ComponentConfiguration;
use PoP\UserRoles\Conditional\UserState\TypeResolverDecorators\AbstractValidateDoesLoggedInHaveCapabilityForDirectivesPublicSchemaTypeResolverDecorator;

class GlobalValidateDoesLoggedInHaveCapabilityForDirectivesPublicSchemaTypeResolverDecorator extends AbstractValidateDoesLoggedInHaveCapabilityForDirectivesPublicSchemaTypeResolverDecorator
{
    public static function getClassesToAttachTo(): array
    {
        return array(
            AbstractTypeResolver::class,
        );
    }

    protected function getCapability(): ?string
    {
        return ComponentConfiguration::capabilityLoggedInUserMustHaveToAccessTranslateDirective();
    }

    protected function getDirectiveResolverClasses(): array
    {
        return [
            AbstractTranslateDirectiveResolver::class,
        ];
    }
}
