<?php

namespace Nexy\PHPAV\Console;

use Nexy\PHPAV\Console\Command\AnalyseCommand;
use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
final class Application extends BaseApplication
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct('PHPAV');
    }

    protected function configureIO(InputInterface $input, OutputInterface $output)
    {
        parent::configureIO($input, $output); // TODO: Change the autogenerated stub
    }

    /**
     * {@inheritdoc}
     */
    protected function getDefaultCommands()
    {
        return array_merge(parent::getDefaultCommands(), [
            new AnalyseCommand(),
        ]);
    }
}