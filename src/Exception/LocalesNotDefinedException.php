<?php

declare(strict_types=1);
/**
 * JiumiAdmin is committed to providing solutions for quickly building web applications
 * Please view the LICENSE file that was distributed with this source code,
 * For the full copyright and license information.
 * Thank you very much for using JiumiAdmin.
 *
 * @Author X.Mo<root@imoi.cn>
 * @Link   https://gitee.com/jiumikeji/JiumiAdmin
 */
namespace Jiumi\Translatable\Exception;

use Throwable;

class LocalesNotDefinedException extends \Exception
{
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        $message = empty($message)
            ? 'Please make sure you have run `php bin/hyperf.php vendor:publish jiumikeji/jiumi-translatable` and that the locales configuration is defined.'
            : $message;
        parent::__construct($message, $code, $previous);
    }
}
