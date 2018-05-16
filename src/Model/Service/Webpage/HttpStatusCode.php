<?php
namespace LeoGalleguillos\Website\Model\Service\Webpage;

use LeoGalleguillos\Website\Model\Entity as WebsiteEntity;

class HttpStatusCode
{
    /**
     * Get HTTP status code.
     *
     * @param WebsiteEntity\Webpage $webpageEntity
     * @return int;
     */
    public function getHttpStatusCode(
        WebsiteEntity\Webpage $webpageEntity
    ) : int {
        $handle = curl_init($webpageEntity->getUrl());
        curl_setopt($handle,  CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($handle, CURLOPT_TIMEOUT, 3);

        $response = curl_exec($handle);

        $httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);

        curl_close($handle);

        return $httpCode;

    }
}
