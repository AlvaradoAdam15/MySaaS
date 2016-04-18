<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 18/04/16
 * Time: 16:58
 */

namespace App;


class ProfileCreatorHtml extends AbstractProfiler
{
    public function show($user)
    {
        return "<div>
               Id: <b>\". $this->getUserId() .\"</b> <br />
               Name: <b>\". $this->getUserName() .\"</b>
        </div>";
    }
}