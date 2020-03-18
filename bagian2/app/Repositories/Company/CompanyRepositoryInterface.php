<?php

namespace App\Repositories\Company;

interface CompanyRepositoryInterface {

    /**
     * method untuk mendapatkan semua data `company`
     * 
     * @return object
     */
    public function all() : object;

    /**
     * method untuk mendapatkan semua data `company` per paginate
     */

    /**
     * method untuk mendapatkan data `company` berdasarkan id
     * @param int {id}
     * @return object
     */
    public function get(int $id) : object;

    /**
     * method untuk membuat `company` baru
     * 
     * @param int {id}
     * @return object
     */
    public function create(array $data) : object;

    /**
     * method untuk mengupdate `company` berdasarkan id
     * 
     * @param int {id}
     * @param array {data}
     * @return object
     */
    public function update(int $id, array $data) : object;

    /**
     * method untuk menghapus `company` berdasarkan id
     * 
     * @param int {id}
     */
    public function delete(int $id);
        
}

