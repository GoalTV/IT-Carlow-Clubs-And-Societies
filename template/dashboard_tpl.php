<?php   require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dashboard.php'); ?>
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                  <?php while ($row = $query->fetch()): ?>
                    <img src="<?php echo htmlspecialchars($row['image']) ?>" alt="Profile Picture" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><td><?php echo htmlspecialchars($row['f_name']) ?></td> <td><?php echo htmlspecialchars($row['l_name']) ?></td></h4>
                      <p class="mb-1">Registred On:</p>
                      <p class="text-muted font-size-sm"><?php echo htmlspecialchars($row['registred']) ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <p class="mb-1">Medical Conditons:</p>
                  <textarea class="form-control" id="m_c" placeholder="<?php echo htmlspecialchars($row['m_c']) ?>" disabled rows="14"></textarea>
                  </li>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <td><?php echo htmlspecialchars($row['f_name']) ?></td> <td><?php echo htmlspecialchars($row['l_name']) ?></td>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo htmlspecialchars($row['email']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    +<td><?php echo htmlspecialchars($row['p_country']) ?></td> <td><?php echo htmlspecialchars($row['p_number']) ?></td>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                    <?php
                    $gender = $row['gender'];
                    if ($gender == "1") {
                    echo "Female";
                    } elseif ($gender == "2") {
                    echo "Male";
                    } else {
                    echo "Other";
                    }
                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo htmlspecialchars($row['dob']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Doctor Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo htmlspecialchars($row['d_i_n']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Doctor Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    +<td><?php echo htmlspecialchars($row['d_i_p_c']) ?></td> <td><?php echo htmlspecialchars($row['d_i_p_n']) ?></td>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Next of Kim Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo htmlspecialchars($row['n_o_k_f_n']) ?> <?php echo htmlspecialchars($row['n_o_k_l_n']) ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Next of Kim Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    +<td><?php echo htmlspecialchars($row['n_o_k_p_c']) ?></td> <td><?php echo htmlspecialchars($row['n_o_k_p_n']) ?></td>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Next of Kim Relation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <td><?php echo htmlspecialchars($row['n_o_k_r_s']) ?></td>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Medical Declaration:</h6>
                      <div><small>Asthma, wheezing, Respiratory</small>
                      <?php
                    $m_d_1 = $row['m_d_1'];
                    if ($m_d_1  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Bronchitis and/or shortness of breath</small>
                      <?php
                    $m_d_2 = $row['m_d_2'];
                    if ($m_d_2  == "2") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Physical disability or other disability</small>
                      <?php
                    $m_d_3 = $row['m_d_3'];
                    if ($m_d_3  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Are you pregnant</small>
                      <?php
                    $m_d_4 = $row['m_d_4'];
                    if ($m_d_4  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Do you smoke</small>
                      <?php
                    $m_d_5 = $row['m_d_5'];
                    if ($m_d_5  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Epilepsy, seizures, fainting attacks or convulsions</small>
                      <?php
                    $m_d_6 = $row['m_d_6'];
                    if ($m_d_6  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Any other neurological problem</small>
                      <?php
                    $m_d_7 = $row['m_d_7'];
                    if ($m_d_7  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">Medical Declaration:</h6>
                      <div><small>Recurring migraine headaches, Blackouts:</small>
                      <?php
                    $m_d_8 = $row['m_d_8'];
                    if ($m_d_8  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                    <div><small>Recurring joint, mobility or back problems/surgery</small>
                    <?php
                    $m_d_9 = $row['m_d_9'];
                    if ($m_d_9  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                    <div><small>Diabetes</small>
                    <?php
                    $m_d_10 = $row['m_d_10'];
                    if ($m_d_10  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Any hearing loss or problems with balance</small>
                      <?php
                    $m_d_11 = $row['m_d_11'];
                    if ($m_d_11  == "4") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Any serious eyesight issues</small>
                      <?php
                    $m_d_12 = $row['m_d_12'];
                    if ($m_d_12  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                      <div><small>Drug or alcohol dependencys</small> 
                      <?php
                    $m_d_13 = $row['m_d_13'];
                    if ($m_d_13  == "1") {
                      echo '<span class="badge bg-danger">No</span>';
                    } else {
                      echo '<span class="badge bg-success">Yes</span>';
                    }
                    ?></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>


            </div>
          </div>

        </div>
    </div>