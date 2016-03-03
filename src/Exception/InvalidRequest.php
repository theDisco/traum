<?php

namespace Traum\Exception;

use Psr\Http\Message\ResponseInterface;

/**
 * Class InvalidRequest
 * @package Traum\Exception
 * @author Wojtek Gancarczyk <wojtek@aferalabs.com>
 */
final class InvalidRequest extends \Exception
{
    /**
     * @var \stdClass
     */
    private $content;

    /**
     * @param ResponseInterface $response
     * @return InvalidRequest
     */
    public static function create(ResponseInterface $response)
    {
        $content = json_decode($response->getBody()->getContents());
        $exception = new self(self::constructMessage($content));
        $exception->setContent($content);

        return $exception;
    }

    /**
     * @param \stdClass $content
     * @return void
     */
    public function setContent(\stdClass $content)
    {
        $this->content = $content;
    }

    /**
     * @return \stdClass
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param \stdClass $content
     * @return string
     */
    private static function constructMessage(\stdClass $content)
    {
        return sprintf('%s %s: %s', $content->status, $content->title, $content->detail);
    }
}
