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

class Packet {

    public int|float $timeCurrent;

    public function __construct(
        public mixed $id, 
        public string $origin
    ) {
        $this->timeCurrent = microtime(true);
    }

    public function getId() : mixed {
        return $this->id;
    }

    public function getOrigin() : string {
        return $this->origin;
    }

    public function getTimeCurrent() : int|float {
        return $this->timeCurrent;
    }

    public function encode() : bool|string {
        return json_encode($this);
    }

    public function decode(string $json) : mixed {
        return json_decode($json);
    }

}