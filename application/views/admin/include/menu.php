
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?php echo base_url('Admin'); ?>" class="app-brand-link">
              <img src="<?php echo base_url('assets_admin/img/logo/bimcap_logo3.png'); ?>" alt="logo">
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <li class="menu-item active">
              <a href="<?php echo base_url('Admin'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bx-user' ></i> &nbsp;&nbsp;&nbsp;
                <div data-i18n="Account Settings">Employee Page</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="<?php echo base_url('admin/add-employees'); ?>" class="menu-link">
                    <div data-i18n="Account">Add Employee</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo base_url('admin/employees-list'); ?>" class="menu-link">
                    <div data-i18n="Notifications">Employee List</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bx-data'></i> &nbsp;&nbsp;&nbsp;
                <div data-i18n="Authentications">Departments</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="<?php echo base_url('admin/add-departments'); ?>" class="menu-link">
                    <div data-i18n="Basic">Add Departments</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo base_url('admin/departments-list'); ?>" class="menu-link">
                    <div data-i18n="Basic">Departments List</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class='bx bxs-component'></i> &nbsp;&nbsp;&nbsp;
                <div data-i18n="Basic">Designation</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="<?php echo base_url('admin/add-designation'); ?>" class="menu-link">
                    <div data-i18n="Basic">Add Designation</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo base_url('admin/designation-list'); ?>" class="menu-link">
                    <div data-i18n="Basic">Designation List</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Employee Performance</span></li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='bx bx-bar-chart-alt' ></i> &nbsp;&nbsp;&nbsp;
                <div data-i18n="Basic">Performance</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="<?php echo base_url('admin/add-employees-performance'); ?>" class="menu-link">
                    <div data-i18n="Basic">Add Employee Performance</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?php echo base_url('admin/employees-performance-result-list'); ?>" class="menu-link">
                    <div data-i18n="Basic">Employee Performance Result</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <div class="layout-page">
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                </div>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?php echo base_url('assets_admin/img/logo/bimcap_logo.png'); ?>" alt="admin profile" class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?php echo base_url('assets_admin/img/logo/bimcap_logo.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">BIMCAP</span>
                            <small class="text-muted">Administrator</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?php echo base_url('Admin/logout'); ?>">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>