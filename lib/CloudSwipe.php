<?php
/**
* The MIT License (MIT)
* 
* Copyright (c) 2017 CloudSwipe
* 
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
* @author    Joey Beninghove
* @copyright 2017 CloudSwipe
* @license   https://opensource.org/licenses/MIT MIT
*/

class CloudSwipe
{
    public static $secretKey;
    public static $environment = "production";
    public static $urls = array(
        "production" => "https://api.cloudswipe.com/v1/",
        "staging" => "https://api.southchicken.com/v1/",
        "development" => "http://api.cloudswipe.dev/v1/"
    );

    public static function url()
    {
        return self::$urls[self::$environment];
    }

    public static function setEnvironment($environment)
    {
        self::$environment = $environment;
    }

    public static function setSecretKey($secretKey)
    {
        self::$secretKey = $secretKey;
    }
}

require_once(dirname(__FILE__)."/CloudSwipe/Resource.php");
require_once(dirname(__FILE__)."/CloudSwipe/Address.php");
require_once(dirname(__FILE__)."/CloudSwipe/Customer.php");
require_once(dirname(__FILE__)."/CloudSwipe/Http.php");
require_once(dirname(__FILE__)."/CloudSwipe/Invoice.php");
require_once(dirname(__FILE__)."/CloudSwipe/LineItems.php");
require_once(dirname(__FILE__)."/CloudSwipe/LineTotals.php");
require_once(dirname(__FILE__)."/CloudSwipe/MetaData.php");
require_once(dirname(__FILE__)."/CloudSwipe/Name.php");
require_once(dirname(__FILE__)."/CloudSwipe/Url.php");
