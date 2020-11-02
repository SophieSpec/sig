<?php

declare(strict_types=1);

namespace Spec\sig;

use function Sophie\Sig\sig;

/*
    sig(Sophie\Ensure\VarRepresentation::class)
        ->implements(Sophie\Ensure\VarRepresentationInterface::class);
    sig(Sophie\Ensure\VarRepresentation::class, '__construct')
        ->accepts('mixed', 'mixed');
    sig(Sophie\Ensure\StrictEqualityAssertion::class)
        ->implements(Sophie\Ensure\AssertionInterface::class);
    sig(Sophie\Ensure\StrictEqualityAssertion::class, '__construct')
        ->accepts('mixed', 'mixed');
    sig(Sophie\Ensure\FailedAssertionException::class)
        ->extends(Exception::class);
    sig(Sophie\Ensure\ensure::class)
        ->accepts('mixed', 'mixed')
        ->returns('void');
    sig(Sophie\Versus\versus::class)
        ->accepts('callable')
        ->returns('void');
    sig(Sophie\Versus\TestableInterface::class)
        ->method('test')
        ->accepts()
        ->returns('void');
    sig(Sophie\Versus\Testable::class)
        ->implements(Sophie\Versus\TestableInterface::class);
    sig(Sophie\Versus\Testable::class)
        ->method('__construct')
        ->accepts(
            Sophie\Versus\RunnableInterface::class,
            Generator::class
        );
    sig(Sophie\Versus\RunnableInterface::class)
        ->method('run')
        ->accepts('...mixed')
        ->returns('void');
    sig(Sophie\Versus\Runnable::class)
        ->implements(Sophie\Versus\RunnableInterface::class);
    sig(Sophie\Versus\Runnable::class)
        ->method('__construct')
        ->accepts('callable');
*/

###########################################################################
# Prepare structs
###########################################################################

function my_function ()
{
}

class MyClass
{
}

###########################################################################
# sig()
###########################################################################

describe('sig', function () {
    yield sig('my_function')       => is_an_instance_of(FunctionSignature::class);
    yield sig(MyClass::class)      => is_an_instance_of(ClassSignature::class);
    yield fn() => sig('not_found') => throws_a(NameNotFoundException::class);
});
