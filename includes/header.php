<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user'])) {

    $userPermissions = [
        'client' => isset($_SESSION['user']['client']) ? $_SESSION['user']['client'] : null,
        'contracts' => isset($_SESSION['user']['contracts']) ? $_SESSION['user']['contracts'] : null,
        'equipment' => isset($_SESSION['user']['equipment']) ? $_SESSION['user']['equipment'] : null,
        'invoice' => isset($_SESSION['user']['invoice']) ? $_SESSION['user']['invoice'] : null,
        'staff' => isset($_SESSION['user']['staff']) ? $_SESSION['user']['staff'] : null,
        'report' => isset($_SESSION['user']['report']) ? $_SESSION['user']['report'] : null,
        'type' => isset($_SESSION['user']['type']) ? $_SESSION['user']['type'] : null
    ];
} else {
    header("Location: index.php");
    exit();
}
?>


<header id="topnav">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>



            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="https://arraydigitals.com/reporting-dashboard/" class="logo text-center">
                    <style>
                        .logo {
                            font-size: 24px;
                            font-weight: 600;
                        }
                    </style>
                    <span class="logo">
                        <img width="150" src="assets/images/logo-sm.png" alt="">
                    </span>
                    <!-- <span class="logo text-white text-lg">
                        LOGO
                    </span> -->
                </a>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="dashboard">
                            <i class="ti-home"></i>Dashboard
                        </a>
                    </li>

                    <!-- <li class="has-submenu">
                        <a href="clients">
                            <i class="ti-user"></i>Clients
                        </a>
                    </li> -->
                    <?php if ($userPermissions['client'] == 1) : ?>
                        <li class="has-submenu">
                            <a href="javscript:;">
                                <i class="ti-user"></i>Clients
                            </a>
                            <ul class="submenu">
                                <li><a href="client/add-clients.php">Add Client</a></li>
                                <li><a href="client/view-clients.php">View All Clients</a></li>
                            </ul>
                        </li> <?php endif; ?>
                    <?php if ($userPermissions['contracts'] == 1) : ?>
                        <li class="has-submenu">
                            <a href="javscript:;">
                                <i class="ti-notepad"></i>Contracts
                            </a>
                            <ul class="submenu">
                                <li><a href="contract/add-contract.php">Add Contract</a></li>
                                <li><a href="contract/view-contracts.php">View All Contracts</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if ($userPermissions['equipment'] == 1) : ?>
                        <li class="has-submenu">
                            <a href="javscript:;">
                                <i class="ti-key"></i>Equipment
                            </a>
                            <ul class="submenu">
                                <li><a href="equipment/add-equipment.php">Add Equipment</a></li>
                                <li><a href="equipment/view-equipment.php">View All Equipment</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if ($userPermissions['invoice'] == 1) : ?>

                        <li class="has-submenu">
                            <a href="javscript:;">
                                <i class="ti-book"></i>Invoices
                            </a>
                            <ul class="submenu">
                                <li><a href="invoice/add-invoice.php">Add Invoice</a></li>
                                <li><a href="invoice/view-invoices.php">View All Invoice</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>

                    <?php if ($userPermissions['staff'] == 1) : ?>
                        <li class="has-submenu">
                            <a href="javscript:;">
                                <i class="ti-headphone-alt"></i>Staff
                            </a>
                            <ul class="submenu">
                                <li><a href="staff/add-staff.php">Add Staff</a></li>
                                <li><a href="staff/view-staff.php">View All Staff</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>


                    <?php if ($userPermissions['report'] == 1) : ?>
                        <li class="has-submenu">
                            <a href="reports">
                                <i class="ti-rss"></i>Report
                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="has-submenu">
                        <a href="administration">
                            <i class="ti-info-alt"></i>Administration
                        </a>
                    </li>


                    <li class="has-submenu">
                        <a href="profile">
                            <i class="ti-info-alt"></i>Profile
                        </a>
                    </li>

                    <?php if ($userPermissions['type'] == 2) : ?>
                        <li class="has-submenu">
                            <a href="create">
                                <i class="ti-info-alt"></i>User
                            </a>
                        </li>
                    <?php endif; ?>


                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end Topbar -->
</header>

<div class="mobileMenu">
    <div class="mobileMenuHeader">
        <div class="logo">
            <img src="assets/images/logo-sm.png" width="150" alt="">
        </div>
        <div class="mobileMenuClose">
            <button>&times;</button>
        </div>
    </div>

    <ul class="mobile__list">
        <li><a href="dashboard"> <i class="ti-home mr-2"></i>Dashboard</a></li>

        <li class="rf--mobileSubmenu-button">
            <span class="closeIcon">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
            <span class="openIcon">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </span>
            <a href="javscript:;">
                <i class="ti-user mr-2"></i>Clients
            </a>
            <ul class="rf--mobile-submenu">
                <li><a href="client/add-clients.php">Add Client</a></li>
                <li><a href="client/view-clients.php">View All Clients</a></li>
            </ul>
        </li>
        <li class="rf--mobileSubmenu-button">
            <span class="closeIcon">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
            <span class="openIcon">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </span>
            <a href="javscript:;">
                <i class="ti-notepad mr-2"></i>Contracts
            </a>
            <ul class="rf--mobile-submenu">
                <li><a href="contract/add-contract.php">Add Contract</a></li>
                <li><a href="contract/view-contracts.php">View All Contracts</a></li>
            </ul>
        </li>

        <li class="rf--mobileSubmenu-button">
            <span class="closeIcon">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
            <span class="openIcon">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </span>
            <a href="javscript:;">
                <i class="ti-key mr-2"></i>Equipment
            </a>
            <ul class="rf--mobile-submenu">
                <li><a href="equipment/add-equipment.php">Add Equipment</a></li>
                <li><a href="equipment/view-equipment.php">View All Equipment</a></li>
            </ul>
        </li>
        <li class="rf--mobileSubmenu-button">
            <span class="closeIcon">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
            <span class="openIcon">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </span>
            <a href="javscript:;">
                <i class="ti-book mr-2"></i>Invoices
            </a>
            <ul class="rf--mobile-submenu">
                <li><a href="invoice/add-invoice.php">Add Invoice</a></li>
                <li><a href="invoice/view-invoices.php">View All Invoice</a></li>
            </ul>
        </li>
        <li class="rf--mobileSubmenu-button">
            <span class="closeIcon">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </span>
            <span class="openIcon">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </span>
            <a href="javscript:;">
                <i class="ti-headphone-alt mr-2"></i>Staff
            </a>
            <ul class="rf--mobile-submenu">
                <li><a href="staff/add-staff.php">Add Staff</a></li>
                <li><a href="staff/view-staff.php">View All Staff</a></li>
            </ul>
        </li>

        <li> <a href="reports">
                <i class="ti-rss mr-2"></i>Report
            </a></li>
        <li> <a href="administration">
                <i class="ti-info-alt mr-2"></i>Administration
            </a></li>


    </ul>
</div>