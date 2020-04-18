<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"><?= ($i18n_users) ?></h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                          <th>username</th>
                          <th>User Type</th>
                          <th>Created At</th>
                          <th>Updated At</th>
                      </thead>
                      <tbody>
              						<?php foreach (($users?:[]) as $user): ?>
              						<tr onclick="window.document.location='admin/users/<?= ($user['id']) ?>';" style="cursor: pointer;">
              						<td><?= ($user['username']) ?></td>
              						<td><?php if ($user['user_type']===100): ?><em>Administrator</em>
              						<?php else: ?><?php if ($user['user_type']===10): ?><em>Superuser</em><?php else: ?>Standard User<?php endif; ?><?php endif; ?></td>
              						<td><?= ($user['created_at']) ?></td>
              						<td><?= ($user['updated_at']) ?></td>
              						</tr>	
              						<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>