<?php

namespace Ebay\Commerce\Media\Api;

use Ebay\Commerce\Media\Model\CreateVideoRequest as CreateVideoRequest;
use Ebay\Commerce\Media\Model\InputStream as InputStream;
use Ebay\Commerce\Media\Model\Video as VideoModel;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Video extends AbstractAPI
{
    /**
     * This method creates a video. When using this method, specify the title, size,
     * and classification of the video to be created. Description is an optional field
     * for this method. Tip: See Adding a video to your listing in the eBay Seller
     * Center for details about video formatting requirements and restrictions, or
     * visit the relevant eBay site help pages for the region in which the listings
     * will be posted. When a video is successfully created, the method returns the
     * HTTP Status Code 201 Created.The method also returns the location response
     * header containing the video ID, which you can use to retrieve the video. Note:
     * There is no ability to edit metadata on videos at this time. There is also no
     * method to delete videos. To upload a created video, use the uploadVideo method.
     *
     * @param CreateVideoRequest $Model This method creates a video. When using this
     *                                  method, specify the title, size, and classification of the video to be created.
     *                                  Description is an optional field for this method. Tip: See Adding a video to
     *                                  your listing in the eBay Seller Center for details about video formatting
     *                                  requirements and restrictions, or visit the relevant eBay site help pages for
     *                                  the region in which the listings will be posted. When a video is successfully
     *                                  created, the method returns the HTTP Status Code 201 Created.The method also
     *                                  returns the location response header containing the video ID, which you can use
     *                                  to retrieve the video. Note: There is no ability to edit metadata on videos at
     *                                  this time. There is also no method to delete videos. To upload a created video,
     *                                  use the uploadVideo method.
     *
     * @return mixed
     */
    public function create(CreateVideoRequest $Model)
    {
        return $this->client->request('createVideo', 'POST', 'commerce/media/v1_beta/video',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This method retrieves a video's metadata and content given a specified video ID.
     * The method returns the title, size, classification, description, video ID,
     * playList, status, status message (if any), expiration date, and thumbnail image
     * of the retrieved video. The video&rsquo;s title, size, classification, and
     * description are set using the createVideo method. The video's playList contains
     * two URLs that link to instances of the streaming video based on the supported
     * protocol. The status field contains the current status of the video. After a
     * video upload is successfully completed, the video's status will show as
     * PROCESSING until the video reaches one of the terminal states of LIVE, BLOCKED
     * or PROCESSING_FAILED. If a video's processing fails, it could be because the
     * file is corrupted, is too large, or its size doesn&rsquo;t match what was
     * provided in the metadata. Refer to the error messages to determine the cause of
     * the video&rsquo;s failure to upload. The status message will indicate why a
     * video was blocked from uploading. The video&rsquo;s expiration date is
     * automatically set to 365 days (one year) after the video&rsquo;s initial
     * creation. The video's thumbnail image is automatically generated when the video
     * is created.
     *
     * @param $video_id The video ID for the video to be retrieved
     *
     * @return VideoModel
     */
    public function get($video_id): VideoModel
    {
        return $this->client->request('getVideo', 'GET', "commerce/media/v1_beta/video/{$video_id}",
            [
            ]
        );
    }

    /**
     * This method associates the specified file with the specified video ID and
     * uploads the input file. After the file has been uploaded the processing of the
     * file begins. Note: The size of the video to be uploaded must exactly match the
     * size of the video's input stream that was set in the createVideo method. If the
     * sizes do not match, the video will not upload successfully. When a video is
     * successfully uploaded, it returns the HTTP Status Code 200 OK. The status flow
     * is PENDING_UPLOAD &gt; PROCESSING &gt; LIVE, PROCESSING_FAILED, or BLOCKED.
     * After a video upload is successfully completed, the status will show as
     * PROCESSING until the video reaches one of the terminal states of LIVE, BLOCKED,
     * or PROCESSING_FAILED. If the size information (in bytes) provided is incorrect,
     * the API will throw an error. Tip: See Adding a video to your listing in the eBay
     * Seller Center for details about video formatting requirements and restrictions,
     * or visit the relevant eBay site help pages for the region in which the listings
     * will be posted. To retrieve an uploaded video, use the getVideo method.
     *
     * @param $video_id The video ID for the uploaded video
     * @param InputStream $Model This method associates the specified file with the
     *                           specified video ID and uploads the input file. After the file has been uploaded
     *                           the processing of the file begins. Note: The size of the video to be uploaded
     *                           must exactly match the size of the video's input stream that was set in the
     *                           createVideo method. If the sizes do not match, the video will not upload
     *                           successfully. When a video is successfully uploaded, it returns the HTTP Status
     *                           Code 200 OK. The status flow is PENDING_UPLOAD &gt; PROCESSING &gt; LIVE,
     *                           PROCESSING_FAILED, or BLOCKED. After a video upload is successfully completed,
     *                           the status will show as PROCESSING until the video reaches one of the terminal
     *                           states of LIVE, BLOCKED, or PROCESSING_FAILED. If the size information (in
     *                           bytes) provided is incorrect, the API will throw an error. Tip: See Adding a
     *                           video to your listing in the eBay Seller Center for details about video
     *                           formatting requirements and restrictions, or visit the relevant eBay site help
     *                           pages for the region in which the listings will be posted. To retrieve an
     *                           uploaded video, use the getVideo method.
     *
     * @return mixed
     */
    public function upload($video_id, InputStream $Model)
    {
        return $this->client->request('uploadVideo', 'POST', "commerce/media/v1_beta/video/{$video_id}/upload",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
