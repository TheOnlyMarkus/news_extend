<?php
namespace Webx\NewsExtend\Domain\Model;


/**
 * This file is part of the "news_extend" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */

/**
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News {

    /**
     * teaserImages
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $teaserImages = null;

    /**
     * Returns the teaserImages
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserImages
     */
    public function getTeaserImages() {
        return $this->teaserImages;
    }

    /**
     * Sets the teaserImages
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserImages
     * @return void
     */
    public function setTeaserImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserImages) {
        $this->teaserImages = $teaserImages;
    }
}
