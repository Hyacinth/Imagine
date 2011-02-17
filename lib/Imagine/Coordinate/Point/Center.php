<?php

/*
 * This file is part of the Imagine package.
 *
 * (c) Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Imagine\Coordinate\Point;

use Imagine\Coordinate\PointInterface;
use Imagine\Coordinate\BoxInterface;

final class Center implements PointInterface
{
    /**
     * @var BoxInterface
     */
    private $box;

    /**
     * Constructs coordinate with size instantce, it needs to be relative to
     *
     * @param BoxInterface $size
     */
    public function __construct(BoxInterface $box)
    {
        $this->box = $box;
    }

    /**
     * (non-PHPdoc)
     * @see Imagine\Coordinate.PointInterface::getX()
     */
    public function getX()
    {
        return ceil($this->box->getWidth() / 2);
    }

    /**
     * (non-PHPdoc)
     * @see Imagine\Coordinate.PointInterface::getY()
     */
    public function getY()
    {
        return ceil($this->box->getHeight() / 2);
    }

    /**
     * (non-PHPdoc)
     * @see Imagine\Coordinate.PointInterface::in()
     */
    public function in(BoxInterface $box)
    {
        return $this->getX() < $box->getWidth() && $this->getY() < $box->getHeight();
    }
}