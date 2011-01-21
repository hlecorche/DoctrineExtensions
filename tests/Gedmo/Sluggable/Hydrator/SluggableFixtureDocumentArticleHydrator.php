<?php

namespace Hydrator;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class SluggableFixtureDocumentArticleHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data)
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = (string) $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['title'])) {
            $value = $data['title'];
            $return = (string) $value;
            $this->class->reflFields['title']->setValue($document, $return);
            $hydratedData['title'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['code'])) {
            $value = $data['code'];
            $return = (string) $value;
            $this->class->reflFields['code']->setValue($document, $return);
            $hydratedData['code'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['slug'])) {
            $value = $data['slug'];
            $return = (string) $value;
            $this->class->reflFields['slug']->setValue($document, $return);
            $hydratedData['slug'] = $return;
        }
        return $hydratedData;
    }
}