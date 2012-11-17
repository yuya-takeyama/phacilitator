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
 * The Application.
 *
 * @author Yuya Takeyama
 */
class Yuyat_Phacilitator_Application
{
    const VERSION = '0.0.0';

    const EXIT_OK = 0;

    /**
     * @var Yuyat_Phacilitator_Project
     */
    private $project;

    public function run($argv)
    {
        $this->loadProject();

        echo "Phacilitator ver. " . self::VERSION, PHP_EOL, PHP_EOL;
        echo "Project: {$this->project->getName()}", PHP_EOL, PHP_EOL;

        if (count($argv) === 1) {
            return $this->listAction();
        }
    }

    public function listAction()
    {
        echo "Recipes", PHP_EOL;

        foreach (new RecursiveIteratorIterator($this->project) as $recipe) {
            echo "  {$recipe->getFullName()}\t{$recipe->getDescription()}", PHP_EOL;
        }

        return self::EXIT_OK;
    }

    private function loadProject()
    {
        $file = './.phacilitator/project.php';

        if (! file_exists($file)) {
            throw new RuntimeException(
                sprintf(
                    'Definition file is not found (%s)',
                    realpath($file)
                )
            );
        }

        $this->project = include $file;
    }
}
