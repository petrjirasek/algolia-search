<?php

namespace petrjirasek\AlgoliaSearch\Tests;

use Nette;
use petrjirasek\AlgoliaSearch\Client;
use petrjirasek\AlgoliaSearch\InvalidArgumentException;
use Tester;
use Tester\Assert;

require_once __DIR__.'/../bootstrap.php';

class ExtensionTest extends Tester\TestCase
{
    /**
     * @param $configFile
     * @return Nette\DI\Container
     */
    public function createContainer($configFile)
    {
        $config = new Nette\Configurator();
        $config->setTempDirectory(TEMP_DIR);
        $config->addParameters(array('container' => array('class' => 'SystemContainer_'.md5($configFile))));
        $config->addConfig(__DIR__.'/config/'.$configFile.'.neon');

        return $config->createContainer();
    }

    public function testExtensionRegistration()
    {
        $container = $this->createContainer('default');
        $algoliaSearch = $container->getByType('petrjirasek\AlgoliaSearch\Client');
        Assert::true($algoliaSearch instanceof Client);
    }

    public function testExtensionParameters()
    {
        Assert::throws(function () {
            $this->createContainer('emptyParameters');
        }, InvalidArgumentException::class, 'Parameter applicationId is required.');

        Assert::throws(function () {
            $this->createContainer('missingApiKey');
        }, InvalidArgumentException::class, 'Parameter apiKey is required.');

        Assert::throws(function () {
            $this->createContainer('invalidHosts');
        }, InvalidArgumentException::class, 'Parameter hosts must be type of array.');

        Assert::throws(function () {
            $this->createContainer('invalidOptions');
        }, InvalidArgumentException::class, 'Parameter options must be type of array.');
    }

    public function testFullConfiguration()
    {
        $container = $this->createContainer('fullConfiguration');
        $algoliaSearch = $container->getByType('petrjirasek\AlgoliaSearch\Client');
        Assert::true($algoliaSearch instanceof Client);
    }
}

(new ExtensionTest())->run();