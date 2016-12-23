<?php

namespace AppBundle\Controller;

use Pimcore\Model\Document\Page;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContentController extends Controller
{
    /**
     * @Template("@App/Content/default.html.twig")
     * @param Request $request
     */
    public function defaultAction(Request $request)
    {
        $document = $request->get('contentDocument');

        return [
            'document' => $document
        ];
    }
}
