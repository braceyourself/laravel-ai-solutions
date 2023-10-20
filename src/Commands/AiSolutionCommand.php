<?php

namespace Braceyourself\AiSolution\Commands;

use Illuminate\Console\Command;

class AiSolutionCommand extends Command
{
    public $signature = 'laravel-ai-solutions';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
