<?php

namespace Respect\Validation\Exceptions;

class MostOfException extends AbstractCompositeException
{

    public static $defaultTemplates = array(
        self::NONE => 'At least %3$d of %4$d rules must pass for %1$s',
        self::SOME => 'At least %3$d of %4$d rules must pass, only %2$d passed for %1$s',
    );

}