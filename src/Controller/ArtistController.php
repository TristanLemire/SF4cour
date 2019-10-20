<?php

namespace App\Controller;

use App\Entity\Artist;
use App\Repository\ArtistRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArtistController extends AbstractController
{
    /**
     * @Route("/artist_list", name="list")
     */
    public function index(ArtistRepository $artistRepo)
    {
       /* //Creation d'un artiste
        $artist = (new Artist())
            ->setName('tristan')
            ->setDescription('un artist de KaLiTY');

        // Préparation a l'enregistrement
        $em->persist($artist);

        // Enregistrement
        $em->flush();*/

       /*$results = $artistRepo->findAll();*/
        /*$results = $artistRepo->findBy(['description' => null]);*/
        /*$results = $artistRepo->find(42);*/
        /*$results = $artistRepo->findOneBy(['name' => 'MC Rémy Je ne.']);*/
        $results = $artistRepo->findDj();


        return $this->render('artists/list.html.twig',[
            'res' => $results,
        ]);
    }
}
