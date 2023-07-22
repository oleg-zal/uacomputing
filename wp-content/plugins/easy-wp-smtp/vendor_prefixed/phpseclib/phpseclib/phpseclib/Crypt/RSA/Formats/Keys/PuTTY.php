<?php

/**
 * PuTTY Formatted RSA Key Handler
 *
 * PHP version 5
 *
 * @author    Jim Wigginton <terrafrost@php.net>
 * @copyright 2015 Jim Wigginton
 * @license   http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link      http://phpseclib.sourceforge.net
 */
namespace EasyWPSMTP\Vendor\phpseclib3\Crypt\RSA\Formats\Keys;

use EasyWPSMTP\Vendor\phpseclib3\Common\Functions\Strings;
use EasyWPSMTP\Vendor\phpseclib3\Crypt\Common\Formats\Keys\PuTTY as Progenitor;
use EasyWPSMTP\Vendor\phpseclib3\Math\BigInteger;
/**
 * PuTTY Formatted RSA Key Handler
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 */
abstract class PuTTY extends \EasyWPSMTP\Vendor\phpseclib3\Crypt\Common\Formats\Keys\PuTTY
{
    /**
     * Public Handler
     *
     * @var string
     */
    const PUBLIC_HANDLER = 'EasyWPSMTP\\Vendor\\phpseclib3\\Crypt\\RSA\\Formats\\Keys\\OpenSSH';
    /**
     * Algorithm Identifier
     *
     * @var array
     */
    protected static $types = ['ssh-rsa'];
    /**
     * Break a public or private key down into its constituent components
     *
     * @param string $key
     * @param string $password optional
     * @return array
     */
    public static function load($key, $password = '')
    {
        static $one;
        if (!isset($one)) {
            $one = new \EasyWPSMTP\Vendor\phpseclib3\Math\BigInteger(1);
        }
        $components = parent::load($key, $password);
        if (!isset($components['private'])) {
            return $components;
        }
        \extract($components);
        unset($components['public'], $components['private']);
        $isPublicKey = \false;
        $result = \EasyWPSMTP\Vendor\phpseclib3\Common\Functions\Strings::unpackSSH2('ii', $public);
        if ($result === \false) {
            throw new \UnexpectedValueException('Key appears to be malformed');
        }
        list($publicExponent, $modulus) = $result;
        $result = \EasyWPSMTP\Vendor\phpseclib3\Common\Functions\Strings::unpackSSH2('iiii', $private);
        if ($result === \false) {
            throw new \UnexpectedValueException('Key appears to be malformed');
        }
        $primes = $coefficients = [];
        list($privateExponent, $primes[1], $primes[2], $coefficients[2]) = $result;
        $temp = $primes[1]->subtract($one);
        $exponents = [1 => $publicExponent->modInverse($temp)];
        $temp = $primes[2]->subtract($one);
        $exponents[] = $publicExponent->modInverse($temp);
        return \compact('publicExponent', 'modulus', 'privateExponent', 'primes', 'coefficients', 'exponents', 'comment', 'isPublicKey');
    }
    /**
     * Convert a private key to the appropriate format.
     *
     * @param \phpseclib3\Math\BigInteger $n
     * @param \phpseclib3\Math\BigInteger $e
     * @param \phpseclib3\Math\BigInteger $d
     * @param array $primes
     * @param array $exponents
     * @param array $coefficients
     * @param string $password optional
     * @param array $options optional
     * @return string
     */
    public static function savePrivateKey(\EasyWPSMTP\Vendor\phpseclib3\Math\BigInteger $n, \EasyWPSMTP\Vendor\phpseclib3\Math\BigInteger $e, \EasyWPSMTP\Vendor\phpseclib3\Math\BigInteger $d, array $primes, array $exponents, array $coefficients, $password = '', array $options = [])
    {
        if (\count($primes) != 2) {
            throw new \InvalidArgumentException('PuTTY does not support multi-prime RSA keys');
        }
        $public = \EasyWPSMTP\Vendor\phpseclib3\Common\Functions\Strings::packSSH2('ii', $e, $n);
        $private = \EasyWPSMTP\Vendor\phpseclib3\Common\Functions\Strings::packSSH2('iiii', $d, $primes[1], $primes[2], $coefficients[2]);
        return self::wrapPrivateKey($public, $private, 'ssh-rsa', $password, $options);
    }
    /**
     * Convert a public key to the appropriate format
     *
     * @param \phpseclib3\Math\BigInteger $n
     * @param \phpseclib3\Math\BigInteger $e
     * @return string
     */
    public static function savePublicKey(\EasyWPSMTP\Vendor\phpseclib3\Math\BigInteger $n, \EasyWPSMTP\Vendor\phpseclib3\Math\BigInteger $e)
    {
        return self::wrapPublicKey(\EasyWPSMTP\Vendor\phpseclib3\Common\Functions\Strings::packSSH2('ii', $e, $n), 'ssh-rsa');
    }
}
