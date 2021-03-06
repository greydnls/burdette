<?php
/**
 * This file is part of the Burdette package.
 *
 * @copyright © Samantha Quiñones & Patryk Kruk, All Rights Reserved
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Burdette;

/**
 * Interface IdentityInterface
 *
 * Identity classes are used as complex keys to uniquely identify a token bucket.
 *
 * @author Samantha Quiñones <samantha@tembies.com>
 * @package Burdette
 */
interface IdentityInterface
{
    /**
     * Returns a string representation of the identity
     *
     * @return string
     */
    public function __toString();
}
