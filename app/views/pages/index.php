<?php 
  require APPROOT . '/views/inc/header.php'; 
  // require_once '../libraries/Database.php';
?>
      <div id="page-content-wrapper">

        <div class="container-fluid">
          <!-- <h1 class="mt-4">Admin Dashboard</h1> -->
          <div id="content">
            <div id="users" class="table-responsive mt-4">
              <div class="titleAdd">
                <h2>Users/Admins</h2>
                <button class="add-button">
                        <i class="bi bi-person-plus-fill">
                          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5"/>
                          </svg>
                        </i>
                      </button>
              </div>
              
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th className="text-end" scope="col">Id</th>
                    <th className="text-end" scope="col">Username</th>
                    <th className="text-end" scope="col">Email</th>
                    <th className="text-end" scope="col">Password</th>
                    <th className="text-end" scope="col">Phone Number</th>
                    <th className="text-end" scope="col">Created At</th>
                    <th className="text-end" scope="col">Role</th>
                    <th class="action-text" scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                <?php if (isset($data['users']) && is_array($data['users'])): ?>
                  <?php foreach($data['users'] as $users): ?>
                  <tr>
                    <td><?php echo $users->id; ?></td>
                    <td><?php echo $users->username; ?></td>
                    <td><?php echo $users->email; ?></td>
                    <td><?php echo $users->password; ?></td>
                    <td><?php echo $users->phone_number; ?></td>
                    <td><?php echo $users->created_at; ?></td>
                    <td><?php echo $users->role; ?></td>
                    <td class="text-end">
                      <button class="edit-button">
                        <i class="bi bi-pencil-square">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                        </i>
                      </button>
                    
                      <button class="delete-button">
                        <i class="bi bi-trash3-fill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                          <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
                        </svg>
                        </i>
                      </button>
                    </td>
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
    </div>

    
 
    <?php require APPROOT . '/views/inc/footer.php'; ?>
