<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->update('site.github_url', 'https://www.github.com/liberusoftware');
        $this->migrator->update('site.youtube_url', 'https://www.youtube.com/@liberusoftware');
        $this->migrator->update('site.facebook_url', 'https://www.facebook.com/liberusoftware');
        $this->migrator->update('site.twitter_url', 'https://x.com/liberusoftware');
    }

    public function down(): void
    {
        $this->migrator->update('site.github_url', 'https://github.com/liberusoftware/boilerplate-laravel');
        $this->migrator->update('site.youtube_url', null);
        $this->migrator->update('site.facebook_url', null);
        $this->migrator->update('site.twitter_url', null);
    }
};
