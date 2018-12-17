<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 17/12/2018
 * Time: 14:18
 */

namespace App\Controller\TechNews;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController
{
    public function index()
    {
        return new Response("<html><body><h1>PAGE D'ACCUEIL</h1></body></html>");
    }

    /* On créer une nouvelle page contact / il faut aussi la créer dans le config/route/routes.yaml */
    public function contact()
    {
        return new Response("<html><body><h1>PAGE DE CONTACT</h1></body></html>");
    }

    /* Technique sans écrire dans le config/route/routes.yaml */

    /**
     * Page permettant d'afficher les artickes d'une categorie
     * @Route("/categorie/{slug<[a-zA-Z1-9-_/]+>}",
     *      methods={"GET"},
     *     defaults={"slug"="news"},
     *      name="front_categorie")
     */
    public function categorie($slug)
    {
        return new Response("<html><body><h1>PAGE CATEGORIE  : $slug</h1></body></html>");
    }

    /**
     * @route("/{categorie<[a-zA-Z1-9-_/]+>}/{slug<[a-zA-Z1-9-_/]+>}_{id<\d+>}.html",
     *     name="front_article")
     * @param $id
     * @param $slug
     * @param $categorie
     * @return Response
     */
    public function article($id, $slug, $categorie)
    {
        # Exemple d'URL
        # /Politique/vinci-autoroute-sont-de-gros-connard-qui*-suce-l-etat 9841.html
        return new Response("<html><body><h1>PAGE ARTICLE : $id</h1></body></html>");
    }
}