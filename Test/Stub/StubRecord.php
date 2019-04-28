<?php declare(strict_types=1);
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    GNU General Public License version 2 or later.
 */

namespace Windwalker\Record\Test\Stub;

use Windwalker\Record\Record;

/**
 * The StubRecord class.
 *
 * @since  3.0
 */
class StubRecord extends Record
{
    /**
     * Method to perform sanity checks on the AbstractTable instance properties to ensure
     * they are safe to store in the database.  Child classes should override this
     * method to make sure the data they are storing in the database is safe and
     * as expected before storage.
     *
     * @return  static  Method allows chaining
     *
     * @since   2.0
     */
    public function validate()
    {
        throw new \RuntimeException('Record save error');

        return parent::validate();
    }
}
