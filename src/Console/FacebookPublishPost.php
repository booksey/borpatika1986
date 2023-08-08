<?php

namespace App\Console;

use App\Helper\FacebookHelperInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Throwable;

final class FacebookPublishPost extends Command
{
    public function __construct(private FacebookHelperInterface $facebookHelper)
    {
        $this->facebookHelper = $facebookHelper;
        parent::__construct();
    }

    protected function configure(): void
    {
        parent::configure();

        $this->setName('facebook-publish-post');
        $this->setDescription('A command to publish post on a page');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $this->facebookHelper->publishPagePost('Slim cli test');
        } catch (Throwable $e) {
            echo $e->getMessage() . "\n";
        }

        return 0;
    }
}
