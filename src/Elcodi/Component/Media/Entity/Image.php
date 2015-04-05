<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2015 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Component\Media\Entity;

use Elcodi\Component\Media\Entity\Interfaces\ImageInterface;

/**
 * Class Image
 */
class Image extends File implements ImageInterface
{
    /**
     * @var integer
     *
     * Width
     */
    protected $width;

    /**
     * @var integer
     *
     * Height
     */
    protected $height;

    /**
     * @var ResizedImage[]
     */
    protected $resizedImages;

    /**
     * Set image width in pixels
     *
     * @param string $width Width
     *
     * @return $this Self object
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get image width in pixels
     *
     * @return integer Width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set image height in pixels
     *
     * @param string $height Height
     *
     * @return $this Self object
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get image height in pixels
     *
     * @return integer Height
     */
    public function getHeight()
    {
        return $this->height;
    }

    public function addResizedImage(ResizedImage $resizeImage)
    {
        // todo i think i saw some reference about not using collections from doctrine?
        // can you link me to an example?
    }
}
