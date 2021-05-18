<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>VoicePal|heejra</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/components.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                    <div class="search-element">
                        
                    </div>
                </form>
                <ul class="navbar-nav navbar-right">
                    
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <!-- <img alt="image" src="<?= base_url() ?>assets/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> -->
                            <div class="d-sm-none d-lg-inline-block"><span>Hi, </span><?=ucfirst($this->fungsi->user_login()->username)?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           
                            <div class="dropdown-divider"></div>
                            <a href="<?=site_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="">VoicePal|heejra</a>
                    </div>
                    
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Account</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="">Add Account</a></li></ul>
                        </li>
                        <?php if($this->fungsi->user_login()->level == 1) { ?>
                        <li class="active"><a class="nav-link" href="<?=site_url('account')?>"><i class="far fa-square"></i> <span>Data Account</span></a></li>
                        <li class="active"><a class="nav-link" href="<?=site_url('user')?>"><i class="far fa-square"></i> <span>User</span></a></li>
                        <?php } ?>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">

                <?php echo $contents ?>


            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <div class="bullet"></div> heejra <script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script>
                </div>
                <div class="footer-right">
                    1.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="<?= base_url() ?>assets/assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>assets/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>