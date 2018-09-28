<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Quiz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quiz:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $questions = $this->getQuestions();

        foreach ($questions as $key)
        {
            $answers[] = $this->ask($key);
        }

        $this->info("All questions:");

        foreach ($questions as $key)
        {
            $this->info($key);
        }

        $this->info("All answers:");

        foreach ($answers as $key)
        {
            $this->info($key);
        }

    }

    public function getQuestions()
    {
        return config('app.questions');
    }


}
