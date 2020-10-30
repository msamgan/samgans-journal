<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make sitemap';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        SitemapGenerator::create(config('app.url'))->getSitemap()->writeToDisk('public', 'sitemap.xml');
    }
}
