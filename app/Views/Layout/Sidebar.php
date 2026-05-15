<?php

$role = session()->get('role');

if($role == 'mentor'){

    echo $this->include('Layout/Sidebar/mentor');

}

elseif($role == 'intern'){

    echo $this->include('Layout/Sidebar/intern');

}

elseif($role == 'admin'){

    echo $this->include('Layout/Sidebar/admin');

}
?>