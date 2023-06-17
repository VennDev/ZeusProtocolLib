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

namespace vennv\zeus\utils;

final class Protocol {

    public const PACKET_PLAYER_LOGIN = 1;
    public const PACKET_PLAYER_LOGOUT = 2;
    public const PACKET_KEEP_ALIVE = 3;
    public const PACKET_PLAYER_POSITION = 4;
    public const PACKET_PLAYER_ARM_ANIMATION = 5;
    public const PACKET_PLAYER_BREAK_BLOCK = 6;
    public const PACKET_PLAYER_PLACE_BLOCK = 7;
    public const PACKET_PLAY_IN_USE_ENTITY = 8;
    public const PACKET_PLAY_IN_TRANSACTION = 9;
    public const PACKET_PLAY_IN_ROTATION = 10;
    public const PACKET_PLAY_IN_SNEAKING = 11;
    public const PACKET_PLAY_IN_SPRINTING = 12;
    public const PACKET_PLAY_OUT_RESPAWN = 13;
    public const PACKET_PLAY_IN_DEATH = 14;
    public const PACKET_PLAY_IN_HELD_ITEM_SLOT = 15;
    public const PACKET_PLAY_IN_CHANGE_MODE = 16;
    public const PACKET_PLAY_IN_STEER_VEHICLE = 17;
    public const PACKET_PLAY_IN_CLOSE_WINDOW = 18;
    public const PACKET_PLAY_IN_OPEN_WINDOW = 19;
    public const PACKET_PLAY_OUT_EXPLOSION = 20;
    public const PACKET_PLAY_OUT_ENTITY_TELEPORT = 21;
    public const PACKET_PLAY_OUT_ENTITY_EFFECT = 22;
    public const PACKET_PLAY_OUT_TRANSACTION = 23;
    public const PACKET_PLAY_OUT_BLOCKS_DOWN = 24;

}