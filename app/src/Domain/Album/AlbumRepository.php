<?php

declare(strict_types=1);

namespace App\Domain\Album;

use App\Domain\Band\BandRepository;

class AlbumRepository
{
    private $albums;

    public function __construct(array $albums = null)
    {
        $this->albums = $albums ?? [
            1 => new Album(1, 'Dynamo', '10-01-1992', 12, array('url' => 'https://images-na.ssl-images-amazon.com/images/I/81mSrIsSGwL._AC_SL1417_.jpg'), '59:11', 1),
            2 => new Album(2, 'Ruido Blanco', '11-01-1987', 8, array('url' => 'https://soonatas.files.wordpress.com/2017/11/ruido_blanco.jpg?w=953&h=953&crop=1'), '47:11', 1),
            3 => new Album(3, 'Me veras volver #1', '07-18-2008', 28, array('url' => 'https://images-na.ssl-images-amazon.com/images/I/81RYk%2BVs4QL._AC_SL1500_.jpg'), '2:15:30', 1),
            4 => new Album(4, 'El ultimo concierto', '12-16-1997', 11, array('url' => 'https://img.discogs.com/rbHYUUxB5OgrYYrVlDKvkRKAmog=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-723165-1152004864.jpeg.jpg'), '2:52:00', 1),
            5 => new Album(5, 'Huevos Revueltos', '06-15-2018', 29, array('url' => 'https://http2.mlstatic.com/hombres-g-y-enanitos-verdes-huevos-revueltos-vivo-2-cdsdvd-D_NQ_NP_671024-MLM27611493747_062018-F.jpg'), '2:06:00', 2),
            6 => new Album(6, 'Amores Lejanos', '10-29-2002', 12, array('url' => 'https://img.discogs.com/44lIhSbo9qnwtW6aMe7IXmaI4Js=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-3065523-1314105198.jpeg.jpg'), '54:06', 2),
            7 => new Album(7, 'Traccion Acustica', '01-27-1998', 12, array('url' => 'https://img.discogs.com/Klj44KoEvz26hTyBiLvGlkA1jws=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-3191978-1319852143.jpeg.jpg'), '48:31', 2),
            8 => new Album(8, 'En vivo', '08-17-2004', 16, array('url' => 'https://i.ytimg.com/vi/0y-GIst6I1M/hqdefault.jpg'), '1:16:00', 2),
            9 => new Album(9, 'El Silencio', '05-29-1992', 14, array('url' => 'https://img.discogs.com/7-JhlKyRusqIqZZDTrYhLxvCT7U=/fit-in/600x601/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-5422546-1392973688-6815.jpeg.jpg'), '58:04', 3),
            10 => new Album(10, 'Volumen II', '06-19-1990', 11, array('url' => 'https://upload.wikimedia.org/wikipedia/en/5/5c/Caifanes_ElDiablitoLP_cover.jpeg'), '46:20', 3),
            11 => new Album(11, '25 Aniversario', '06-12-2012', 18, array('url' => 'https://http2.mlstatic.com/caifanes-25-aniversario-cd-dvd-D_NQ_NP_808910-MLM29921262318_042019-F.jpg'), '59:56', 3),
            12 => new Album(12, 'Hombres G', '03-31-1990', 10, array('url' => 'https://img.discogs.com/1dNLDGzrw62NOdzs8FhiflqhvUI=/fit-in/450x449/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-5478462-1394395068-6478.jpeg.jpg'), '1:12:00', 4),
            13 => new Album(13, 'Estamos locos… ¿o qué?', '1987', 10, array('url' => 'https://img.discogs.com/z8yzhDN3m3OgMyv6Fuv-3inh3CU=/fit-in/600x600/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-965178-1286573644.jpeg.jpg'), '34:12', 4),
            14 => new Album(14, 'Esta es tu vida', '1990', 14, array('url' => 'https://img.discogs.com/pHIwFZWFsoB0qON4bRQ9WJTCnGM=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-965191-1286573804.jpeg.jpg'), '48:42', 4),
            15 => new Album(15, 'En la playa', '2011', 10, array('url' => 'https://los40mx00.epimg.net/los40/imagenes/2011/11/10/actualidad/1320940800_576298_1320944640_noticia_normal.jpg'), '38:14', 4),
            16 => new Album(16, 'Historia del bikini', '05-14-1992', 11, array('url' => 'https://http2.mlstatic.com/hombres-g-historia-del-bikini-D_NQ_NP_18228-MLM20152085698_082014-F.jpg'), '52:42', 4),
        ];
    }

    public function findAll(): array
    {
        return array_values($this->albums);
    }

    public function findByBandName(string $name): array
    {
        $bandRepository = new BandRepository();
        $band = $bandRepository->findByName($name);

        $result = [];
        foreach ($this->albums as $album) {
            if ($album->getBandId() == $band->getId())
                array_push($result, $album);
        }

        if (!isset($result))
            throw new AlbumNotFoundException();

        return $result;
    }
}
