<?php

namespace Globalis\Universign\Response;

use PhpXmlRpc\Value;

class TransactionResponse extends Base
{
  protected $attributesDefinitions = array(
    /**
     * This transaction id.
     */
    'id' => true,
    /**
     * The URL to the web interface for the first signer.
     */
    'url' => true,
  );
}
