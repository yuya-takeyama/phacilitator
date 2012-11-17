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
 * Group consists of Recipes.
 *
 * @author Yuya Takeyama
 */
class Yuyat_Phacilitator_RecipeGroup
    implements Yuyat_Phacilitator_RecipeNodeInterface, Countable, RecursiveIterator
{
    private $name;

    private $parentGroup;

    private $recipes = array();

    private $keys;

    private $pointer;

    public function __construct($name)
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

    public function set($name, Yuyat_Phacilitator_RecipeNodeInterface $recipe)
    {
        $this->recipes[$name] = $recipe;
    }

    public function get($name)
    {
        return $this->recipes[$name];
    }

    public function getRecipes()
    {
        return $this->recipes;
    }

    public function getRecipesAsArray()
    {
        return $this->recipes;
    }

    public function getChildrenNames()
    {
        return array_keys($this->recipes);
    }

    public function isGroup()
    {
        return true;
    }

    public function hasChildren()
    {
        return $this->current() instanceof Yuyat_Phacilitator_RecipeGroup;
    }

    public function getChildren()
    {
        return new ArrayIterator($this->recipes);
    }

    public function rewind()
    {
        $this->pointer = 0;
        $this->keys    = array_keys($this->recipes);
    }

    public function current()
    {
        return $this->recipes[$this->keys[$this->pointer]];
    }

    public function next()
    {
        $this->pointer++;
    }

    public function key()
    {
        return $this->pointer;
    }

    public function valid()
    {
        return count($this->recipes) > $this->pointer;
    }

    public function count()
    {
        return count($this->recipes);
    }
}
