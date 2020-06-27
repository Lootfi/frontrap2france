<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Article;
use Carbon\Carbon;

class generateNewsSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'newsSitemap:generate';

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
        $sitemap = new \Dionisiy\SitemapGoogle\Sitemap(public_path('sitemap_news.xml'));
        $siteName = "http://rapfront.test";
        foreach(Article::orderBy('created_at','DESC')->take(50)->get() as $article){

        
            $sitemap->setGenres($article->Category->nom);
            $sitemap->setLanguage('fr');
            $sitemap->setLoc($siteName."/news/".$article->tag);
            $sitemap->setName($siteName);
            $sitemap->setPublicationDate(strtotime($article->dateactu));
            $sitemap->setTitle($article->titre);
            $sitemap->addItem();
        }

        $sitemap->write();

        echo "Generated";

    }
}
