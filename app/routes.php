<?php

declare(strict_types=1);

$app->group('/api/v1', function () {
    $this->get('/bands', App\Application\Actions\Band\ListBandsAction::class)->setName('BandsPage');
    // $this->get('/albums',)->setName('AlbumsPage');
});
