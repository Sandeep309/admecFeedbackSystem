<div class="myNav px-3 d-flex justify-content-between align-items-center">
    <div class="d-flex gap-4 align-items-center">
        <h5 class="text-light burger"><i class="fas fa-bars"></i></h5>
        <h5 class="text-light">Feedback Management</h5>
    </div>
    <div class="d-flex gap-4 align-items-center">
        <!-- Search Bar -->
        <!-- <form class="d-none d-md-block">
            <div class="input-group form-control-sm">
                <input class="form-control border-0" type="search" placeholder="Search for...">
                <button class="btn btn-primary border-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form> -->

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                    <i class="fas fa-user"></i>
                </a>
                <ul class="dropdown-menu border-0 shadow" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item curserPoint">
                            <small class="card-text mb-2">Logged in as:</small>
                            <!-- <p class="mb-1"><i class="fas fa-user-circle me-2"></i>Guest</p> -->
                            <?php
                            if (isset($_SESSION['userDetails'])) {
                                echo "<p class='mb-1'><i class='fas fa-user-circle me-2'></i>" . $_SESSION['userDetails']['userName'] . "</p>";
                            } else {

                                echo "<p class='mb-1'><i class='fas fa-user-circle me-2'></i>Guest</p>";
                            }
                            ?>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="setting.php">
                            <i class="fas fa-cog me-2"></i>Setting
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="login.php">
                            <i class="fas fa-table me-2"></i>logIn
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="process/auth/logoutprocess.php">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

</div>