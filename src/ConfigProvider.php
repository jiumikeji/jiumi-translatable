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
namespace Jiumi\Translatable;

use Jiumi\Translatable\Contracts\LocalesInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                LocalesInterface::class => Locales::class,
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for jiumikeji/jiumi-translatable.',
                    'source' => __DIR__ . '/../publish/translatable.php',
                    'destination' => BASE_PATH . '/config/autoload/translatable.php',
                ],
            ],
        ];
    }
}
