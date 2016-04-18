<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 18/04/16
 * Time: 16:58
 */

namespace App;


class ProfileCreatorHtml
{
    public function show()
    {
        return "<div>
                Id: <b>". $this->id ."</b> <br />
                Name: <b>". $this->name ."</b>
        </div>";
    }
}