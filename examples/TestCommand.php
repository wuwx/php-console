<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-02-27
 * Time: 18:58
 */

namespace Inhere\Console\Examples;

use Inhere\Console\Command;

/**
 * Class Test
 */
class TestCommand extends Command
{
    protected static $description = 'this is a test independent command';

    /**
     * test text
     * @usage {name} test message
     * @arguments
     * arg1  argument description 1
     * arg2  argument description 2
     * @options
     * --long,-s option description 1
     * --opt    option description 2
     */
    public function execute($input, $output)
    {
        $output->write('hello, this in ' . __METHOD__);
    }
}
