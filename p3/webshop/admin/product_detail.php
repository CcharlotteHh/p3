<?php
include '../includes/db.inc.php';
include 'admin_includes/header.admin.inc.php';


if(isset($_GET['opt']))
                    {
                        $opt = $_GET['opt'];
                    }
                    else
                    {
                        $opt = '';
                    }
                    switch($opt)
                    {
                      
                        case 'edit_post':
                            require_once('product_detail_edit.php');
                        break;
                      
                    }
                    ?>    