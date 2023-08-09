<?php

namespace App\Console;

use App\Helper\FacebookHelperInterface;
use RuntimeException;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class FacebookPublishPost extends Command
{
    private FacebookHelperInterface $facebookHelper;

    public function __construct(FacebookHelperInterface $facebookHelper)
    {
        parent::__construct();
        $this->facebookHelper = $facebookHelper;
    }

    protected function configure(): void
    {
        parent::configure();
        $this->setName('facebook-publish-post');
        $this->setDescription('A command to publish post on a page');
    }

    /** @SuppressWarnings(PHPMD.UnusedFormalParameter) */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln(date('Y-m-d H:i:s') . ": " . $this->getName() . " execution started");
        try {
            $this->facebookHelper->publishPagePost('Slim cli test');
        } catch (RuntimeException $exception) {
            $output->writeln($exception->getMessage());
        }
        $output->writeln(date('Y-m-d H:i:s') . ": " . $this->getName() . " execution ended");

        return 0;
    }
}
