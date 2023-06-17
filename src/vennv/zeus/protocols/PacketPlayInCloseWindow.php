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

class PacketPlayInCloseWindow extends Packet {

    public bool $cancelled = false;
    
    public function __construct(string $origin) {
        parent::__construct(Protocol::PACKET_PLAY_IN_CLOSE_WINDOW, $origin);
    }

    public function cancel() : void {
        $this->cancelled = true;
    }

    public function isCancelled() : bool {
        return $this->cancelled;
    }

}