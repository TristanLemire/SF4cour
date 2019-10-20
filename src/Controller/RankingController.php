<?php

namespace App\Controller;

use App\Repository\ArtistRepository;
use App\Repository\RecordRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RankingController extends AbstractController
{
    /**
     * @Route("/ranking_news", name="ranking")
     */
    public function index(RecordRepository $recordRepo)
    {
        $results = $recordRepo->findBy(['released_at' > DATEADD(month, -1, GETDATE()) ]);
        return $this->render('ranking/news.html.twig',[
            'res' => $results,
        ]);
    }
}
