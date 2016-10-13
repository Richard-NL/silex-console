<?php
namespace Rsh\Command;

use Knp\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DbCommand extends Command
{
    protected function configure()
    {
        $this
          ->setName("db-command")
          ->setDescription("A test command!");
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("It works!");
    }
}
