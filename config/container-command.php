<?php

// config for Garrett9/ContainerCommand
return [
    /**
     * Whether or not this package is enabled. When disabled, your commands will run normally.
     *
     * You'll probably only be enabling this package for local development assuming you'll already be in the container in a production environment.
     */
    'enabled' => env('LARAVEL_CONTAINER_COMMAND_ENABLED', false),

    /**
     * The docker command to handle execution. This is a good way to customize the user running the command, the container you're running it against,
     * and the user who runs it.
     *
     * Here's how this config value will be used as an example for a command you have with a signature of "app:invite {email}".
     *
     * docker-compose -f docker-compose.yml exec --env IN_CONTAINER=1 --user=laradock workspace php /path/to/artisan app:invite {email}
     *
     * IMPORTANT: The IN_CONTAINER environment variable is required for the package to work.
     */
    'container_command' => 'docker-compose -f docker-compose.yml exec --env IN_CONTAINER=1 --user=laradock workspace php /path/to/artisan',
];
