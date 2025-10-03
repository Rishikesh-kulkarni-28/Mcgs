<?php
if (session_status() === PHP_SESSION_NONE) session_start();
if (empty($_SESSION['admin_id'])) {
    header('Location:login.php');
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MCGS Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <style>
    .admin-layout {
      display: flex;
      min-height: 100vh;
    }
    .admin-sidebar {
      width: 260px;
      background: #0d6efd;
      color: #fff;
    }
    .admin-sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: .75rem 1rem;
    }
    .admin-sidebar a:hover {
      background: rgba(255, 255, 255, .15);
    }
    .admin-content {
      flex: 1;
      padding: 1.25rem;
      background: #f8f9fa;
    }

    /* Optional doctor background utility */
    .bg-doctor {
      background: url('../assets/images/doctor.jpg') no-repeat center center;
      background-size: cover;
      min-height: 400px;
    }
  </style>
</head>
<body>
  <div class="admin-layout">
    <aside class="admin-sidebar">
      <div class="p-3 fw-bold">MCGS Admin</div>
      <a href="dashboard.php">Dashboard</a>
      <a href="medicalcard-list.php">Medical Cards</a>
      <a href="medicalcard-add.php">Add Card</a>
      <a href="search.php">Search</a>
      <a href="pages.php">Pages</a>
      <a href="enquiries.php">Enquiries</a>
      <a href="report.php">Reports</a>
      <a href="profile.php">Profile</a>
      <a href="change-password.php">Change Password</a>
      <a href="logout.php">Logout</a>
    </aside>

    <main class="admin-content">
