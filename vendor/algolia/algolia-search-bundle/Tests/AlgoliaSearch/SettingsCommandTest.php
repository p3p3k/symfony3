<?php

namespace Algolia\AlgoliaSearchBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Output\StreamOutput;
use Symfony\Component\Console\Input\ArrayInput;

use Algolia\AlgoliaSearchBundle\Command\SettingsCommand;

class SettingsCommandTest extends BaseTest
{
    /**
     * Here we really want to test the full integration
     * and talk with Algolia servers.
     */
    public static $isolateFromAlgolia = false;

    public static $neededEntityTypes = [
        'ProductForAlgoliaIntegrationTest'
    ];

    public function setUp()
    {
        parent::setUp();

        global $kernel;
        $app = new Application($kernel);
        $command = new SettingsCommand();
        $app->add($command);

        $this->command = $command;
    }

    public static function tearDownAfterClass()
    {
        parent::tearDownAfterClass();
        self::staticGetIndexer()->deleteIndex('ProductForAlgoliaIntegrationTest');
    }

    public function runCommand(array $args = array())
    {
        $input = new ArrayInput(array_merge(['command' => 'algolia:settings'], $args));
        $file = tmpfile();
        $this->command->run($input, new StreamOutput($file));
        fseek($file, 0);
        $output = '';
        while (!feof($file)) {
            $output = fread($file, 4096);
        }
        fclose($file);
        return $output;
    }

    public function testIndexWouldBeCreated()
    {
        $output = $this->runCommand();

        $this->assertContains('We found 1 index(es) that may need updating.', $output);
        $this->assertContains('Found a new local index '.metaenv('ProductForAlgoliaIntegrationTest_dev'), $output);
    }

    /**
     * @depends testIndexWouldBeCreated
     */
    public function testIndexIsCreated()
    {
        $this->runCommand(['--push' => ' ', '--force' => ' ']);

        $output = $this->runCommand();
        
        $this->assertContains('Your local index settings seem to be in sync with the Algolia servers!', $output);
    }

    /**
     * @depends testIndexIsCreated
     */
    public function testSettingsOfExistingIndexAreUpdated()
    {
        $this->getIndexer()->setIndexSettings(
            'ProductForAlgoliaIntegrationTest',
            [
                'attributesToIndex' => array('price')
            ]
        );
        $this->getIndexer()->waitForAlgoliaTasks();

        $output = $this->runCommand();

        $this->assertContains('We found 1 index(es) that may need updating.', $output);
        $this->assertContains('Local attributesToIndex:', $output);

        $this->runCommand(['--push' => ' ', '--force' => ' ']);
        $output = $this->runCommand();
        $this->assertContains('Your local index settings seem to be in sync with the Algolia servers!', $output);
    }
}
