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
 * Deployer using rsync.
 *
 * @author Yuya Takeyama
 */
class Yuyat_Phacilitator_Recipe_RsyncDeploy
    extends Yuyat_Phacilitator_RecipeAbstract
{
    public function getDescription()
    {
        return "Deployer using rsync";
    }

    public function execute(
        Yuyat_Phacilitator_InputInterface $input,
        Yuyat_Phacilitator_OutputInterface $output
    )
    {
        $output->writeln('Do rsync deploy');
    }
}
