<?php

namespace Ebay\Commerce\Media\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request to create a video, which must contain the video's <b>title</b>,
 * <b>size</b>, and <b>classification</b>. <b>Description</b> is an optional field
 * when creating videos.
 */
class CreateVideoRequest extends AbstractModel
{
    /**
     * The intended use for this video content. The video&rsquo;s classification is
     * used to associate the video with a user or seller. Currently, the classification
     * of all videos should be set to ITEM.
     *
     * @var string[]|For implementation help, refer to <a
     *                   href='https://developer.ebay.com/api-docs/commerce/media/types/api:Classification'>eBay
     *                   API documentation</a>[]
     */
    public $classification = null;

    /**
     * The size, in bytes, of the video content.
     *
     * @var int
     */
    public $size = null;

    /**
     * The title of the video.
     *
     * @var string
     */
    public $title = null;

    /**
     * The description of the video.
     *
     * @var string
     */
    public $description = null;
}
