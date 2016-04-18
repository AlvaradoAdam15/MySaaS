<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 18/04/16
 * Time: 17:12
 */

namespace App;


class ProfileCreatorJson extends AbstractProfiler
{
    public function show($user)
    {
        return "<JSON>
                Id: <b>". $this->getUserId() ."</b> <br />
                Name: <b>". $this->getUserName() ."</b>
        </JSON>";
    }
}