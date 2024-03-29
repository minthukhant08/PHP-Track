<?php
namespace App\Repositories\User;

interface UserRepositoryInterface{
  public function getAll($offset, $limit);
  public function find($id);
  public function total();
  public function store($data);
  public function updateuser($request, $id);
  public function delete($id);
}
