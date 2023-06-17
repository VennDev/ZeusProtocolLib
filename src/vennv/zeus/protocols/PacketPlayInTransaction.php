<?php

/**
 * ZeusProtocolLib
 * Copyright (C) 2023 - 2025 VennDev
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
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

namespace vennv\zeus\protocols;

use vennv\zeus\compat\Packet;
use vennv\zeus\utils\Protocol;

class PacketPlayInTransaction extends Packet {

    public const SOURCE_CONTAINER = 0;
	public const SOURCE_WORLD = 2;
	public const SOURCE_CREATIVE = 3;
	public const SOURCE_TODO = 99999;
	public const SOURCE_TYPE_CRAFTING_RESULT = -4;
	public const SOURCE_TYPE_CRAFTING_USE_INGREDIENT = -5;
	public const SOURCE_TYPE_ANVIL_RESULT = -12;
	public const SOURCE_TYPE_ANVIL_OUTPUT = -13;
	public const SOURCE_TYPE_ENCHANT_OUTPUT = -17;
	public const SOURCE_TYPE_TRADING_INPUT_1 = -20;
	public const SOURCE_TYPE_TRADING_INPUT_2 = -21;
	public const SOURCE_TYPE_TRADING_USE_INPUTS = -22;
	public const SOURCE_TYPE_TRADING_OUTPUT = -23;
	public const SOURCE_TYPE_BEACON = -24;
	public const ACTION_MAGIC_SLOT_CREATIVE_DELETE_ITEM = 0;
	public const ACTION_MAGIC_SLOT_CREATIVE_CREATE_ITEM = 1;
	public const ACTION_MAGIC_SLOT_DROP_ITEM = 0;
	public const ACTION_MAGIC_SLOT_PICKUP_ITEM = 1;

    public int $sourceType;
	public int $sourceFlags = 0;
	public int $slot;
    
    public function __construct(string $origin, int $sourceType, int $sourceFlags, int $slot) {
        $this->sourceType = $sourceType;
        $this->sourceFlags = $sourceFlags;
        $this->slot = $slot;
        parent::__construct(Protocol::PACKET_PLAY_IN_TRANSACTION, $origin);
    }

    public function getSourceType() : int {
        return $this->sourceType;
    }

    public function getSourceFlags() : int {
        return $this->sourceFlags;
    }

    public function getSlot() : int {
        return $this->slot;
    }

}