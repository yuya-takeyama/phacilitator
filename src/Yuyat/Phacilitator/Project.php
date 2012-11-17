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
 * Definition of the project and recipes.
 *
 * @author Yuya Takeyama
 */
class Yuyat_Phacilitator_Project
    extends Yuyat_Phacilitator_RecipeGroup
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
