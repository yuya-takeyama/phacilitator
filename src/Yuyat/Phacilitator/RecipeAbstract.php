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
 * Abstract class for Recipes.
 *
 * @author Yuya Takeyama
 */
abstract class Yuyat_Phacilitator_RecipeAbstract
    implements Yuyat_Phacilitator_RecipeInterface
{
    private $name;

    public function getFullName()
    {
        $recipe = $this;
        $name   = $recipe->getName();

        while ($recipe->hasParentGroup()) {
            $parent = $recipe->getParentGroup();

            $name = "{$parent->getName()}::{$name}";

            $recipe = $parent;
        }

        return $name;
    }

    abstract public function getDescription();

    abstract public function execute(Yuyat_Phacilitator_RecipeArgumentsInterface $args);

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setParentGroup(Yuyat_Phacilitator_RecipeGroup $group)
    {
        $this->parentGroup = $group;
    }

    public function getParentGroup()
    {
        return $this->parentGroup;
    }

    public function hasParentGroup()
    {
        return isset($this->parentGroup);
    }

    public function isGroup()
    {
        return false;
    }
}
