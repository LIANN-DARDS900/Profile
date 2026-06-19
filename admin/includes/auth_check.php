<?php require_once __DIR__.'/../../includes/csrf.php'; if(empty($_SESSION['admin_id'])) redirect('/admin/login.php');
