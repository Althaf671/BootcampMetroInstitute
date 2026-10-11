<?php

require_once 'nilai.php';

class Mahasiswa {
    public function __construct(
        public string $name,
        public string $nim,
        public float $nilai
    ) {}
}