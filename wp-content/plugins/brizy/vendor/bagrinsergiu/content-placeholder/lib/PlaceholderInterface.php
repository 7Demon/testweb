<?php

namespace BrizyPlaceholders;

interface PlaceholderInterface
{
    const FALLBACK_KEY = '_fallback';

    /**
     * Returns true if the placeholder can return a value for the given placeholder name
     *
     * @param $placeholderName
     *
     * @return mixed
     */
    public function support($placeholderName);

    /**
     * Return the string value that will replace the placeholder name in content
     *
     * @param ContextInterface $context
     * @param ContentPlaceholder $placeholder
     *
     * @return mixed
     */
    public function getValue(ContextInterface $context, ContentPlaceholder $placeholder);

    public function shouldFallbackValue($value, ContextInterface $context, ContentPlaceholder $placeholder);

    public function getFallbackValue(ContextInterface $context, ContentPlaceholder $placeholder);

    public function getConfigStructure();

    /**
     * It should return a unique identifier of the placeholder
     *
     * @return mixed
     */
    public function getUid();

    /**
     * Return the placeholder Label
     * @return string
     */
    public function getLabel();

    /**
     * @param $label
     * @return mixed
     */
    public function setLabel($label);

    /**
     * Return the placeholder name
     * @return string
     */
    public function getPlaceholder();

    /**
     * @param $placeholder
     * @return mixed
     */
    public function setPlaceholder($placeholder);

    /**
     * Return the hard coded attributes if there are any
     * @return string
     */
    public function getAttributes();

    /**
     * Return the  attributes that can vary
     * @return string
     */
    public function getVaryAttributes();
}
