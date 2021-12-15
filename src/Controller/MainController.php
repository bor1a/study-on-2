<?
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/courses", name="mobile_homepage", host="m.example.com")
     */
    public function mobileHomepage(): Response
    {
        return new Response('todo courses');
    }

    /**
     * @Route("/courses", name="homepage")
     */
    public function homepage(): Response
    {
        // ...
        return new Response('todo courses');
    }
}