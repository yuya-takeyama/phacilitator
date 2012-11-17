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
 * Interface of command-line output.
 *
 * @author Yuya Taekyama
 */
interface Yuyat_Phacilitator_OutputInterface
{
    public function write($str = '');

    public function writeln($str = '');

    public function writeError($str = '');

    public function writelnError($str = '');
}
