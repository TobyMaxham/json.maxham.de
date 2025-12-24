<?php

namespace App\Http\Controllers;

/**
 * @author Tobias Maxham <git2018@maxham.de>
 */
class CommentController extends JsonController
{
    public function getPostComments($postID)
    {
        $rItem = collect();
        foreach ($this->jsonData as $item) {
            if ($item->postId == $postID) {
                $rItem->push($item);
            }
        }

        return response()->jsonpretty($rItem);
    }
}
