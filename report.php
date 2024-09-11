<?php require_once 'includes/header.php'; ?>
<style>
    body {
        background-image: url('public/bg img2.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-heartbeat"></i> Physiotherapy Report
                </div>
                <!-- /panel-heading -->
                <div class="panel-body">
                    <p>Welcome to POSTURE PHYSIO CLINIC. Here you can generate a report to track your physiotherapy sessions and progress.</p>
                    
                    <form class="form-horizontal" action="php_action/getPhysioReport.php" method="post" id="getPhysioReportForm">
                        <div class="form-group">
                            <label for="startDate" class="col-sm-2 control-label">Start Date</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="startDate" name="startDate" placeholder="Start Date" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="endDate" class="col-sm-2 control-label">End Date</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="endDate" name="endDate" placeholder="End Date" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="generateReportBtn"> <i class="glyphicon glyphicon-stats"></i> Generate Report</button>
                            </div>
                        </div>
                    </form>
                    
                    <p>Track your recovery journey and see the improvements with our personalized physiotherapy treatments.</p>
                </div>
                <!-- /panel-body -->
            </div>
        </div>
        <!-- /col-md-12 -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->

<script src="custom/js/report.js"></script>
<?php require_once 'includes/footer.php'; ?>
