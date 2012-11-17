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
 * Interface of RecipeNode.
 *
 * @author Yuya Takeyama
 */
interface Yuyat_Phacilitator_RecipeNodeInterface
{
    public function getName();

    public function setParentGroup(Yuyat_Phacilitator_RecipeGroup $group);

    public function getParentGroup();

    public function hasParentGroup();
}
