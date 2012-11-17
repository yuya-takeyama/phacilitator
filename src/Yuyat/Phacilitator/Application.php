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

    public function run(
        Yuyat_Phacilitator_InputInterface  $input,
        Yuyat_Phacilitator_OutputInterface $output
    )
    {
        $this->loadProject();

        $argc = $input->getArgc();

        echo "Phacilitator ver. " . self::VERSION, PHP_EOL, PHP_EOL;
        echo "Project: {$this->project->getName()}", PHP_EOL, PHP_EOL;

        if ($argc === 1) {
            return $this->listAction($input, $output);
        } else {
            return $this->executeAction($input, $output);
        }
    }

    public function listAction($input, $output)
    {
        $output->writeln("Recipes");

        foreach (new RecursiveIteratorIterator($this->project) as $recipe) {
            $output->writeln("  {$recipe->getFullName()}\t{$recipe->getDescription()}");
        }

        return self::EXIT_OK;
    }

    public function executeAction($input, $output)
    {
        $argv       = $input->getArgv();
        $recipeName = $argv[1];

        $recipe = $this->project->findRecipe($recipeName);

        $recipe->execute($input, $output);
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
