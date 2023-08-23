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
namespace Jiumi\Translatable\Contracts;

use ArrayAccess;
use Hyperf\Contract\Arrayable;

interface LocalesInterface extends Arrayable, ArrayAccess
{
    public function add(string $locale): void;

    public function all(): array;

    public function current(): string;

    public function forget(string $locale): void;

    public function get(string $locale): ?string;

    public function getCountryLocale(string $locale, string $country): string;

    public function getLanguageFromCountryBasedLocale(string $locale): string;

    public function getLocaleSeparator(): string;

    public function has(string $locale): bool;

    public function isLocaleCountryBased(string $locale): bool;
}
