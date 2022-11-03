<?php

namespace CommandApp\Cinema\Commands\Search\Infrastructure;

use CommandApp\Cinema\Commands\Shared\Model\MovieRepositoryInterface;
use CommandApp\Cinema\Commands\Search\Application\SearcherByName;
use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * This is a command to find a movie in the repository
 */
class SearcherCommand extends Command
{
    public function __construct(private readonly MovieRepositoryInterface $repository)
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('show')
            ->setDescription('Show a search result by name')
            ->addArgument('name', InputArgument::REQUIRED, 'Name of the search result')
            ->addOption('fullPlot', '-f', InputOption::VALUE_OPTIONAL, 'Display full plot on the search result. possible values are <info>full|short</info>.');
    }

    /**
     * @inheritdoc
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        try {
            $movie = (new SearcherByName($this->repository))
                        ($input->getArgument('name'), $input->getOption('fullPlot'));

            $table = new Table($output);
            $table->setHeaders(["<info>{$movie->getTitle()} - {$movie->getYear()}</info>"]);
            $props = $movie->toArray();

            foreach ($props as $prop => $value) {
                $table->addRow([$prop, $value]);
            }

            $table->render();
        } catch (Exception $exception) {

            $output->writeln((" Error detected with the below error message:  <error>{$exception->getMessage()}</error>"));
            return 1;
        }
        return 0;
    }
}
