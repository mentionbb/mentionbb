<?php

namespace App\SubContainer\Post;

use App\Entity\LinkPreviews;

class Link
{
    public static function CreatePreview(array $data)
    {
        $input = \App\Repository\Set::setObject($data);

        $linkPreview = new LinkPreviews;

        if ($linkPreview->createLinkPreview(\sha1($input->url), \json_encode($input->json), $input->post_id))
        {
            return true;
        }
    }
}
