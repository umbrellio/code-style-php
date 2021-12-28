<?php

declare(strict_types=1);

use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff;
use PhpCsFixer\Fixer\ClassNotation\ClassAttributesSeparationFixer;
use PhpCsFixer\Fixer\Operator\NotOperatorWithSuccessorSpaceFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function(ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $services = $containerConfigurator->services();

    $containerConfigurator->import(SetList::CLEAN_CODE);
    $containerConfigurator->import(SetList::PSR_12);
    $containerConfigurator->import(SetList::COMMON);
    $containerConfigurator->import(SetList::SYMPLIFY);

    $services->set(DeclareStrictTypesFixer::class);
    $services->set('SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff')
        ->property('allowPartialUses', true);

    $parameters->set('skip', [
        NotOperatorWithSuccessorSpaceFixer::class => null,
        'Symplify\CodingStandard\Sniffs\Naming\TraitNameSniff' => null,
        'Symplify\CodingStandard\Sniffs\Naming\InterfaceNameSniff' => null,
        'Symplify\CodingStandard\Sniffs\Naming\ClassNameSuffixByParentSniff' => null,
        'Symplify\CodingStandard\Sniffs\Naming\AbstractClassNameSniff' => null,
        'Symplify\CodingStandard\Sniffs\Commenting\VarConstantCommentSniff' => null,
        'Symplify\CodingStandard\Fixer\Commenting\BlockPropertyCommentFixer' => null,
        'Symplify\CodingStandard\Fixer\Naming\PropertyNameMatchingTypeFixer' => null,
        'Symplify\CodingStandard\Fixer\Import\ImportNamespacedNameFixer' => null,
        'SlamCsFixer\FinalInternalClassFixer' => null,
        'Symplify\CodingStandard\Sniffs\CleanCode\ForbiddenStaticFunctionSniff' => null,
        'Symplify\CodingStandard\Sniffs\DependencyInjection\NoClassInstantiationSniff' => null,
        'Symplify\CodingStandard\Sniffs\Architecture\ExplicitExceptionSniff' => null,
        'SlevomatCodingStandard\Sniffs\Classes\UnusedPrivateElementsSniff' => null,
        AssignmentInConditionSniff::class => null,
        'SlevomatCodingStandard\Sniffs\Classes\TraitUseDeclarationSniff' => null,
        ClassAttributesSeparationFixer::class => null
    ]);
};
