<?php

/**
 * Copyright (C) 2016  Daniel Dolejška
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RiotAPI\Objects;


/**
 *   Class RunePageDto
 * This object contains rune page information.
 *
 * @package RiotAPI\Objects
 */
class RunePageDto extends ApiObject
{
	/**
	 * Indicates if the page is the current page.
	 * @var bool $current
	 */
	public $current;

	/**
	 * Rune page ID.
	 * @var int $id
	 */
	public $id;

	/**
	 * Rune page name.
	 * @var string $name
	 */
	public $name;

	/**
	 * Collection of rune slots associated with the rune page.
	 * @var RuneSlotDto[] $slots
	 */
	public $slots;
}