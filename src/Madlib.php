<?php

namespace App\Cli;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class Madlib extends Command
{
    protected static $defaultName = 'madlib';

    protected function configure(): void
    {
        $this->setDescription("play a game of madlib!.");
    }

    //this is the function that you will use to solve the prompt
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $helper = $this->getHelper('question');

        $question = new Question('What\'s your name? ', 'World');

        $nameAnswer = $helper->ask($input, $output, $question);

        $output->writeln("Hello, $nameAnswer!");

        return Command::SUCCESS;
    }
}
