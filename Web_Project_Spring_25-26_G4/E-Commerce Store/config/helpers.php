<?php

function require_admin() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        header("Location: ../views/auth/login.php");
        exit();
    }
}

function require_auth() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (empty($_SESSION['user_id'])) {
        header("Location: ../views/auth/login.php");
        exit();
    }
}

?>