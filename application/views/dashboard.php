<main class="app-main">
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1><?php echo $title; ?></h1>
                        </div>
                        <div class="card-body">

                            <div id="viewContainer">
                                <?php $this->load->view('userView', ['users' => $users]); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>