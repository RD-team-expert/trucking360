<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\SitemapController;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        (new SitemapController)->generate();
        $this->info('Sitemap generated successfully.');
    }
}
