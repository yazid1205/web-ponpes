<?php 
function alert()
{
    $ci =& get_instance();
    
    if($ci->session->flashdata('success')) {
        return '
            <div class="alert alert-success">
                ' . $ci->session->flashdata('success') . '
            </div>
        ';
    }

    if($ci->session->flashdata('info')) {
        return '
            <div class="alert alert-info">
                ' . $ci->session->flashdata('info') . '
            </div>
        ';
    }

    if($ci->session->flashdata('warning')) {
        return '
            <div class="alert alert-warning">
                ' . $ci->session->flashdata('warning') . '
            </div>
        ';
    }

    if($ci->session->flashdata('danger')) {
        return '
            <div class="alert alert-danger">
                ' . $ci->session->flashdata('danger') . '
            </div>
        ';
    }
}
?>