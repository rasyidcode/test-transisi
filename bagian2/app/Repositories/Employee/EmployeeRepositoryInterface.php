<?php

namespace App\Repositories\Employee;

interface EmplyeeRepositoryInterface {

    /**
     * method untuk mendapatkan semua data `employee`
     * 
     * @return object
     */
    public function all() : object;

    /**
     * method untuk mendapatkan data `employee` berdasarkan id
     * @param int {id}
     * @return object
     */
    public function get(int $id) : object;

    /**
     * method untuk membuat `employee` baru
     * 
     * @param int {id}
     * @return object
     */
    public function create(array $data) : object;

    /**
     * method untuk mengupdate `employee` berdasarkan id
     * 
     * @param int {id}
     * @param array {data}
     * @return object
     */
    public function update(int $id, array $data) : object;

    /**
     * method untuk menghapus `employee` berdasarkan id
     * 
     * @param int {id}
     */
    public function delete(int $id);
        
}

