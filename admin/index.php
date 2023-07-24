<?php
include_once __DIR__. '/../layouts/sidebar.php';
?>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

					 <!-- Categories -->
					 <div class="col-md-3 mb-4">
                            <a href="categories.php" class="text-decoration-none">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Categories</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <span class="badge text-bg-info"><?php echo $countCategories; ?></span>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-solid fa-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


				</div>
			</main>

			<?php
			include_once __DIR__. '/../layouts/app_footer.php';
			?>