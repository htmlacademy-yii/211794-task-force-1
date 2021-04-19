<?php

namespace src\models;

class RefuseAction extends Action
{
    public function getName()
    {
        return 'Отказаться';
    }

    public function getInternalName()
    {
        return 'refuse';
    }

    public function checkAccessRights($id_executor, $id_customer, $id_user): bool
    {
        return $id_executor === $id_user;
    }
}
