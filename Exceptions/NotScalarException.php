<?php

namespace  Exceptions;

class NotScalarException extends \Exception
{
    protected $message = "Passed argument doesn't contain scalar value.";
}
