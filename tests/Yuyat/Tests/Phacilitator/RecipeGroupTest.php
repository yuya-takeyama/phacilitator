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
 * Unit-tests for Yuyat_Phacilitator_RecipeGroup.
 *
 * @author Yuya Takeyama
 */
class Yuyat_Tests_Phacilitator_RecipeGroupTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function count_should_be_0_by_default()
    {
        $group = new Yuyat_Phacilitator_RecipeGroup('foo');

        $this->assertCount(0, $group);
    }

    /**
     * @test
     */
    public function count_should_be_its_size_of_elements()
    {
        $group = new Yuyat_Phacilitator_RecipeGroup('foo');

        $group->set('bar', $this->createMockRecipe());
        $group->set('baz', $this->createMockRecipe());

        $this->assertCount(2, $group);
    }

    private function createMockRecipe()
    {
        return $this->getMock('Yuyat_Phacilitator_RecipeInterface');
    }
}
