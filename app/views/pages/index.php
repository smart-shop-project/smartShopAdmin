<?php
  require APPROOT . '/views/inc/header.php';
?>


      <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-light bg-light border-bottom"
        >
          <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
        </nav>

        <div class="container-fluid">
          <h1 class="mt-4">Admin Dashboard</h1>
          <div id="content">
            <div id="users" class="table-responsive mt-4">
              <h2>Users</h2>
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th className="text-end" scope="col">id</th>
                    <th className="text-end" scope="col">username</th>
                    <th className="text-end" scope="col">email</th>
                    <th className="text-end" scope="col">password</th>
                    <th className="text-end" scope="col">phone_number</th>
                    <th className="text-end" scope="col">created_at</th>
                    <th className="text-end" scope="col">role</th>

                    <th className="text-end" scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Ricky Antony</td>
                    <td>ricky</td>
                    <td>wefwe</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>ricky</td>
                    <td className="text-end">
                      <ActionButton
                        icon="edit"
                        title="Edit"
                        variant="action"
                        className="p-0 me-2"
                      />
                      <ActionButton
                        icon="trash-alt"
                        title="Delete"
                        variant="action"
                        className="p-0"
                      />
                    </td>
                  </tr>
                  <tr>
                    <td>Emma Watson</td>
                    <td>emma@example.com</td>
                    <td>wefwe</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>ricky</td>
                    <td className="text-end">
                      <ActionButton
                        icon="edit"
                        title="Edit"
                        variant="action"
                        className="p-0 me-2"
                      />
                      <ActionButton
                        icon="trash-alt"
                        title="Delete"
                        variant="action"
                        className="p-0"
                      />
                    </td>
                  </tr>
                  <tr>
                    <td>Rowen Atkinson</td>
                    <td>rown@example.com</td>
                    <td>wefwe</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>ricky</td>
                    <td className="text-end">
                      <ActionButton
                        icon="edit"
                        title="Edit"
                        variant="action"
                        className="p-0 me-2"
                      />
                      <ActionButton
                        icon="trash-alt"
                        title="Delete"
                        variant="action"
                        className="p-0"
                      />
                    </td>
                  </tr>
                  <tr>
                    <td>Antony Hopkins</td>
                    <td>antony@example.com</td>
                    <td>wefwe</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>ricky</td>
                    <td className="text-end">
                      <ActionButton
                        icon="edit"
                        title="Edit"
                        variant="action"
                        className="p-0 me-2"
                      />
                      <ActionButton
                        icon="trash-alt"
                        title="Delete"
                        variant="action"
                        className="p-0"
                      />
                    </td>
                  </tr>
                  <tr>
                    <td>Jennifer Schramm</td>
                    <td>jennifer@example.com</td>
                    <td>wefwe</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>efwef</td>
                    <td>ricky</td>
                    <td className="text-end">
                      <ActionButton
                        icon="edit"
                        title="Edit"
                        variant="action"
                        className="p-0 me-2"
                      />
                      <ActionButton
                        icon="trash-alt"
                        title="Delete"
                        variant="action"
                        className="p-0"
                      />
                    </td>
                  </tr>
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
