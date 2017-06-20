<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-06-20
 * Time: 15:10
 */

namespace inhere\console\utils;

use inhere\console\style\Style;

/**
 * Class TraitFormatShow
 * @package inhere\console\utils
 */
trait TraitFormatShow
{
    /**
     * @inheritdoc
     * @see Show::title()
     */
    public function title($title, array $opts = [])
    {
        Show::title($title, $opts);
    }

    /**
     * @inheritdoc
     * @see Show::section()
     */
    public function section($title, $body, array $opts = [])
    {
        Show::section($title, $body, $opts);
    }

    /**
     * @inheritdoc
     * @see Show::aList()
     */
    public function aList($data, $title, array $opts = [])
    {
        Show::aList($data, $title, $opts);
    }

    /**
     * @inheritdoc
     * @see Show::mList()
     */
    public function multiList(array $data, array $opts = [])
    {
        Show::mList($data, $opts);
    }

    /**
     * @inheritdoc
     * @see Show::mList()
     */
    public function mList(array $data, array $opts = [])
    {
        Show::mList($data, $opts);
    }

    /**
     * helpPanel
     * @inheritdoc
     * @see Show::helpPanel()
     */
    public function helpPanel(array $config, $showAfterQuit = true)
    {
        Show::helpPanel($config, $showAfterQuit);
    }

    /**
     * @inheritdoc
     * @see Show::panel()
     */
    public function panel(array $data, $title = 'Info panel', $borderChar = '*')
    {
        Show::panel($data, $title, $borderChar);
    }

    /**
     * @inheritdoc
     * @see Show::table()
     */
    public function table(array $data, $title = 'Info List', $showBorder = true)
    {
        Show::table($data, $title, $showBorder);
    }

    /**
     * @param mixed $messages
     * @param string|null $type
     * @param string $style
     * @param int|boolean $quit If is int, setting it is exit code.
     */
    public function block($messages, $type = 'MESSAGE', $style = Style::NORMAL, $quit = false)
    {
        Show::block($messages, $type, $style, $quit);
    }

    /**
     * @param mixed $messages
     * @param bool $quit
     */
    public function primary($messages, $quit = false)
    {
        $this->block($messages, 'IMPORTANT', Style::PRIMARY, $quit);
    }

    /**
     * @param mixed $messages
     * @param bool $quit
     */
    public function success($messages, $quit = false)
    {
        $this->block($messages, 'SUCCESS', Style::SUCCESS, $quit);
    }

    /**
     * @param mixed $messages
     * @param bool $quit
     */
    public function info($messages, $quit = false)
    {
        $this->block($messages, 'INFO', Style::INFO, $quit);
    }

    /**
     * @param mixed $messages
     * @param bool $quit
     */
    public function warning($messages, $quit = false)
    {
        $this->block($messages, 'WARNING', Style::WARNING, $quit);
    }

    /**
     * @param mixed $messages
     * @param bool $quit
     */
    public function danger($messages, $quit = false)
    {
        $this->block($messages, 'DANGER', Style::DANGER, $quit);
    }

    /**
     * @param mixed $messages
     * @param bool $quit
     */
    public function error($messages, $quit = false)
    {
        $this->block($messages, 'ERROR', Style::ERROR, $quit);
    }

    /**
     * @param mixed $messages
     * @param bool $quit
     */
    public function notice($messages, $quit = false)
    {
        $this->block($messages, 'NOTICE', Style::COMMENT, $quit);
    }

}