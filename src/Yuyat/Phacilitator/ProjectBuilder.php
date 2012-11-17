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
 * Builder of Project consists of recipe and its groups.
 *
 * @author Yuya Takeyama
 */
class Yuyat_Phacilitator_ProjectBuilder
{
    public function project($name, $recipes = null)
    {
        $project = new Yuyat_Phacilitator_Project($name);

        if ($recipes) {
            foreach ($recipes as $recipe) {
                $project->set($recipe->getName(), $recipe);
            }
        }

        return $project;
    }

    public function group($name, array $recipes)
    {
        $group = new Yuyat_Phacilitator_RecipeGroup($name);

        foreach ($recipes as $recipeName => $recipe) {
            $recipe->setParentGroup($group);
            $group->set($recipeName, $recipe);
        }

        return $group;
    }

    public function task($name, Yuyat_Phacilitator_RecipeInterface $recipe)
    {
        $recipe->setName($name);

        return $recipe;
    }

    public function load($file)
    {
        return include $file;
    }
}
