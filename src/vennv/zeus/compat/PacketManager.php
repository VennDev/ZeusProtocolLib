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

class PacketManager {
    
    private static PacketHandler $handler;
    private static PacketManager $instance;

    public static function getInstance() : PacketManager {
        return self::$instance;
    }

    public function enable() : void {
        self::$instance = $this;
        self::$handler = new PacketHandler();
    }

    public function disable() : void {
        self::$handler->dropPackets();
    }

    public function registerPacket(Packet $packet) : void {
        self::$handler->registerPacket($packet);
    }

    public function getPacket($id) : Packet {
        return self::$handler->getPacket($id);
    }

    public function getHandler() : PacketHandler {
        return self::$handler;
    }

}