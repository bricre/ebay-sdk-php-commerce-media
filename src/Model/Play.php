<?php

namespace Ebay\Commerce\Media\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Lists the two streaming video URLs available for a successfully uploaded video
 * with a status of <code>LIVE</code>. The supported streaming video protocols are
 * DASH (Dynamic Adaptive Streaming over HTTP) and HLS (HTTP Live Streaming).
 */
class Play extends AbstractModel
{
    /**
     * The protocol for the video playlist. Supported protocols are DASH (Dynamic
     * Adaptive Streaming over HTTP) and HLS (HTTP&nbsp;Live Streaming). For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/media/types/api:ProtocolEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $protocol = null;

    /**
     * The playable URL for this video.
     *
     * @var string
     */
    public $playUrl = null;
}
