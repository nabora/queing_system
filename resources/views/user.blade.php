<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offices</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    

<script> 
    function setTargetTable(table) {
        document.getElementById('target_table').value = table;
    }
</script>

</head>
<body>

    <nav class="navbar">
        <div>
            <li>
                <img class="img" src="\images\depedLogo.png" alt="Logo" width="90">
                <img class="img" src="\images\bg.png" alt="Logo" width="200" height="75">
            </li>
        </div>
    </nav>

        <!-- Display validation errors -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <div class="container justify-content-center align-items-center text-black"> 
        <div class="select-title"><h1 class="mb-4">SELECT OFFICE</h1></div>
            <div class="row mb-3">
                <div class="col-md-4"><button type="button" class="btn-office btn-primary w-100" data-bs-toggle="modal" data-bs-target="#sds" onclick="setTargetTable('superintendents')">Office of the Schools Division Superintendent</button></div>
                <div class="col-md-4"><button type="button" class="btn-office btn-primary w-100" data-bs-toggle="modal" data-bs-target="#asds" onclick="setTargetTable('assistant_superintendents')">Office of the Assistant Schools Division Superintendent</button></div>
                <div class="col-md-4"><button type="button" class="btn-office btn-primary w-100" data-bs-toggle="modal" data-bs-target="#admin" onclick="setTargetTable('admin')">Administration Section</button></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><button type="button" class="btn-office btn-primary w-100" data-bs-toggle="modal" onclick="setTargetTable('cid')" data-bs-target="#cid">Curriculum Implementation Division</button></div>
                <div class="col-md-4"><button type="button" class="btn-office btn-primary w-100" data-bs-toggle="modal" onclick="setTargetTable('finance')" data-bs-target="#finance">Accounting Section</button></div>
                <div class="col-md-4"><button type="button" class="btn-office btn-primary w-100" data-bs-toggle="modal" onclick="setTargetTable('ict')" data-bs-target="#ict">Information and Communication Technology</button></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"><button type="button" class="btn-office btn-primary w-100" data-bs-toggle="modal" onclick="setTargetTable('legal')" data-bs-target="#legal">Legal Section</Section></button></div>
                <div class="col-md-4"><button type="button" class="btn-office btn-primary w-100" data-bs-toggle="modal" onclick="setTargetTable('sgod')" data-bs-target="#sgod">School Governance and Operations Division</button></div>
                <div class="col-md-4"><button type="button" class="btn-office btn-primary w-100" data-bs-toggle="modal" onclick="setTargetTable('school')" data-bs-target="#school">Schools Section</button></div>
            </div>
    </div>



    <!-- sds -->
    <div class="modal fade" id="sds" role="dialog" tabindex="-1" aria-labelledby="sdsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="sdsModalLabel">Office of the Schools Division Superintendent</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="mb-3 text-size-large">Select your Intention in the Office</h5>
                    <form action="{{ route('user') }}" method="POST" id="officeForm">
                        @csrf
                        <input type="hidden" name="target_table" value="superintendents">
                        <input type="hidden" name="office_sds" value="Office of the Schools Division Superintendent">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sds[]" value="Travel Authority" id="sdsService1">
                            <label class="form-check-label mb-2" for="sdsService1">Travel Authority</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sds[]" value="Other requests/inquiries" id="sdsService2">
                            <label class="form-check-label mb-2" for="sdsService2">Other requests/inquiries</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sds[]" value="Feedback/complaint" id="sdsService3">
                            <label class="form-check-label mb-2" for="sdsService3">Feedback/complaint</label>
                        </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-target="#NextModal1" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                        </div>
            </div>
        </div>
    </div>
        <!-- Next Modal -->
         <div class="modal fade" id="NextModal1" tabindex="-1" aria-labelledby="NextModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Do you want to have another Transaction?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

    <!-- asds -->
    <div class="modal fade" id="asds" role="dialog" tabindex="-1" aria-labelledby="asdsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="asdsModalLabel">Office of the Assistant Schools Division Superintendent</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Select your Intention in the Office</h5>
                    <form action="{{ route('user') }}" method="POST" id="officeForm">
                        @csrf
                        <input type="hidden" name="target_table" value="assistant_superintendents">
                        <input type="hidden" name="office_asds" value="Office of the Assistant Schools Division Superintendent">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_asds[]" value="Bids and Awards Committee" id="asdsService1">
                            <label class="form-check-label mb-2" for="asdsService1">Bids and Awards Committee</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_asds[]" value="Other requests/inquiries" id="asdsService2">
                            <label class="form-check-label mb-2" for="asdsService2">Other requests/inquiries</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_asds[]" value="Feedback/complaint" id="asdsService3">
                            <label class="form-check-label mb-2" for="asdsService3">Feedback/complaint</label>
                        </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-target="#NextModal2" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                        </div>
            </div>
        </div>
    </div>
        <!-- Next Modal -->
         <div class="modal fade" id="NextModal2" tabindex="-1" aria-labelledby="NextModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Do you want to have another Transaction?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

        <!-- admin -->
        <div class="modal fade" id="admin" role="dialog" tabindex="-1" aria-labelledby="adminModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="adminModalLabel">Administration Section</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="mb-3">Select your Intention in the Office</h5>
                        <form action="{{ route('user') }}" method="POST" id="officeForm">
                        @csrf
                            <input type="hidden" name="target_table" value="admin">
                            <input type="hidden" name="office_admin" value="Administration Section">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Cash Advance" id="adminService1">
                                <label class="form-check-label mb-2" for="adminService1">Cash Advance</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="General Service Related" id="adminService2">
                                <label class="form-check-label mb-2" for="adminService2">General Service Related</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Procurement Related" id="adminService3">
                                <label class="form-check-label mb-2" for="asdsService3">Procurement Related</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Application - Teaching Position" id="adminService4">
                                <label class="form-check-label mb-2" for="asdsService4">Application - Teaching Position</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Application - Non-Teaching Position" id="adminService5">
                                <label class="form-check-label mb-2" for="asdsService5">Application - Non-Teaching Position</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Appointments (New, Promotion, Transfer, etc.)" id="adminService6">
                                <label class="form-check-label mb-2" for="asdsService6">Appointments (New, Promotion, Transfer, etc.)</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="COE - Certificate of Employment" id="adminService7">
                                <label class="form-check-label mb-2" for="asdsService7">COE - Certificate of Employment</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Correction of Name/Change of Status" id="adminService8">
                                <label class="form-check-label mb-2" for="asdsService8">Correction of Name/Change of Status</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="ERF - Equivalent Record Form" id="adminService9">
                                <label class="form-check-label mb-2" for="asdsService9">ERF - Equivalent Record Form</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Leave Application" id="adminService10">
                                <label class="form-check-label mb-2" for="asdsService10">Leave Application</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Loan Approval and Verification" id="adminService11">
                                <label class="form-check-label mb-2" for="asdsService11">Loan Approval and Verification</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Retirement" id="adminService12">
                                <label class="form-check-label mb-2" for="asdsService12">Retirement</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Service Record" id="adminService13">
                                <label class="form-check-label mb-2" for="asdsService13">Service Record</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Terminal Leave" id="adminService14">
                                <label class="form-check-label mb-2" for="asdsService14">Terminal Leave</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Inspection/Acceptance/Distribution of LRs, Supplies, Equipment" id="adminService15">
                                <label class="form-check-label mb-3" for="asdsService15">Inspection/Acceptance/Distribution of LRs, Supplies, Equipment</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Property and Equipment Clearance" id="adminService16">
                                <label class="form-check-label mb-2" for="asdsService16">Property and Equipment Clearance</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Request/Issuance of Supplies" id="adminService17">
                                <label class="form-check-label mb-2" for="asdsService17">Request/Issuance of Supplies</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="CAV- Certification, Authentication, Verification" id="adminService18">
                                <label class="form-check-label mb-2" for="asdsService18">CAV- Certification, Authentication, Verification</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Certified True Copy (CTC)/Photocopy of Documents" id="adminService19">
                                <label class="form-check-label mb-2" for="asdsService19">Certified True Copy (CTC)/Photocopy of Documents</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Non-Certified True Copy Documents" id="adminService20">
                                <label class="form-check-label mb-2" for="asdsService20">Non-Certified True Copy Documents</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Receiving and Releasing of Documents" id="adminService21">
                                <label class="form-check-label mb-2" for="asdsService21">Receiving and Releasing of Documents</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Other Requests/Inquiries" id="adminService22">
                                <label class="form-check-label mb-2" for="asdsService3">Other Requests/Inquiries</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="service_admin[]" value="Feedback/Compliant" id="adminService23">
                                <label class="form-check-label mb-2" for="asdsService23">Feedback/Compliant</label>
                            </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-target="#NextModal3" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                        </div>
            </div>
        </div>
    </div>
        <!-- Next Modal -->
         <div class="modal fade" id="NextModal3" tabindex="-1" aria-labelledby="NextModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Do you want to have another Transaction?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

        <!-- Curriculum Implementation Division  -->
    <div class="modal fade" id="cid" role="dialog" tabindex="-1" aria-labelledby="cidModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="cidModalLabel">Curriculum Implementation Division</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Select your Intention in the Office</h5>
                    <form action="{{ route('user') }}" method="POST" id="officeForm">
                        @csrf
                        <input type="hidden" name="target_table" id="target_table" value="cid">
                        <input type="hidden" name="office_cid" value="Curriculum Implementation Division">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_cid[]" value="ALS Enrollment" id="cidService1">
                            <label class="form-check-label" for="cidService1">ALS Enrollment</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_cid[]" value="Access to LR Portal" id="cidService2">
                            <label class="form-check-label" for="cidService2">Access to LR Portal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_cid[]" value="Borrowing of Books/Learning Materials" id="cidService3">
                            <label class="form-check-label" for="cidService3">Borrowing of Books/Learning Materials</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_cid[]" value="Contextualized Learning Materials" id="cidService4">
                            <label class="form-check-label" for="cidService4">Contextualized Learning Materials</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_cid[]" value="Quality Assurance of Supplementary Learning Resources" id="cidService5">
                            <label class="form-check-label" for="cidService5">Quality Assurance of Supplementary Learning Resources</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_cid[]" value="Instructional Supervision" id="cidService6">
                            <label class="form-check-label" for="cidService6">Instructional Supervision</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_cid[]" value="Technical Assistance" id="cidService7">
                            <label class="form-check-label" for="cidService7">Technical Assistance</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_cid[]" value="Other Request/Inquiries" id="cidService8">
                            <label class="form-check-label" for="cidService8">Feedback/complaint</label>
                        </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-target="#NextModal4" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                        </div>
            </div>
        </div>
    </div>
        <!-- Next Modal -->
         <div class="modal fade" id="NextModal4" tabindex="-1" aria-labelledby="NextModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Do you want to have another Transaction?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

    <!-- Finance Office -->
    <div class="modal fade" id="finance" role="dialog" tabindex="-1" aria-labelledby="finanaceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="financeModalLabel">Accounting Section</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Select your Intention in the Office</h5>
                    <form action="{{ route('user') }}" method="POST" id="officeForm">
                        @csrf
                        <input type="hidden" name="target_table" value="finance">
                        <input type="hidden" name="office_finance" value="Accounting Section">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_finance[]" value="Accounting Related" id="financeService1">
                            <label class="form-check-label" for="financeService1">Accounting Related</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_finance[]" value="ORS- Obligation Request and Status" id="financeService2">
                            <label class="form-check-label" for="financeService2">ORS- Obligation Request and Status</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_finance[]" value="Posting/Updating of Disbursements" id="financeService3">
                            <label class="form-check-label" for="financeService3">Posting/Updating of Disbursements</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_finance[]" value="Other Request/Inquiries" id="financeService4">
                            <label class="form-check-label" for="financeService4">Other Request/Inquiries</label>
                        </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-target="#NextModal5" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                        </div>
            </div>
        </div>
    </div>
        <!-- Next Modal -->
         <div class="modal fade" id="NextModal5" tabindex="-1" aria-labelledby="NextModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Do you want to have another Transaction?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

    <!--ICT Office -->
    <div class="modal fade" id="ict" role="dialog" tabindex="-1" aria-labelledby="ictModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="ictModalLabel">Information and Communication Technology Office</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Select your Intention in the Office</h5>
                    <form action="{{ route('user') }}" method="POST" id="officeForm">
                        @csrf
                        <input type="hidden" name="target_table" value="ict">
                        <input type="hidden" name="office_ict" value="Information and Communication Technology">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_ict[]" value="Create/Delete/Rename/Reset User Accounts" id="ictService1">
                            <label class="form-check-label" for="ictService1">Create/Delete/Rename/Reset User Accounts</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_ict[]" value="Troubleshooting of ICT Equipment" id="ictService2">
                            <label class="form-check-label" for="ictService2">Troubleshooting of ICT equipment</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_ict[]" value="Uploading of Publications" id="ictService3">
                            <label class="form-check-label" for="ictService3">Uploading of Publications</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_ict[]" value="Other Request/Inquiries" id="ictService4">
                            <label class="form-check-label" for="ictService4">Other Request/Inquiries</label>
                        </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-target="#NextModal6" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                        </div>
            </div>
        </div>
    </div>
        <!-- Next Modal -->
         <div class="modal fade" id="NextModal6" tabindex="-1" aria-labelledby="NextModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Do you want to have another Transaction?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

    <!--Legal Office -->
    <div class="modal fade" id="legal" role="dialog" tabindex="-1" aria-labelledby="legalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="legalModalLabel">Legal Office</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Select your Intention in the Office</h5>
                    <form action="{{ route('user') }}" method="POST" id="officeForm">
                        @csrf
                        <input type="hidden" name="target_table" value="legal">
                        <input type="hidden" name="office_legal" value="Legal Office">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_legal[]" value="Certificate of No Pending Case" id="legalService1">
                            <label class="form-check-label" for="legalService1">Certificate of No Pending Case</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_legal[]" value="Correction of Entries in School Records" id="legalService2">
                            <label class="form-check-label" for="legalService2">Correction of Entries in School Records</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_legal[]" value="Site Titling" id="legalService3">
                            <label class="form-check-label" for="legalService3">Site Titling</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_legal[]" value="Other Request/Inquiries" id="LegalService4">
                            <label class="form-check-label" for="legalService4">Other Request/Inquiries</label>
                        </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-target="#NextModal7" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                        </div>
            </div>
        </div>
    </div>
        <!-- Next Modal -->
         <div class="modal fade" id="NextModal7" tabindex="-1" aria-labelledby="NextModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Do you want to have another Transaction?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

    <!--SGOD Office -->
    <div class="modal fade" id="sgod" role="dialog" tabindex="-1" aria-labelledby="legalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="legalModalLabel">School Governance and Operations Division</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Select your Intention in the Office</h5>
                    <form action="{{ route('user') }}" method="POST" id="officeForm">
                        @csrf
                        <input type="hidden" name="target_table" value="sgod">
                        <input type="hidden" name="office_sgod" value="School Governance and Operations Division">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="Private School Related" id="sgodService1">
                            <label class="form-check-label" for="sgodService1">Private School Related</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="Basic Education Data" id="sgodService2">
                            <label class="form-check-label" for="sgodService2">Basic Education Data</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="EBEIS/LIS/NAT Data and Performance Indicators" id="sgodService3">
                            <label class="form-check-label" for="sgodService3">EBEIS/LIS/NAT Data and Performance Indicators</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="Additional SHS Track for Private Schools" id="sgodService4">
                            <label class="form-check-label" for="sgodService4">Additional SHS Track for Private Schools</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="Increase in Tuition/Other School Fees" id="sgodService5">
                            <label class="form-check-label" for="sgodService5">Increase in Tuition/Other School Fees</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="No Increase in Tuition/Other School Fees" id="sgodService6">
                            <label class="form-check-label" for="sgodService6">No Increase in Tuition/Other School Fees</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="Private Schools Permit/Recognition/Renewal" id="sgodService7">
                            <label class="form-check-label" for="sgodService7">Private Schools Permit/Recognition/Renewal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="Special Orders- Graduation of Private Schools Learners" id="sgodService8">
                            <label class="form-check-label" for="sgodService8">Special Orders- Graduation of Private Schools Learners</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="Summer Permit for Private Schools" id="sgodService9">
                            <label class="form-check-label" for="sgodService9">Summer Permit for Private Schools</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_sgod[]" value="Other Request/Inquiries" id="sgodService10">
                            <label class="form-check-label" for="sgodService10">Other Request/Inquiries</label>
                        </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-target="#NextModal8" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                        </div>
            </div>
        </div>
    </div>
        <!-- Next Modal -->
         <div class="modal fade" id="NextModal8" tabindex="-1" aria-labelledby="NextModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Do you want to have another Transaction?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
            </form>
        </div>

    <!--School Office -->
    <div class="modal fade" id="school" role="dialog" tabindex="-1" aria-labelledby="legalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="legalModalLabel">School</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Select your Intention in the Office</h5>
                    <form action="{{ route('user') }}" method="POST" id="officeForm">
                        @csrf
                        <input type="hidden" name="target_table" value="school">
                        <input type="hidden" name="office_school" value="School">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Enrollment" id="schoolService1">
                            <label class="form-check-label" for="schoolService1">Enrollment</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Teacher I Application" id="schoolService2">
                            <label class="form-check-label" for="schoolService2">Teacher I Application</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Certified True Copy (CTC) of Documents" id="schoolService3">
                            <label class="form-check-label" for="schoolService3">Certified True Copy (CTC) of Documents</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Personnel Records (COE), Service Record, etc." id="schoolService4">
                            <label class="form-check-label" for="schoolService4">Personnel Records (COE), Service Record, etc.</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Distribution of Modules" id="schoolService5">
                            <label class="form-check-label" for="schoolService5">Distribution of Modules</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Barrowing of Books/Learning Materials" id="schoolService6">
                            <label class="form-check-label" for="schoolService6">Barrowing of Books/Learning Materials</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Inventory (School/Laboratory)" id="schoolService7">
                            <label class="form-check-label" for="schoolService7">Inventory (School/Laboratory)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Learning and Development (L&D)" id="schoolService8">
                            <label class="form-check-label" for="schoolService8">Learning and Development (L&D)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Public Assistance (Feedback/Complaints)" id="schoolService9">
                            <label class="form-check-label" for="schoolService9">Public Assistance (Feedback/Complaints)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Recieving and Releasing of Documents" id="schoolService10">
                            <label class="form-check-label" for="schoolService10">Recieving and Releasing of Documents</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Clearance" id="schoolService11">
                            <label class="form-check-label" for="schoolService11">Clearance</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="School Permanent Records" id="schoolService12">
                            <label class="form-check-label" for="schoolService12">School Permanent Records</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Service Credits/Certification of Compensatory Time Credits" id="schoolService13">
                            <label class="form-check-label" for="schoolService13">Service Credits/Certification of Compensatory Time Credits</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Use/Rental of School Facilities (Gym, Covered Court, etc.)" id="schoolService14">
                            <label class="form-check-label" for="schoolService14">Use/Rental of School Facilities (Gym, Covered Court, etc.)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="service_school[]" value="Other Request/Inquiries" id="schoolService15">
                            <label class="form-check-label" for="schoolService15">Other Request/Inquiries</label>
                        </div>
                </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-target="#NextModal9" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                        </div>
            </div>
        </div>
    </div>
        <!-- Next Modal -->
         <div class="modal fade" id="NextModal9" tabindex="-1" aria-labelledby="NextModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h3>Do you want to have another Transaction?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Yes</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
            </form>
        </div>



</body>
</html>
