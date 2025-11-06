<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .truncateTitle {
            max-width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .content-wrapper {
            padding: 20px;
        }
        .page-header {
            margin-bottom: 30px;
        }
        .page-title {
            font-size: 24px;
            display: flex;
            align-items: center;
        }
        .page-title-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            margin-right: 10px;
        }
        .bg-theme {
            background-color: #6c63ff;
        }
        .custom-card-body {
            padding: 20px;
        }
        .col-md-2-4 {
            flex: 0 0 20%;
            max-width: 20%;
        }
        .v-scroll {
            max-height: 330px;
            overflow-y: auto;
        }
        .custom-table {
            font-size: 14px;
        }
        .text-small {
            font-size: 12px;
        }
        @media (max-width: 768px) {
            .col-md-2-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="content-wrapper">
    <!-- Page Header -->
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-theme text-white mr-2">
                <i class="fa fa-home"></i>
            </span> Dashboard
        </h3>
    </div>

    <!-- School Dashboard Section -->
    
    <!-- License Expire Warning -->
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="alert alert-danger" role="alert">
                <li>
                    Kindly note that your license will expire on <strong class="package-expire-date">
                    December 31, 2025 - 11:59 PM. </strong>
                    If you want to modify your upcoming plan or remove any add-ons, please ensure that these changes are made before your current license expires.
                </li>
                <li class="mt-2">
                    If you want to activate or deactivate students, teachers, or staff members in your upcoming plan, Please
                    <a href="#">click here</a>.
                </li>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row">
        <!-- Teachers -->
        <div class="col-md-2-4 stretch-card grid-margin">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="ms-3">
                            Total Teachers
                            <p class="text-muted">
                            <h3>45</h3>
                            </p>
                        </div>
                        <img class="ml-auto" src="images/teachers.svg" alt="" style="width: 50px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Students -->
        <div class="col-md-2-4 stretch-card grid-margin">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="ms-3">
                            Total Students
                            <p class="text-muted">
                            <h3>850</h3>
                            </p>
                        </div>
                        <img class="ml-auto" src="images/students.svg" alt="" style="width: 50px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Guardians -->
        <div class="col-md-2-4 stretch-card grid-margin">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="ms-3">
                            Total Guardians
                            <p class="text-muted">
                            <h3>720</h3>
                            </p>
                        </div>
                        <img class="ml-auto" src="images/guardians.svg" alt="" style="width: 50px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Classes -->
        <div class="col-md-2-4 stretch-card grid-margin">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="ms-3">
                            Total Classes
                            <p class="text-muted">
                            <h3>24</h3>
                            </p>
                        </div>
                        <img class="ml-auto" src="images/classes.svg" alt="" style="width: 50px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Streams -->
        <div class="col-md-2-4 stretch-card grid-margin">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="ms-3">
                            Total Streams
                            <p class="text-muted">
                            <h3>6</h3>
                            </p>
                        </div>
                        <img class="ml-auto" src="images/stream.svg" alt="" style="width: 50px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Expense Graph and Leaves Section -->
    <div class="row">
        <!-- Expense Graph -->
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="card-title">Expense</h4>
                        </div>
                        <div class="col-md-3 text-right">
                            <select name="session_year_id" id="filter_expense_session_year_id" class="form-control form-control-sm">
                                <option value="1" selected>2024-2025</option>
                                <option value="2">2023-2024</option>
                            </select>
                        </div>
                    </div>
                    <div class="chartjs-wrapper mt-2" style="height: 330px">
                        <div id="expenseChart" style="direction: ltr;">
                            <!-- Chart will be rendered here by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Leaves Section -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Leaves</h3>
                        </div>
                        <div class="col-md-6 dropdown text-right">
                            <select name="leave_filter" class="form-control form-control-sm filter_leaves">
                                <option value="Today">Today</option>
                                <option value="Tomorrow">Tomorrow</option>
                                <option value="Upcoming">Upcoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="v-scroll mt-2">
                        <table class="table custom-table">
                            <tbody class="leave-list">
                                <tr>
                                    <td>John Doe</td>
                                    <td class="text-right"><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Jane Smith</td>
                                    <td class="text-right"><span class="badge badge-success">Approved</span></td>
                                </tr>
                                <tr>
                                    <td>Mike Johnson</td>
                                    <td class="text-right"><span class="badge badge-warning">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Attendance and Announcement Section -->
    <div class="row">
        <!-- Attendance Chart -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <h3 class="card-title">Attendance</h3>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <select name="class_id" class="form-control form-control-sm class-section-attendance">
                                <option value="1">Class 1-A</option>
                                <option value="2">Class 2-B</option>
                                <option value="3">Class 3-C</option>
                            </select>
                        </div>
                    </div>
                    <div id="attendanChart">
                        <!-- Attendance chart will be rendered here -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Announcements Section -->
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <h4 class="card-title">Announcement</h4>
                    <div class="table-responsive v-scroll">
                        <table class="table" id="table_list">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th class="truncateTitle">Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Annual Sports Day</td>
                                    <td>Annual sports day will be held on December 15, 2025. All students are requested to participate.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Parent Meeting</td>
                                    <td>Parent-teacher meeting scheduled for December 20, 2025 at 10:00 AM.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Holiday Notice</td>
                                    <td>School will remain closed on December 25, 2025 for Christmas holiday.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Exam Results, Fees Overdue, and Fees Details Section -->
    <div class="row">
        <!-- Exam Results -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <h3 class="card-title">Exam Result</h3>
                        </div>
                        <div class="col-md-3">
                            <select name="session_year_id" id="exam_result_session_year_id" class="form-control form-control-sm">
                                <option value="1" selected>2024-2025</option>
                                <option value="2">2023-2024</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="exam_name" id="exam_reuslt_exam_name" class="form-control form-control-sm">
                                <option value="">Select Exam</option>
                                <option value="Mid Term">Mid Term</option>
                                <option value="Final Term">Final Term</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-1 mb-3 v-scroll">
                        <div class="exam-report" id="class-progress-report">
                            <!-- Exam results will be displayed here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fees Overdue -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="card-title">
                                Fees Over Due 
                                <span class="ml-2">
                                    <i class="fa fa-exclamation-circle" title="Inactivate student by submitting records"></i>
                                </span>
                            </h3>
                        </div>
                        <div class="col-sm-12 col-md-5">
                            <select name="class_section_id" class="form-control form-control-sm fees-over-due-class" id="fees-over-due-class-section">
                                <option value="1">Class 1-A</option>
                                <option value="2">Class 2-B</option>
                                <option value="3">Class 3-C</option>
                            </select>
                        </div>
                    </div>
                    <form method="POST" id="fees-overdue-form" class="fees-overdue-form">
                        <div class="mt-1 mb-3 v-scroll">
                            <table class="table custom-table">
                                <tbody class="fees-over-due-list">
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="student[]" value="1">
                                            John Doe
                                        </td>
                                        <td class="text-right">$500</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="student[]" value="2">
                                            Jane Smith
                                        </td>
                                        <td class="text-right">$350</td>
                                    </tr>
                                </tbody>
                            </table>           
                        </div>
                        <input type="submit" class="btn btn-success float-right fees-overdue-btn" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>

        <!-- Fees Details -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <h3 class="card-title">Fees Details</h3>
                    <div id="fees_details_chart">
                        <!-- Fees details chart will be rendered here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Birthday, Holiday, and Gender Ratio Section -->
    <div class="row">
        <!-- Birthday -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Birthday</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <select name="birthday_filter" class="form-control form-control-sm filter_birthday">
                                <option value="today">Today</option>
                                <option value="this_month">This Month</option>
                                <option value="next_month">Next Month</option>
                            </select>
                        </div>
                    </div>
                    <div class="v-scroll mt-2">
                        <table class="table custom-table">
                            <tbody class="birthday-list">
                                <tr>
                                    <td>Sarah Wilson</td>
                                    <td class="text-right">Student</td>
                                </tr>
                                <tr>
                                    <td>Tom Brown</td>
                                    <td class="text-right">Teacher</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Holiday -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <h4 class="card-title">Holiday</h4>
                    <div class="v-scroll dashboard-description">
                        <table class="table custom-table">
                            <tbody>
                                <tr>
                                    <td>Christmas Day</td>
                                    <td>
                                        <span class="float-right text-muted">25 - Dec</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>New Year</td>
                                    <td>
                                        <span class="float-right text-muted">01 - Jan</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Republic Day</td>
                                    <td>
                                        <span class="float-right text-muted">26 - Jan</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Student Gender Ratio -->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body custom-card-body">
                    <h4 class="card-title">Student Gender</h4>
                    <div id="gender-ratio-chart">
                        <!-- Gender ratio chart will be rendered here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Super Admin Dashboard Section (Optional - Hidden by default) -->
    <div class="row" style="display: none;">
        <div class="col-md-3 stretch-card grid-margin">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="ms-3">
                            Total Schools
                            <p class="text-muted">
                            <h3>25</h3>
                            </p>
                        </div>
                        <img class="ml-auto" src="images/total-schools.svg" alt="" style="width: 50px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 stretch-card grid-margin">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="ms-3">
                            Active Schools
                            <p class="text-muted">
                            <h3>22</h3>
                            </p>
                        </div>
                        <img class="ml-auto" src="images/active-schools.svg" alt="" style="width: 50px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 stretch-card grid-margin">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="ms-3">
                            Inactive Schools
                            <p class="text-muted">
                            <h3>3</h3>
                            </p>
                        </div>
                        <img class="ml-auto" src="images/inactive-schools.svg" alt="" style="width: 50px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 stretch-card grid-margin">
            <div class="card">
                <div class="card-body custom-card-body">
                    <div class="d-flex flex-row flex-wrap">
                        <div class="ms-3">
                            Total Packages
                            <p class="text-muted">
                            <h3>8</h3>
                            </p>
                        </div>
                        <img class="ml-auto" src="images/package.svg" alt="" style="width: 50px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- Custom JavaScript -->
<script>
    // Initialize charts and dynamic content
    $(document).ready(function() {
        // Expense Chart initialization
        // Attendance Chart initialization
        // Fees Details Chart initialization
        // Gender Ratio Chart initialization
        
        // Filter handlers
        $('.filter_leaves').on('change', function() {
            // Load leaves data
        });

        $('.filter_birthday').on('change', function() {
            // Load birthday data
        });

        $('#filter_expense_session_year_id').on('change', function() {
            // Load expense data
        });

        $('.class-section-attendance').on('change', function() {
            // Load attendance data
        });

        $('#fees-over-due-class-section').on('change', function() {
            // Load fees overdue data
        });

        $('#exam_result_session_year_id, #exam_reuslt_exam_name').on('change', function() {
            // Load exam results
        });
    });
</script>

</body>
</html>
