<?php

namespace Leo\popo;

use Attribute;

#[Attribute]
class ObjArray
{
    public function __construct(public string $objectName)
    {
    }
}