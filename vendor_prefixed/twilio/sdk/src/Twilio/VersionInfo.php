<?php

namespace ShopMagicTwilioVendor\Twilio;

class VersionInfo
{
    const MAJOR = "7";
    const MINOR = "16";
    const PATCH = "1";
    public static function string()
    {
        return \implode('.', array(self::MAJOR, self::MINOR, self::PATCH));
    }
}
