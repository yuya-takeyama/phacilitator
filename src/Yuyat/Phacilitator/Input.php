<?php
/**
 * This file is part of Phacilitator.
 *
 * (c) Yuya Takeyama
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Command-line input.
 *
 * @author Yuya Takeyama
 */
class Yuyat_Phacilitator_Input implements Yuyat_Phacilitator_InputInterface
{
    private $argc;

    private $argv;

    private $stdin;

    public function __construct($argc, $argv, $stdin)
    {
        $this->argc  = $argc;
        $this->argv  = $argv;
        $this->stdin = $stdin;
    }

    public function getArgc()
    {
        return $this->argc;
    }

    public function getArgv()
    {
        return $this->argv;
    }
}
