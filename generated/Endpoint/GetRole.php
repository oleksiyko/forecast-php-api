<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Forecast\Api\Endpoint;

class GetRole extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $id;

    /**
     * Returns a Role.
     *
     * @param int $id Id of the Role
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/roles/{id}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null): array
    {
        return [[], null];
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return \JoliCode\Forecast\Api\Model\RolesIdGetResponse200|\JoliCode\Forecast\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\RolesIdGetResponse200', 'json');
        }

        return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\Error', 'json');
    }
}
