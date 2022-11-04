<?php

namespace Garrett9\ContainerCommand\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class ContainerCommand extends Command
{
    private const IN_CONTAINER = 'IN_CONTAINER';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $inContainer = (bool) env(self::IN_CONTAINER);
        if (! $inContainer) {
            $command = implode(' ', array_slice($_SERVER['argv'], 1));

            $result = (int) exec("docker-compose -f ../laradock/docker-compose.yml exec --env IN_CONTAINER=1 --user=laradock workspace php /var/www/assetsheld-account/artisan ${command}", $lines);

            echo implode("\n", $lines);

            return $result;
        }

        return parent::execute($input, $output);
    }
}
