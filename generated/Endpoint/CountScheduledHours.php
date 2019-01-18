<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Forecast\Api\Endpoint;

class CountScheduledHours extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $date;

    /**
     * Returns the number of scheduled hours.
     *
     * @param string $date The date after which to lookup
     */
    public function __construct(string $date)
    {
        $this->date = $date;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{date}'], [$this->date], '/aggregate/future_scheduled_hours/{date}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \JoliCode\Forecast\Api\Model\FutureScheduledHours|\JoliCode\Forecast\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHours', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\Error', 'json');
    }
}
