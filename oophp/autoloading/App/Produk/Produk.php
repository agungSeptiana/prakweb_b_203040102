<?php

Abstract class Produk {
    protected $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit= "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        // if ( !is_string($judul)) {
        //     throw new Exception("Judul harus string");
        // }
        $this->judul = $judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getDiskon() {
        return $this->diskon;
    }
    
    abstract public function getInfo();

}