<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?>
<?php echo template('public','header_view')?>


  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="container">
        <h2><?php echo $title; ?></h2>

        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
            <tr>
              <th>ID</th>
              <th>UserName</th>
              <th>PointName</th>
              <th>PointValue</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach($points as $row) : ?>
              <tr>
                <td><?php echo $row['id'] ?> </td>
                <td><?php echo $row['userName'] ?> </td>
                <td><?php echo $row['pointName'] ?> </td>
                <td><?php echo $row['pointValue'] ?> </td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>
<?php echo template('public','footer_view')?>