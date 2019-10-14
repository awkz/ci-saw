        <li class="nav-item">
            <a href="<?php echo site_url(); ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
        </li>
        <?php
        if ($this->ion_auth->in_group(array('admin'))){
        ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-excel"></i>
              <p>
                Data Kriteria
              </p>
            </a>
        </li>
        <?php
        }
        if ($this->ion_auth->in_group(array('admin'))){
        ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Data Alternatif
              </p>
            </a>
        </li>
        <?php
        }
        if ($this->ion_auth->in_group(array('admin'))){
        ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                Analisa
              </p>
            </a>
        </li>
        <?php
        }
        if ($this->ion_auth->in_group(array('admin'))){
        ?>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-square-root-alt"></i>
              <p>
                Perhitungan
              </p>
            </a>
        </li>
        <?php
        }
        if ($this->ion_auth->in_group(array('admin'))){
        ?>
        <li class="nav-item">
            <a href="<?php echo site_url('auth'); ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                Account
              </p>
            </a>
        </li>
        <?php
        }
        ?>