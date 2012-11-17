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
    public function findRecipe($name)
    {
        $names  = explode('::', $name);
        $recipe = $this;

        while (true) {
            $next = $recipe->get(array_shift($names));

            if (count($names) === 0) {
                return $next && $next instanceof Yuyat_Phacilitator_RecipeInterface ? $next : null;
            }

            $recipe = $next;
        }
    }
}
