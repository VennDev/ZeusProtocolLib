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

namespace vennv\zeus\compat;

final class PacketHandler {
    
    private static array $packets = [];

    public function registerPacket(Packet $packet) : void {
        self::$packets[] = $packet;
    }

    public function getPacket($id) {
        return self::$packets[$id];
    }

    public function getPacketId(Packet $packet) : int {
        return array_search($packet, self::$packets);
    }

    public function getPacketCount() : int {
        return count(self::$packets);
    }

    public function getPacketList() : array {
        return self::$packets;
    }

    public function unsetPacket(Packet $packet) : void {
        unset(self::$packets[$this->getPacketId($packet)]);
    }

    public function dropPackets() : void {
        self::$packets = [];
    }

}