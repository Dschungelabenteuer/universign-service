<?php

namespace Globalis\Universign\Request;

class SignatureField extends Base
{
  protected $attributesDefinitions = array(
    'name' => 'string',
    'page' => 'int',
    'x'    => 'int',
    'y'    => 'int'
  );
}
