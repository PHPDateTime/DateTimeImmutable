<?php

declare(strict_types=1);

namespace Potter\DateTime\Immutable;

use \DateTimeImmutable as BaseDateTimeImmutable, \DateTimeInterface as BaseDateTimeInterface,
     Carbon\CarbonInterface, DateInterval, DateTime, DateTimeZone, Potter\DateTime\DateTimeInterface;

interface DateTimeImmutableInterface extends CarbonInterface, DateTimeInterface
{
    public static function createFromInterface(BaseDateTimeInterface $object): BaseDateTimeImmutable;
    public static function createFromMutable(DateTime $object): static;
    public static function getLastErrors(): array|false;
    public function modify($modifier);
    public static function __set_state($array): static;
    public function setDate(int $year, int $month, int $day): static;
    public function setISODate(int $year, int $week, int $dayOfWeek = 1): static;
    public function setTime(int $hour, int $minute, int $second = 0, int $microsecond = 0): static;
    public function setTimestamp(string|int|float $timestamp): static;
    public function setTimezone(DateTimeZone|string|int $timezone): static;
    public function diff(BaseDateTimeInterface $targetObject, bool $absolute = false): DateInterval;
    public function format(string $format): string;
    public function getOffset(): int;
    public function getTimestamp(): int;
    public function getTimezone(): DateTimeZone|false;
    public function __wakeup(): void;
}
