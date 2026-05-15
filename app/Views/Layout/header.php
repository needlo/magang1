<?php

$role = session()->get('role');

if($role == 'mentor'){

    echo $this->include('Layout/Header/mentor');

}

elseif($role == 'intern'){

    echo $this->include('Layout/Header/intern');

}

elseif($role == 'admin'){

    echo $this->include('Layout/Header/admin');

}
?>