<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\events;

use craft\models\TagGroup;

/**
 * Tag group event class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class TagGroupEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var TagGroup The tag group model associated with the event.
     */
    public $tagGroup;

    /**
     * @var boolean Whether the tag group is brand new
     */
    public $isNew = false;
}
