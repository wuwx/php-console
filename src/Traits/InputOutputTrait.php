<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-03-17
 * Time: 11:38
 */

namespace Inhere\Console\Traits;

use Inhere\Console\IO\Input;
use Inhere\Console\IO\Output;

/**
 * Class InputOutputTrait
 * @package Inhere\Console\Traits
 */
trait InputOutputTrait
{
    /**
     * @var Input
     */
    protected $input;

    /**
     * @var Output
     */
    protected $output;

    /**
     * @return string
     */
    public function getScriptName(): string
    {
        return $this->input->getScript();
    }

    /**
     * @see Input::getArg()
     * {@inheritdoc}
     */
    public function getArg($name, $default = null)
    {
        return $this->input->getArg($name, $default);
    }

    /**
     * @see Input::getRequiredArg()
     * {@inheritdoc}
     */
    public function getRequiredArg($name)
    {
        return $this->input->getRequiredArg($name);
    }

    /**
     * @see Input::getSameArg()
     * {@inheritdoc}
     */
    public function getSameArg(array $names, $default = null)
    {
        return $this->input->getSameArg($names, $default);
    }

    /**
     * @see Input::getOpt()
     * {@inheritdoc}
     */
    public function getOpt($name, $default = null)
    {
        return $this->input->getOpt($name, $default);
    }

    /**
     * @see Input::getSameOpt()
     * {@inheritdoc}
     */
    public function getSameOpt(array $names, $default = null)
    {
        return $this->input->getSameOpt($names, $default);
    }

    /**
     * @see Input::getRequiredOpt()
     * {@inheritdoc}
     */
    public function getRequiredOpt($name)
    {
        return $this->input->getRequiredOpt($name);
    }

    /**
     * @param string $msg
     * @return string
     */
    protected function read($msg = ''): string
    {
        return $this->input->read($msg);
    }

    /**
     * @param mixed $message
     * @param bool $nl
     * @param bool|int $quit
     * @return int
     */
    protected function write($message, $nl = true, $quit = false): int
    {
        return $this->output->write($message, $nl, $quit);
    }

    /**
     * @param mixed $message
     * @param bool|int $quit
     * @return int
     */
    protected function writeln($message, $quit = false): int
    {
        return $this->output->write($message, true, $quit);
    }

    /**
     * @return Input
     */
    public function getInput(): Input
    {
        return $this->input;
    }

    /**
     * @param Input $input
     */
    public function setInput(Input $input)
    {
        $this->input = $input;
    }

    /**
     * @return Output
     */
    public function getOutput(): Output
    {
        return $this->output;
    }

    /**
     * @param Output $output
     */
    public function setOutput(Output $output)
    {
        $this->output = $output;
    }
}
