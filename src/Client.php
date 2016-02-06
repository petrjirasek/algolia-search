<?php

namespace petrjirasek\AlgoliaSearch;

use Nette;
use Nette\PhpGenerator as Code;

/**
 * @author Petr Jirásek
 */
class Client extends \AlgoliaSearch\Client
{
    /**
     * @inheritdoc
     */
    public function __construct($applicationID, $apiKey, $hostsArray = null, $options = array())
    {
        parent::__construct($applicationID, $apiKey, $hostsArray, $options);
    }
}