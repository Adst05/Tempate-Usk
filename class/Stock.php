<?php
include_once("Database.php");
include_once("Buku.php");

class Stock extends Database
{
    public function reduceGood($id, $data)
    {
        $buku = new Buku;
        $data_buku = $buku->find($data["id_buku"]);
        $id = $data_buku["id"];


        $currenctStock = $data_buku["j_buku_baik"];
        $tambah = $currenctStock - 1;

        $sql = "UPDATE buku set j_buku_baik='$tambah' where id='$id'";

        if ($this->db->query($sql) == true) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
    }

    public function addGood($id, $data)
    {
        $buku = new Buku;
        $data_buku = $buku->find($data["id_buku"]);
        $id = $data_buku["id"];


        $currenctStock = $data_buku["j_buku_baik"];
        $tambah = $currenctStock + 1;

        $sql = "UPDATE buku set j_buku_baik='$tambah' where id='$id'";

        if ($this->db->query($sql) == true) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
    }

    public function reduceBad($id, $data)
    {
        $buku = new Buku;
        $data_buku = $buku->find($data["id_buku"]);
        $id = $data_buku["id"];


        $currenctStock = $data_buku["j_buku_rusak"];
        $tambah = $currenctStock - 1;

        $sql = "UPDATE buku set j_buku_rusak='$tambah' where id='$id'";

        if ($this->db->query($sql) == true) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
    }

    public function addBad($id, $data)
    {
        $buku = new Buku;
        $data_buku = $buku->find($data["id_buku"]);
        $id = $data_buku["id"];


        $currenctStock = $data_buku["j_buku_rusak"];
        $tambah = $currenctStock + 1;

        $sql = "UPDATE buku set j_buku_rusak='$tambah' where id='$id'";

        if ($this->db->query($sql) == true) {
            echo "Berhasil";
        } else {
            echo "Gagal";
        }
    }
}
