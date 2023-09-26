<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0"><?= $pageTitle; ?></h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('/eTone'); ?>">Home</a></li>
                                <li class="breadcrumb-item active">starter</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic Form</h4>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="" method="post">
                                            <div class="mb-2">
                                                <label class="form-label" for="title">Title</label>
                                                <input type="text" class="form-control" id="title" placeholder="Title" name="title" aria-label="Title">
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label" for="message">Message</label>
                                                <input type="text" class="form-control" id="message" placeholder="Message" name="message" aria-label="Message">
                                            </div>

                                            <input type="submit" class="btn btn-primary" value="Send Post">
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Result Here</h5>
                                        <pre><?= print_r(getPost(), true); ?></pre>

                                        <h5>Specific Data</h5>
                                        Title: <?= print_r(getPost('title'), true); ?>
                                        <br>
                                        Message: <?= print_r(getPost('message'), true); ?>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
            </section>

            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajax Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="<?= base_url('/eTone/postAjax'); ?>" method="post" @submit.prevent="postForm($event, core.update)">
                                            <div class="mb-2">
                                                <label class="form-label" for="title">Title</label>
                                                <input type="text" class="form-control" id="title" placeholder="Title" name="title" aria-label="Title" required>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label" for="message">Message</label>
                                                <input type="text" class="form-control" id="message" placeholder="Message" name="message" aria-label="Message" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Send Post</button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Result Here</h5>
                                        <pre id="result">{{ core.result }}</pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajax Form w/Alert</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="<?= base_url('/eTone/postAjax'); ?>" method="post" @submit.prevent="postForm($event, core.update2, core.notification)">
                                            <div class="mb-2">
                                                <label class="form-label" for="title">Title</label>
                                                <input type="text" class="form-control" id="title" placeholder="Title" name="title" aria-label="Title" required>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label" for="message">Message</label>
                                                <input type="text" class="form-control" id="message" placeholder="Message" name="message" aria-label="Message" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Send Post</button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Result Here</h5>
                                        <pre id="result">{{ core.result2 }}</pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ajax Form w/Modal</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="<?= base_url('/eTone/postAjax'); ?>" method="post" @submit.prevent="postForm($event, core.update3, core.notification2)">
                                            <div class="mb-2">
                                                <label class="form-label" for="title">Title</label>
                                                <input type="text" class="form-control" id="title" placeholder="Title" name="title" aria-label="Title" required>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label" for="message">Message</label>
                                                <input type="text" class="form-control" id="message" placeholder="Message" name="message" aria-label="Message" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Send Post</button>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Result Here</h5>
                                        <pre id="result">{{ core.result3 }}</pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </section>

        </div>
    </div>
</div>