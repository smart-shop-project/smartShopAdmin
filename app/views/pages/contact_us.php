<?php require APPROOT . '/views/inc/header.php'; ?>

      <!-- Page Content -->
      <div id="page-content-wrapper">

        <div class="container-fluid">
          <!-- <h1 class="mt-4">Admin Dashboard</h1> -->
          <div id="content">
            <div id="users" class="table-responsive mt-4">
              <h2>Contact Us</h2>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th className="text-end" scope="col">Id</th>
                    <th className="text-end" scope="col">Full Name</th>
                    <th className="text-end" scope="col">Email</th>
                    <th className="text-end" scope="col">Subject</th>
                    <th className="text-end" scope="col">Message</th>
                    <th className="text-end" scope="col">Created At</th>
                    <th className="text-end" scope="col">User Id</th>
                  </tr>
                </thead>
                <tbody>
                <?php if (isset($data['contact_us']) && is_array($data['contact_us'])): ?>
                  <?php foreach($data['contact_us'] as $contact_us): ?>
                  <tr>
                    <td><?php echo $contact_us->id; ?></td>
                    <td><?php echo $contact_us->full_name; ?></td>
                    <td><?php echo $contact_us->email; ?></td>
                    <td><?php echo $contact_us->subject; ?></td>
                    <td><?php echo $contact_us->message; ?></td>
                    <td><?php echo $contact_us->created_at; ?></td>
                    <td><?php echo $contact_us->user_id; ?></td>
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
