<?php

namespace JLeo\PoPoHyperf;

use Attribute;

#[Attribute]
class ObjArray
{
    public function __construct(public string $objectName)
    {
    }
}