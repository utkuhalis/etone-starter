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
                                <li class="breadcrumb-item active"><?= $pageTitle; ?></li>
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

                        <div class="row">

                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Variables</h4>
                                    </div>
                                    <div class="card-body">
                                        <h1>CoreJS how to create variable?</h1>

                                        <h6>create integer variable intVar with value 20</h6>
                                        <code>core.addVar('intVar', 20);</code>
                                        <h6>create float variable floatVar with value 3.14</h6>
                                        <code>core.addVar('floatVar', 3.14);</code>
                                        <h6>create string variable stringVar with value Hello World</h6>
                                        <code>core.addVar('stringVar', 'Hello World');</code>

                                        <h1>CoreJS how to use variable?</h1>
                                        <h6>create integer variable intVarX with value 20 </h6>
                                        <code>core.addVar('intVarX', 20);</code>
                                        <h6>create integer variable intVarY with value 10</h6>
                                        <code>core.addVar('intVarY', 10);</code>
                                        <h6>create integer variable intVarSum with value intVarX + intVarY</h6>
                                        <code>core.addVar('intVarSum', core.getVar('intVarX') + core.getVar('intVarY'));</code>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title"><?= $pageTitle; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <h1>Hello, world!</h1>
                                        <p>Starter page content!</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </section>

        </div>

    </div>
</div>