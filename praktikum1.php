<?php

class Animal {
    private $animals = ['Ayam', 'Ikan'];

    public function __construct() {
        // Konstruktor tidak diperlukan untuk inisialisasi di sini
    }

    public function index() {
        // Menampilkan seluruh hewan
        foreach ($this->animals as $index => $animal) {
            echo ($index + 1) . '. ' . $animal;
        }
    }

    public function store($data) {
        // Menambahkan hewan baru
        $this->animals[] = $data['nama'];
        echo 'Hewan ' . $data['nama'] . ' berhasil ditambahkan.<br>';
    }

    public function update($index, $data) {
        // Mengupdate hewan pada index tertentu
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $data['nama'];
            echo 'Hewan di nomor ' . ($index + 1) . ' berhasil diupdate menjadi ' . $data['nama'] . '.<br>';
        } else {
            echo 'Hewan tidak ditemukan pada nomor ' . ($index + 1) . '.<br>';
        }
    }

    public function destroy($index) {
        // Menghapus hewan pada index tertentu
        if (isset($this->animals[$index])) {
            $hewanTerhapus = $this->animals[$index];
            unset($this->animals[$index]);
            // Reindex array untuk menjaga konsistensi
            $this->animals = array_values($this->animals);
            echo 'Hewan ' . $hewanTerhapus . ' berhasil dihapus.<br>';
            echo 'Sisa hewan: <br>';
            $this->index(); // Menampilkan sisa hewan
        } else {
            echo 'Hewan tidak ditemukan pada nomor ' . ($index + 1) . '.<br>';
        }
    }
}

$animal = new Animal();

echo 'Index - Menampilkan seluruh hewan <br>';
$animal->index();
echo '<br>';

echo 'Store - Menambahkan hewan baru <br>';
$animal->store(['nama' => 'Burung']);
$animal->index();
echo '<br>';

echo 'Update - Mengubah data hewan <br>';
$animal->update(0, ['nama' => 'Kucing Anggora']);
$animal->index();
echo '<br>';

echo 'Destroy - Menghapus hewan <br>';
$animal->destroy(0); // Menghapus Kucing Anggora
$animal->destroy(1); // Menghapus Burung
echo '<br>';
