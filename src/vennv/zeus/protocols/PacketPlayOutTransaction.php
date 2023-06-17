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

class PacketPlayOutTransaction extends Packet {

    public const TYPE_NORMAL = 0;
	public const TYPE_MISMATCH = 1;
	public const TYPE_USE_ITEM = 2;
	public const TYPE_USE_ITEM_ON_ENTITY = 3;
	public const TYPE_RELEASE_ITEM = 4;

    public bool $accepted;
	public int $windowId;
    public int $windowType;
    
    public function __construct(string $origin, bool $accepted, int $windowId, int $windowType) {
        $this->accepted = $accepted;
        $this->windowId = $windowId;
        $this->windowType = $windowType;
        parent::__construct(Protocol::PACKET_PLAY_OUT_TRANSACTION, $origin);
    }

    public function isAccepted() : bool {
        return $this->accepted;
    }

    public function getWindowId() : int {
        return $this->windowId;
    }

    public function getWindowType() : int {
        return $this->windowType;
    }

}