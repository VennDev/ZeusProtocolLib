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

class PacketPlayerBreakBlock extends Packet {

    public int|float $x;
    public int|float $y;
    public int|float $z;
    public int|float $id;
    
    public function __construct(string $origin, int|float $x, int|float $y, int|float $z, int|float $id) {
        parent::__construct(Protocol::PACKET_PLAYER_BREAK_BLOCK, $origin);
    }

    public function getX() : int|float {
        return $this->x;
    }

    public function getY() : int|float {
        return $this->y;
    }

    public function getZ() : int|float {
        return $this->z;
    }

    public function getId() : int|float {
        return $this->id;
    }

}