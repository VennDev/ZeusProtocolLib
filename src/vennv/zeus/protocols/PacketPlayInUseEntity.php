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

class PacketPlayInUseEntity extends Packet {

    public const ACTION_INTERACT = 0;
	public const ACTION_ATTACK = 1;
	public const ACTION_ITEM_INTERACT = 2;

    public int|float $originX;
    public int|float $originY;
    public int|float $originZ;
    public int|float $originYaw;
    public int|float $originPitch;
    public int|float $targetX;
    public int|float $targetY;
    public int|float $targetZ;
    public int|float $targetYaw;
    public int|float $targetPitch;
    public int $action;
    
    public function __construct(string $origin, int|float $originX, int|float $originY, int|float $originZ, int|float $originYaw, int|float $originPitch, int|float $targetX, int|float $targetY, int|float $targetZ, int|float $targetYaw, int|float $targetPitch, int $action) {
        $this->originX = $originX;
        $this->originY = $originY;
        $this->originZ = $originZ;
        $this->originYaw = $originYaw;
        $this->originPitch = $originPitch;
        $this->targetX = $targetX;
        $this->targetY = $targetY;
        $this->targetZ = $targetZ;
        $this->targetYaw = $targetYaw;
        $this->targetPitch = $targetPitch;
        $this->action = $action;
        parent::__construct(Protocol::PACKET_PLAY_IN_USE_ENTITY, $origin);
    }

    public function getOriginX() : int|float {
        return $this->originX;
    }

    public function getOriginY() : int|float {
        return $this->originY;
    }

    public function getOriginZ() : int|float {
        return $this->originZ;
    }

    public function getOriginYaw() : int|float {
        return $this->originYaw;
    }

    public function getOriginPitch() : int|float {
        return $this->originPitch;
    }

    public function getTargetX() : int|float {
        return $this->targetX;
    }

    public function getTargetY() : int|float {
        return $this->targetY;
    }

    public function getTargetZ() : int|float {
        return $this->targetZ;
    }

    public function getTargetYaw() : int|float {
        return $this->targetYaw;
    }

    public function getTargetPitch() : int|float {
        return $this->targetPitch;
    }

    public function getAction() : int {
        return $this->action;
    }

}