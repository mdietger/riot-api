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
 *   Class ParticipantFrame
 * This object contains participant frame information
 *
 * @package RiotAPI\Objects
 */
class ParticipantFrame extends ApiObject
{
	/** @var int $currentGold */
	public $currentGold;

	/** @var int $dominionScore */
	public $dominionScore;

	/** @var int $jungleMinionsKilled */
	public $jungleMinionsKilled;

	/** @var int $level */
	public $level;

	/** @var int $minionsKilled */
	public $minionsKilled;

	/** @var int $participantId */
	public $participantId;

	/** @var Position $position */
	public $position;

	/** @var int $teamScore */
	public $teamScore;

	/** @var int $totalGold */
	public $totalGold;

	/** @var int $xp */
	public $xp;
}