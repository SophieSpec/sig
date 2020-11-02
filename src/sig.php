<?php

declare(strict_types=1);

/**
 * Facade.
 *
 * @param string $name A function or a class name
 * @return object A signature object
 */
function sig(string $name): object
{
    return new class {};
}
