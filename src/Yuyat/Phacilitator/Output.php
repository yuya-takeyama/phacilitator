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
 * Command-line output.
 *
 * @author Yuya Takeyama
 */
class Yuyat_Phacilitator_Output implements Yuyat_Phacilitator_OutputInterface
{
    private $stdout;

    private $stderr;

    public function __construct($stdout, $stderr)
    {
        $this->stdout = $stdout;
        $this->stderr = $stderr;
    }

    public function write($str = '')
    {
        fputs($this->stdout, $str);
    }

    public function writeln($str = '')
    {
        fputs($this->stdout, $str . PHP_EOL);
    }

    public function writeError($str = '')
    {
        fputs($this->stderr, $str);
    }

    public function writelnError($str = '')
    {
        fputs($this->stderr, $str . PHP_EOL);
    }
}
