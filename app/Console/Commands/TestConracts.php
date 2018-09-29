<?php

namespace App\Console\Commands;

use App\Contracts\FileStorageInterface;
use App\Services\FileStorage\S3FileStorage;
use Illuminate\Console\Command;
use Calculator;

class TestConracts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contracts:test';

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
    protected $s3filestorage;

    public function __construct(FileStorageInterface $s3fileStorage)
    {
        $this->s3filestorage = $s3fileStorage;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $first = $this->ask("Введите первое число");
        $second = $this->ask("Введите второе число");

        $this->info(Calculator::add($first,$second));
    }
}
