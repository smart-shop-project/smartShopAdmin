<?php require APPROOT . '/views/inc/header.php'; ?>


      <!-- Page Content -->
      <div id="page-content-wrapper">

        <div class="container-fluid">
          <!-- <h1 class="mt-4">Admin Dashboard</h1> -->
          <div id="content">
            <div id="users" class="table-responsive mt-4">
              <h2>Orders</h2>
              <table class="table table-striped table-bordered">
                <thead>
                
                  <tr>
                    <th className="text-end" scope="col">Id</th>
                    <th className="text-end" scope="col">Total Amount</th>
                    <th className="text-end" scope="col">Shipping Address</th>
                    <th className="text-end" scope="col">Created At</th>
                    <th className="text-end" scope="col">User Id</th>
                    <th className="text-end" scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                <?php if (isset($data['orders']) && is_array($data['orders'])): ?>
                  <?php foreach($data['orders'] as $orders): ?>
                  <tr>
                    <td><?php echo $orders->id; ?></td>
                    <td><?php echo $orders->created_at; ?></td>
                    <td><?php echo $orders->total_amount; ?></td>
                    <td><?php echo $orders->shipping_address; ?></td>
                    <td><?php echo $orders->status; ?></td>
                    <td><?php echo $orders->user_id; ?></td>
                  </tr>
                  <?php endforeach; ?>
                <?php else: ?>
                    <p>No Users</p>
                <?php endif; ?>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <?php require APPROOT . '/views/inc/footer.php'; ?>
