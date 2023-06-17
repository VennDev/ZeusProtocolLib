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

class PacketPlayOutEntityEffect extends Packet {

    public const ABSORPTION = 22;
    public const BAD_OMEN = 24;
    public const BLINDNESS = 15;
    public const CONDUIT_POWER = 25;
    public const DOLPHINS_GRACE = 26;
    public const FIRE_RESISTANCE = 12;
    public const GLOWING = 25;
    public const HASTE = 3;
    public const HEALTH_BOOST = 21;
    public const HERO_OF_THE_VILLAGE = 27;
    public const HUNGER = 17;
    public const INSTANT_DAMAGE = 2;
    public const INSTANT_HEALTH = 1;
    public const INVISIBILITY = 14;
    public const JUMP = 8;
    public const LEVITATION = 24;
    public const LUCK = 23;
    public const MINING_FATIGUE = 4;
    public const NAUSEA = 9;
    public const NIGHT_VISION = 16;
    public const POISON = 19;
    public const REGENERATION = 10;
    public const RESISTANCE = 11;
    public const SATURATION = 23;
    public const SLOWNESS = 5;
    public const SLOW_FALLING = 28;
    public const SPEED = 1;
    public const STRENGTH = 5;
    public const UNLUCK = 22;
    public const WATER_BREATHING = 13;
    public const WEAKNESS = 18;
    public const WITHER = 20;

    public const ADD = 0;
    public const MODIFY = 1;
    public const REMOVE = 2;

    public int $effectId;
    public int|float $amplifier;
    public int|float $duration;
    public int $flags;
    
    public function __construct(string $origin, int $effectId, int|float $amplifier, int|float $duration, int $flags) {
        $this->effectId = $effectId;
        $this->amplifier = $amplifier;
        $this->duration = $duration;
        $this->flags = $flags;
        parent::__construct(Protocol::PACKET_PLAY_OUT_ENTITY_EFFECT, $origin);
    }

    public function getEffectId() : int {
        return $this->effectId;
    }

    public function getAmplifier() : int|float {
        return $this->amplifier;
    }

    public function getDuration() : int|float {
        return $this->duration;
    }

    public function getFlags() : int {
        return $this->flags;
    }

}