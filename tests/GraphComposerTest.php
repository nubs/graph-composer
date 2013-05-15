<?php

require __DIR__ . '/../vendor/autoload.php';

class GraphTest extends PHPUnit_Framework_TestCase
{
    public function testCreateGraph()
    {
        $dir = __DIR__ . '/../';
        
        $graphComposer = new Clue\GraphComposer();
        $graph = $graphComposer->createGraph($dir);
        
        $this->assertInstanceOf('Fhaculty\Graph\Graph', $graph);
        $this->assertTrue($graph->getNumberOfVertices() > 0);
    }
}