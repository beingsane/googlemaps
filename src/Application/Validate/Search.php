<?php 
namespace Application\Validate;

class Search
{
    public function isAddressExist()
    {
      return (isset($_POST['address']) && $_POST['address'] !== false) ? true : false;
    }
}