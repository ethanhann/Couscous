<?php

namespace Couscous\Step\Scripts;

use Couscous\Model\Repository;
use Couscous\Step\StepInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Execute the scripts that were set in "scripts.before" in the configuration.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
class ExecuteBeforeScripts extends ExecuteScripts implements StepInterface
{
    public function __invoke(Repository $repository, OutputInterface $output)
    {
        $scripts = $repository->metadata['scripts.before'];

        $this->executeScripts($scripts, $repository, $output);
    }
}