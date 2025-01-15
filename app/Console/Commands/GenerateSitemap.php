<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\SitemapController;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap and save it to the public directory';

    public function handle()
    {
        $controller = new SitemapController();
        $controller->generate();

        $this->info('Sitemap generated successfully.');
    }
    
}
