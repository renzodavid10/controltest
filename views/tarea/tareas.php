<!--<div class="row">
    <div class="col-lg-8 connectedSortable ui-sortable">
        <div class="card ml-1 mt-3">
            <div class="card-header">
                <h5 class="car-title">PLAN VPO MOTUPE</h5>
            </div>
            <!-- Donut chart -->
<!-- <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-chart-bar"></i>
                        Donut Chart
                    </h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="donut-chart" style="height: 200px;"></div>
                </div>
                <!-- /.card-body-->
<!--</div>
        </div>
    </div>
</div>-->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card mt-2">
                    <div class="card-header">
                        <h4 class="col-10 card-title w-100">
                            Mis Tareas
                        </h4>
                    </div>
                    <div class="card-body collapse">
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Estimated budget</label>
                            <input type="number" id="inputEstimatedBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputSpentBudget">Total amount spent</label>
                            <input type="number" id="inputSpentBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedDuration">Estimated project duration</label>
                            <input type="number" id="inputEstimatedDuration" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card ">
                    <div class="card-header">
                        <div class="row ">
                            <h4 class="col-10 card-title w-100">
                                Mis Acciones
                            </h4>
                            <p class="col-1"> 3</p>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body collapse">
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Estimated budget</label>
                            <input type="number" id="inputEstimatedBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputSpentBudget">Total amount spent</label>
                            <input type="number" id="inputSpentBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedDuration">Estimated project duration</label>
                            <input type="number" id="inputEstimatedDuration" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card ">
                    <div class="card-header">
                        <div class="row ">
                            <h4 class="col-10 card-title w-100">
                                Rutina Diaria
                            </h4>
                            <p class="col-1"> 3</p>
                            <div class="card-tools ">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body collapse">
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Estimated budget</label>
                            <input type="number" id="inputEstimatedBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputSpentBudget">Total amount spent</label>
                            <input type="number" id="inputSpentBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedDuration">Estimated project duration</label>
                            <input type="number" id="inputEstimatedDuration" class="form-control">
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12" id="accordion">
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        2. Aenean massa
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        3. Donec quam felis
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FLOT CHARTS -->
<script src="../template/plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../template/plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../template/plugins/flot/plugins/jquery.flot.pie.js"></script>
<script>
    /*$(function() {
        /*
         * Flot Interactive Chart
         * -----------------------
         */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    /*
     * DONUT CHART
     * -----------
     */

    /*var donutData = [{
            label: 'Series2',
            data: 30,
            color: '#3c8dbc'
        },
        {
            label: 'Series3',
            data: 20,
            color: '#0073b7'
        },
        {
            label: 'Series4',
            data: 50,
            color: '#00c0ef'
        }
    ]
    $.plot('#donut-chart', donutData, {
        series: {
            pie: {
                show: true,
                radius: 1,
                innerRadius: 0.5,
                label: {
                    show: true,
                    radius: 2 / 3,
                    formatter: labelFormatter,
                    threshold: 0.1
                }

            }
        },
        legend: {
            show: false
        }
    })
    /*
     * END DONUT CHART
     */

    //})

    /*function labelFormatter(label, series) {
        console.log()
        return '<div style="font-size:8px; text-align:center; padding:2px; color: #fff; font-weight: 600;">' +
            label +
            '<br>' +
            Math.round(series.percent) + '%</div>'
    */
</script>