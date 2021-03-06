<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
  <!-- ����ͷ����Ϣ������Ӧ��ͬ�豸 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- ���� bootstrap ��ʽ�� -->
  <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body>

<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading active"><?php echo $title . '  ' . 'Total: ' . $pointSum; ?></div>
    <div class="panel-body">

      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
          <tr>
            <!--
            <th>ID</th>
            <th>UserName</th>
            -->
            <th>Time</th>
            <th>PointName</th>
            <th>PointValue</th>
          </tr>
          </thead>

          <tbody>
          <?php $pointTotal = 0; foreach($points as $row) : ?>
              <?php $pointTotal = $pointTotal + $row['pointValue']; ?>
            <tr>
              <!--
              <td><?php echo $row['id'] ?> </td>
              <td><?php echo $row['userName'] ?> </td>
              <td><?php echo mdate('%Y-%m-%d %h:%i:%s', $row['pointTime']) ?> </td>
              -->

              <td><?php echo mdate('%Y-%m-%d', $row['pointTime']) ?> </td>
              <td><?php echo $row['pointName'] ?> </td>
              <td><?php echo $row['pointValue'] ?> </td>
            </tr>
          <?php endforeach; ?>
          <tr><td></td></td><td>总计</td><td><?php echo $pointTotal; ?></td></tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

<!-- JavaScript �������ĵ���������ʹҳ������ٶȸ��� -->
<!-- ��ѡ: ���� jQuery �� -->
<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- ��ѡ: �ϲ��� Bootstrap JavaScript ��� -->
<script src="http://apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>

</html>

