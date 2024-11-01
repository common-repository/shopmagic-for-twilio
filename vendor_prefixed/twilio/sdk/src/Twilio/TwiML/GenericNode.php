<?php

namespace ShopMagicTwilioVendor\Twilio\TwiML;

class GenericNode extends \ShopMagicTwilioVendor\Twilio\TwiML\TwiML
{
    /**
     * GenericNode constructor.
     *
     * @param string $name XML element name
     * @param string $value XML value
     * @param array $attributes XML attributes
     */
    public function __construct(string $name, ?string $value, array $attributes)
    {
        parent::__construct($name, $value, $attributes);
        $this->name = $name;
        $this->value = $value;
    }
}
