<?php

require_once 'mahasiswa.php';
require_once 'nilai.php';

class Main {

    private array $mahasiswa;

    public function init(): void {
        $this->mahasiswa = [
            new Mahasiswa("Althaf", "2511", 85.2),
            new Mahasiswa("Mulya", "2512", 79.5),
            new Mahasiswa("Wiliam", "2513", 50),
            new Mahasiswa("Kash", "2514", 90),
            new Mahasiswa("Ley", "2515", 85)
        ];

        foreach ($this->mahasiswa as $mhs) {
            $grade = match (true) {
                $mhs->nilai >= 85 => Nilai::A,
                $mhs->nilai >= 75 => Nilai::B,
                $mhs->nilai >= 65 => Nilai::C,
                $mhs->nilai >= 50 => Nilai::D,
                default => Nilai::E
            };
            echo "{$mhs->name} | {$mhs->nim} | {$mhs->nilai} | {$grade->value}" 
            .PHP_EOL;
        }
    }
}

$main = new Main();
$main->init();