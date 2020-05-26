<?php

declare(strict_types=1);

$app->group('/api/v1', function () {
    $this->get('/bands', 'ListBandsAction')->setName('BandsPage');
    // $this->get('/albums', 'ListAlbumsAction')->setName('AlbumsPage');
    $this->get('/albums', 'ViewBandAlbumsAction')->setName('BandAlbumsPage');
});
