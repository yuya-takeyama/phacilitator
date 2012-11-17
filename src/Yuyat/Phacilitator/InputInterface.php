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
 * Interface of command-line input.
 *
 * @author Yuya Taekyama
 */
interface Yuyat_Phacilitator_InputInterface
{
    public function getArgv();

    public function getArgc();
}
