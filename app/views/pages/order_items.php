<?php require APPROOT . '/views/inc/header.php'; ?>


      <!-- Page Content -->
      <div id="page-content-wrapper">

        <div class="container-fluid">
          <!-- <h1 class="mt-4">Admin Dashboard</h1> -->
          <div id="content">
            <div id="users" class="table-responsive mt-4">
              <h2>Order Items</h2>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th className="text-end" scope="col">Id</th>
                    <th className="text-end" scope="col">quantity</th>
                    <th className="text-end" scope="col">Price</th>
                    <th className="text-end" scope="col">Order Id</th>
                    <th className="text-end" scope="col">Product Id</th>
                    <th className="text-end" scope="col">Rate</th>
                  </tr>
                </thead>
                <tbody>
                <?php if (isset($data['order_items']) && is_array($data['order_items'])): ?>
                  <?php foreach($data['order_items'] as $order_items): ?>
                  <tr>
                    <td><?php echo $order_items->id; ?></td>
                    <td><?php echo $order_items->quantity; ?></td>
                    <td><?php echo $order_items->price; ?></td>
                    <td><?php echo $order_items->order_id; ?></td>
                    <td><?php echo $order_items->product_id; ?></td>
                    <td><?php echo $order_items->rate; ?></td>
                    
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
    <?php require APPROOT . '/views/inc/footer.php'; ?>

