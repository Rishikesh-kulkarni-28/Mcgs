<?php
require_once __DIR__.'/includes/dbconnection.php';
require_once __DIR__.'/includes/functions.php';
require_once __DIR__.'/includes/header.php';

$st = $dbh->prepare("SELECT * FROM tblpage WHERE PageType='aboutus' LIMIT 1");
$st->execute();
$about = $st->fetch();
?>

<!-- Hero Section with doctor background -->

        <h1 class="mb-3">Leading the way in medical excellence</h1>
        <p class="lead">Caring for better life. Search and print your medical card anytime.</p>
        <a class="btn btn-primary btn-lg" href="medical-card.php">Find My Card</a>
      </div>
    </div>
  </div>
</div>

<hr class="my-5">

<h3>About Us</h3>
<p><?php echo nl2br(e($about['PageDescription'] ?? '')); ?></p>

<?php require_once __DIR__.'/includes/footer.php'; ?>
