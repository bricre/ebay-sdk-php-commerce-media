<?php

namespace Ebay\Commerce\Media\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A response field that retrieves all the metadata for the video, including its
 * <b>title</b>, <b>classification</b>, <b>size</b>, <b>description</b>,
 * <b>status</b>, <b>status message</b> (if any), and <b>expiration date</b>.
 */
class Video extends AbstractModel
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
     * The description of the video. The video description is an optional field that
     * can be set using the createVideo method.
     *
     * @var string
     */
    public $description = null;

    /**
     * The expiration date of the video in Coordinated Universal Time (UTC). The
     * video&rsquo;s expiration date is automatically set to 365 days (one year) after
     * the video&rsquo;s initial upload.
     *
     * @var string
     */
    public $expirationDate = null;

    /**
     * The playlist created for the uploaded video, which provides the streaming video
     * URLs to play the video. The supported streaming video protocols are DASH
     * (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP&nbsp;Live Streaming). The
     * playlist will only be generated if a video is successfully uploaded with a
     * status of LIVE.
     *
     * @var \Ebay\Commerce\Media\Model\Play[]
     */
    public $playLists = null;

    /**
     * The size, in bytes, of the video content.
     *
     * @var int
     */
    public $size = null;

    /**
     * The status of the current video resource. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/media/types/api:VideoStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * The statusMessage field contains additional information on the status. For
     * example, information on why processing might have failed or if the video was
     * blocked.
     *
     * @var string
     */
    public $statusMessage = null;

    /**
     * @var \Ebay\Commerce\Media\Model\Image
     */
    public $thumbnail = null;

    /**
     * The title of the video.
     *
     * @var string
     */
    public $title = null;

    /**
     * The unique ID of the video.
     *
     * @var string
     */
    public $videoId = null;
}
