<?php
/**
 * PHPCI - Continuous Integration for PHP
 *
 * @copyright    Copyright 2014, Block 8 Limited.
 * @license      https://github.com/Block8/PHPCI/blob/master/LICENSE.md
 * @link         https://www.phptesting.org/
 */

namespace PHPCI\Helper;

/**
* User Helper - Provides access to logged in user information in views.
* @author       Dan Cryer <dan@block8.co.uk>
* @package      PHPCI
* @subpackage   Web
*/
class User
{
    public function __call($method, $params = array())
    {
        $user = $_SESSION['phpci_user'];

        if (!is_object($user)) {
            return null;
        }

        return call_user_func_array(array($user, $method), $params);
    }
}
