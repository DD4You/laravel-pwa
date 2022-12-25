<?php

namespace DD4You\Pwa\commands;

use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class PublishPWA extends Command
{

    protected $signature = 'dd4you:install-pwa';

    protected $description = 'Publish Service Worker|Offline HTMl|manifest file for PWA application.';

    public function handle()
    {
        $publicDir = public_path();

        $manifestTemplate = file_get_contents(__DIR__ . '/stubs/manifest.stub');
        $this->createFile($publicDir . DIRECTORY_SEPARATOR, 'manifest.json', $manifestTemplate);
        $this->info('manifest.json file is published.');

        $_404HtmlTemplate = file_get_contents(__DIR__ . '/stubs/404.stub');
        $this->createFile($publicDir . DIRECTORY_SEPARATOR, '404.html', $_404HtmlTemplate);
        $this->info('404.html file is published.');

        $swTemplate = file_get_contents(__DIR__ . '/stubs/sw.stub');
        $this->createFile($publicDir . DIRECTORY_SEPARATOR, 'sw.js', $swTemplate);
        $this->info('sw.js (Service Worker) file is published.');

        $this->info('Greeting!.. Enjoy PWA site...');
    }

    public static function createFile($path, $fileName, $contents)
    {
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        $path = $path . $fileName;

        file_put_contents($path, $contents);
    }
}
