<?php
/**
 * Venue
 * @package venue
 * @version 0.0.1
 */

namespace Venue\Model;

class Venue extends \Mim\Model
{

    protected static $table = 'venue';

    protected static $chains = [];

    protected static $q = ['title'];
}