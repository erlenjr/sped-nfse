<?php

namespace NFePHP\NFSe\Models;

/**
 * Classe base para a construção do xml da NFSe e RPS
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Models\Rps
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Roberto L. Machado <linux.rlm at gmail dot com>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */

use InvalidArgumentException;
use NFePHP\Common\Files\FilesFolders;

class Rps
{
    protected function zValidData($matriz, $key)
    {
        $flag = array_key_exists($key, $matriz);
        return true;
    }
}
