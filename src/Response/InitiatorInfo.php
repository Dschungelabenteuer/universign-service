<?php

namespace Globalis\Universign\Response;

use PhpXmlRpc\Value;

class InitiatorInfo extends Base
{
  protected $attributesDefinitions = array(
    /**
     * The requester’s email.
     */
    'email' => true,
    /**
     * The requester’s firstname.
     */
    'firstName' => true,
    /**
     * The requester’s lastname.
     */
    'lastName' => true,
  );
}
