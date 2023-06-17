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

class PacketPlayInHeldItemSlot extends Packet {

    public int $idi;
    public int $meta;
    public int $slot;
    public string $name;
    public array $lore = [];
    
    public function __construct(string $origin, int $slot, int $idi, int $meta, string $name, array $lore) {
        $this->slot = $slot;
        $this->idi = $idi;
        $this->meta = $meta;
        $this->name = $name;
        $this->lore = $lore;
        parent::__construct(Protocol::PACKET_PLAY_IN_HELD_ITEM_SLOT, $origin);
    }

    public function getId() : int {
        return $this->idi;
    }

    public function getMeta() : int {
        return $this->meta;
    }

    public function getSlot() : int {
        return $this->slot;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getLore() : array {
        return $this->lore;
    }

}