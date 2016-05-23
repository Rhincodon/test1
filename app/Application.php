<?php

namespace App;

use Symfony\Component\HttpFoundation\Response;

class Application
{
    /**
     * Run App
     */
    public function run()
    {
        $response = $this->makeResponse();

        $response->setContent(RandomQuote::getRandomQuote());

        $response->send();
    }

    /**
     * @return Response
     */
    private function makeResponse()
    {
        return new Response(null, Response::HTTP_OK, ['content-type' => 'text/html']);
    }
}