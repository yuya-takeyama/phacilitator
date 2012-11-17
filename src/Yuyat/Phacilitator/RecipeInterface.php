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
 * Interface of Recipe.
 *
 * @author Yuya Takeyama
 */
interface Yuyat_Phacilitator_RecipeInterface
    extends Yuyat_Phacilitator_RecipeNodeInterface
{
    public function getFullName();

    public function getDescription();

    public function execute(Yuyat_Phacilitator_RecipeArgumentsInterface $args);
}
