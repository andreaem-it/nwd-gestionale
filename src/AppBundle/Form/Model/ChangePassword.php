<?php
namespace AppBundle\Form\Model;

use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;

class ChangePassword {

    /**
    * @SecurityAssert\UserPassword(
    *     message = "Vecchia password errata!"
    * )
    */

    protected $oldPassword;

}