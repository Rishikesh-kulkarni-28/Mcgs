<?php require_once __DIR__.'/../includes/dbconnection.php';
 require_once __DIR__.'/header.php'; 
 $today = $dbh->query("SELECT COUNT(*) AS c FROM tblmedicalcard WHERE DATE(CreationDate)=CURDATE()")->fetch()['c'] ?? 0; $yday = $dbh->query
 
 ("SELECT COUNT(*) AS c FROM tblmedicalcard WHERE DATE(CreationDate)=CURDATE()-INTERVAL 1 DAY")->fetch()['c'] ?? 0;
  $week = $dbh->query("SELECT COUNT(*) AS c FROM tblmedicalcard WHERE CreationDate >= NOW()-INTERVAL 7 DAY")->fetch()['c'] ?? 0;
   $enqUnread = $dbh->query("SELECT COUNT(*) AS c FROM tblcontact WHERE IFNULL(IsRead,0)=0")->fetch()['c'] ?? 0; 
   ?> <h3 class="mb-4">Dashboard</h3> 
   <div class="row g-3">
     <div class="col-md-3">
        <div class="card card-body">
            <div class="text-muted">Today Cards</div><div class="fs-3"><?php echo (int)$today; ?></div></div></div> <div class="col-md-3"><div class="card card-body"><div class="text-muted">Yesterday</div><div class="fs-3"><?php echo (int)$yday; ?></div></div></div> <div class="col-md-3"><div class="card card-body"><div class="text-muted">Last 7 Days</div><div class="fs-3"><?php echo (int)$week; ?></div></div></div> <div class="col-md-3"><div class="card card-body"><div class="text-muted">Unread Enquiries</div><div class="fs-3"><?php $footer = __DIR__ . '/footer.php'; echo "<!-- USING-FOOTER: $footer -->\n"; if (!file_exists($footer)) { echo "<!-- FOOTER-NOT-FOUND -->"; } else { echo "<!-- FOOTER-FOUND-SIZE: " . filesize($footer) . " bytes -->\n"; echo "<!-- FOOTER-MTIME: " . date('c', filemtime($footer)) . " -->\n"; } require_once $footer; ?><?php require_once __DIR__.'/footer.php'; ?>