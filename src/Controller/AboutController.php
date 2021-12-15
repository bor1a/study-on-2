<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    public function show(): Response
    {
        $sText = 'Test about text. Super test';
        $sText .= 'llalalalalla';

		return $this->render('simple/TextPage.html.twig', [
			'sText' => $sText,
		]);
        // return new Response(
            // '<html><body>About project: '.$sText.'</body></html>'
        // );
    }
}