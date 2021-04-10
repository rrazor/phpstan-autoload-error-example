<?php

declare(strict_types=1);

namespace Example\Tests;

use Example\ClassAHelperTrait;

class ClassATestWithUse
{
    public function test(): void
    {
        $anonStub = new class() extends \Example\ClassA
        {
            use ClassAHelperTrait;
        };
    }
}
