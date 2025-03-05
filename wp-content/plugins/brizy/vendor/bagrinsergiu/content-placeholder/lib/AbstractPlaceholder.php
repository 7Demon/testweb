<?php

namespace BrizyPlaceholders;

abstract class AbstractPlaceholder implements PlaceholderInterface, \Serializable, \JsonSerializable
{
    /**
     * It should return an unique identifier of the placeholder
     *
     * @return mixed
     */
    public function getUid()
    {
        return md5(microtime().mt_rand(0, 10000));
    }

    public function shouldFallbackValue($value, ContextInterface $context, ContentPlaceholder $placeholder)
    {
        return empty($value);
    }

    public function getFallbackValue(ContextInterface $context, ContentPlaceholder $placeholder)
    {
        $attributes = $placeholder->getAttributes();

        return isset($attributes[PlaceholderInterface::FALLBACK_KEY]) ? $attributes[PlaceholderInterface::FALLBACK_KEY] : '';
    }

    /**
     * @param array $attributes it should be a key value string
     * @return string
     */
    public function buildPlaceholder($attributes = [])
    {
        $placeholder = $this->getPlaceholder();

        if (!empty($placeholder)) {
            $attrs = $this->buildAttributeString();
            if (strlen($attrs) !== 0) {
                $attrs = " ".$attrs;
            }


            return "{{".$placeholder.$attrs."}}";
        }

        return "";
    }

    protected function buildAttributeString()
    {
        return implode(
            " ",
            array_map(function ($key, $val) {
                $val = addslashes(urlencode($val));
                return "{$key}=\"{$val}\"";
            },
                array_keys($this->getAttributes()),
                array_values($this->getAttributes())
            )
        );
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize($this->jsonSerialize());
    }

    /**
     * @param string $data
     */
    public function unserialize($data)
    {

        $vars = unserialize($data);

        foreach ($vars as $prop => $value) {
            $this->$prop = $value;
        }
    }

    public function __serialize()
    {
        return $this->jsonSerialize();
    }

    public function __unserialize($data)
    {
        foreach ($data as $prop => $value) {
            $this->$prop = $value;
        }
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    public function getVaryAttributes()
    {
        return [];
    }
}
