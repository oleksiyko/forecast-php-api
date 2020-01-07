<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\Person' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Person' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\Person();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'first_name') && null !== $data->{'first_name'}) {
            $object->setFirstName($data->{'first_name'});
        }
        if (property_exists($data, 'last_name') && null !== $data->{'last_name'}) {
            $object->setLastName($data->{'last_name'});
        }
        if (property_exists($data, 'email') && null !== $data->{'email'}) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'login') && null !== $data->{'login'}) {
            $object->setLogin($data->{'login'});
        }
        if (property_exists($data, 'admin') && null !== $data->{'admin'}) {
            $object->setAdmin($data->{'admin'});
        }
        if (property_exists($data, 'archived') && null !== $data->{'archived'}) {
            $object->setArchived($data->{'archived'});
        }
        if (property_exists($data, 'subscribed') && null !== $data->{'subscribed'}) {
            $object->setSubscribed($data->{'subscribed'});
        }
        if (property_exists($data, 'avatar_url') && null !== $data->{'avatar_url'}) {
            $object->setAvatarUrl($data->{'avatar_url'});
        }
        if (property_exists($data, 'roles') && null !== $data->{'roles'}) {
            $values = [];
            foreach ($data->{'roles'} as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        }
        if (property_exists($data, 'updated_at') && null !== $data->{'updated_at'}) {
            $object->setUpdatedAt($data->{'updated_at'});
        }
        if (property_exists($data, 'updated_by_id') && null !== $data->{'updated_by_id'}) {
            $object->setUpdatedById($data->{'updated_by_id'});
        }
        if (property_exists($data, 'harvest_user_id') && null !== $data->{'harvest_user_id'}) {
            $object->setHarvestUserId($data->{'harvest_user_id'});
        }
        if (property_exists($data, 'weekly_capacity') && null !== $data->{'weekly_capacity'}) {
            $object->setWeeklyCapacity($data->{'weekly_capacity'});
        }
        if (property_exists($data, 'working_days') && null !== $data->{'working_days'}) {
            $object->setWorkingDays($this->denormalizer->denormalize($data->{'working_days'}, 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays', 'json', $context));
        }
        if (property_exists($data, 'color_blind') && null !== $data->{'color_blind'}) {
            $object->setColorBlind($data->{'color_blind'});
        }
        if (property_exists($data, 'personal_feed_token_id') && null !== $data->{'personal_feed_token_id'}) {
            $object->setPersonalFeedTokenId($data->{'personal_feed_token_id'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getFirstName()) {
            $data->{'first_name'} = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data->{'last_name'} = $object->getLastName();
        }
        if (null !== $object->getEmail()) {
            $data->{'email'} = $object->getEmail();
        }
        if (null !== $object->getLogin()) {
            $data->{'login'} = $object->getLogin();
        }
        if (null !== $object->getAdmin()) {
            $data->{'admin'} = $object->getAdmin();
        }
        if (null !== $object->getArchived()) {
            $data->{'archived'} = $object->getArchived();
        }
        if (null !== $object->getSubscribed()) {
            $data->{'subscribed'} = $object->getSubscribed();
        }
        if (null !== $object->getAvatarUrl()) {
            $data->{'avatar_url'} = $object->getAvatarUrl();
        }
        if (null !== $object->getRoles()) {
            $values = [];
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data->{'roles'} = $values;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt();
        }
        if (null !== $object->getUpdatedById()) {
            $data->{'updated_by_id'} = $object->getUpdatedById();
        }
        if (null !== $object->getHarvestUserId()) {
            $data->{'harvest_user_id'} = $object->getHarvestUserId();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data->{'weekly_capacity'} = $object->getWeeklyCapacity();
        }
        if (null !== $object->getWorkingDays()) {
            $data->{'working_days'} = $this->normalizer->normalize($object->getWorkingDays(), 'json', $context);
        }
        if (null !== $object->getColorBlind()) {
            $data->{'color_blind'} = $object->getColorBlind();
        }
        if (null !== $object->getPersonalFeedTokenId()) {
            $data->{'personal_feed_token_id'} = $object->getPersonalFeedTokenId();
        }

        return $data;
    }
}