<header class="page-title-bar">
    <div class="d-md-flex align-items-md-start">
        <h1 class="page-title mr-sm-auto">Matter Information </h1>
    </div>
</header>

<div class="card card-fluid">
    <h6 class="card-header"> Matter</h6>
    <div class="card-body">

        <form method="post" id="manage-estimate">
            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">

            <div class="form-row">
                <div class="col-sm-12 form-group">
                <label for="" class="control-label">COURTS/TRIBUNAL*</label>
                    <select name="court" id="court" onchange="navigateToPage()" class="form-control">
                        <option value="">Select Court</option>
                        <option value="./index.php?page=district_court">District Court</option>
                        <option value="./index.php?page=matters_add">Supreme Court</option>
                        <option value="page3.php">Court</option>
                    </select>
                </div>


                <div class="col-4 form-group">
                    <label class="control-label">CASE NUMBER</label>
                    <input type="text" id="case_no" name="case_no" class="form-control">
                </div>

                <div class="col-4 form-group">
                    <label class="control-label">CASE YEAR</label>
                    <input type="text" id="case_year" name="case_year" class="form-control" min="1900"
                        max="<?php echo date('Y'); ?>">
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">cnr</label>
                    <input type="text" id="cnr" name="cnr" class="form-control" readonly>
                </div>

                <div class="col-4 form-group">
                    <label class="control-label">TITLE</label>
                    <input type="text" id="title" name="title" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">caseNumber</label>
                    <input type="text" id="caseNumber" name="caseNumber" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">category</label>
                    <input type="text" id="category" name="category" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">filedOn</label>
                    <input type="text" id="filedOn" name="filedOn" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">lastListedOn</label>
                    <input type="text" id="lastListedOn" name="lastListedOn" class="form-control" readonly>
                </div>     
                <div class="col-4 form-group">
                    <label class="control-label">nextDate</label>
                    <input type="text" id="nextDate" name="nextDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">status</label>
                    <input type="text" id="status" name="status" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">stage</label>
                    <input type="text" id="stage" name="stage" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">petitioners</label>
                    <input type="text" id="petitioners" name="petitioners" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">respondents</label>
                    <input type="text" id="respondents" name="respondents" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">petitionerAdvocates</label>
                    <input type="text" id="petitionerAdvocates" name="petitionerAdvocates" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">courtNumberAndJudge</label>
                    <input type="text" id="courtNumberAndJudge" name="courtNumberAndJudge" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">respondentAdvocates</label>
                    <input type="text" id="respondentAdvocates" name="respondentAdvocates" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">date</label>
                    <input type="text" id="date" name="date" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">type</label>
                    <input type="text" id="type" name="type" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">stage</label>
                    <input type="text" id="stage" name="stage" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">purpose</label>
                    <input type="text" id="purpose" name="purpose" class="form-control" readonly>
                </div>

                <div class="col-4 form-group">
                    <label class="control-label">judge</label>
                    <input type="text" id="judge" name="judge" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">remarks</label>
                    <input type="text" id="remarks" name="remarks" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">serialNumber</label>
                    <input type="text" id="serialNumber" name="serialNumber" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">default</label>
                    <input type="text" id="default" name="default" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">remarks</label>
                    <input type="text" id="remarks" name="remarks" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">url</label>
                    <input type="text" id="url" name="url" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">notificationDate</label>
                    <input type="text" id="notificationDate" name="notificationDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">removalDate</label>
                    <input type="text" id="removalDate" name="removalDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">date</label>
                    <input type="text" id="date" name="date" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">url</label>
                    <input type="text" id="url" name="url" class="form-control" readonly>
                </div>

               



                <button id="fetch_button" class="btn btn-primary">Fetch Case Details</button>

            </div>
        </form>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary ml-auto" id="save-estimate-btn"
            form="manage-estimate">Submit</button>
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let savedValue = localStorage.getItem("selectedCourt");
    if (savedValue) {
        document.getElementById("court").value = savedValue;
    }
});

function navigateToPage() {
    let selectElement = document.getElementById("court");
    let selectedPage = selectElement.value;

    if (selectedPage) {
        localStorage.setItem("selectedCourt", selectedPage); // Store selection
        window.location.href = selectedPage; // Redirect to the selected page
    }
}
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("fetch_button").addEventListener("click", function (event) {
            event.stopPropagation(); // Prevent event bubbling
            event.preventDefault();  // Stop form submission if inside a form

            let caseNo = document.getElementById("case_no").value.trim();
            let caseYear = document.getElementById("case_year").value.trim();

            if (!caseNo || !caseYear) {
                alert("Please enter both Case Number and Case Year.");
                return;
            }

            fetch(`api.php?case_no=${encodeURIComponent(caseNo)}&case_year=${encodeURIComponent(caseYear)}`)
                .then(response => response.json())
                .then(data => {
                    console.log("API Response:", data); // Debugging
                    if (data.error) {
                        alert(data.error);
                        return;
                    }
                    document.getElementById("title").value = data.title || "No title available";
                    document.getElementById("cnr").value = data.cnr || "No title available";

                    if (data.details) {
                        document.getElementById("caseNumber").value = data.details.caseNumber || "No filing number available";
                        document.getElementById("category").value = data.details.category || "No type available";
                        document.getElementById("filedOn").value = data.details.filedOn || "No type available";
                        document.getElementById("lastListedOn").value = data.status.lastListedOn || "No type available";
                        document.getElementById("nextDate").value = data.status.nextDate || "No type available";
                        document.getElementById("status").value = data.status.status || "No type available";
                        document.getElementById("stage").value = data.status.stage || "No type available";
                        document.getElementById("petitioners").value = data.parties.petitioners || "No type available";
                        document.getElementById("respondents").value = data.parties.respondents || "No type available";
                        document.getElementById("petitionerAdvocates").value = data.parties.petitionerAdvocates || "No type available";
                        document.getElementById("respondentAdvocates").value = data.parties.respondentAdvocates || "No type available";

                        if (data.history && data.history.length > 0) {
                         const historyItem = data.history[0]; // Accessing the first item in history array

                         document.getElementById("date").value = historyItem.date || "No type available";
                         document.getElementById("type").value = historyItem.type || "No type available";
                         document.getElementById("stage").value = historyItem.stage || "No type available";
                         document.getElementById("purpose").value = historyItem.purpose || "No type available";
                         document.getElementById("judge").value = historyItem.judge || "No type available";
                         document.getElementById("remarks").value = historyItem.remarks || "No type available";
                        }
                        if (data.defects && data.defects.length > 0) {
                         const defectsItem = data.defects[0]; // Accessing the first item in history array

                         document.getElementById("date").value = defectsItem.serialNumber || "No type available";
                         document.getElementById("type").value = defectsItem.default || "No type available";
                         document.getElementById("stage").value = defectsItem.remarks || "No type available";
                         document.getElementById("purpose").value = defectsItem.notificationDate || "No type available";
                         document.getElementById("judge").value = defectsItem.removalDate || "No type available";
                        }
                        document.getElementById("date").value = data.orders.date || "No type available";
                        document.getElementById("url").value = data.orders.url || "No type available";

                    } else {
                        document.getElementById("caseNumber").value = "No details available";
                        document.getElementById("category").value = "No details available";
                        document.getElementById("filedOn").value = "No details available";
                        document.getElementById("lastListedOn").value = "No details available";
                        document.getElementById("nextDate").value = "No details available";
                        document.getElementById("status").value = "No details available";
                        document.getElementById("stage").value = "No details available";
                        document.getElementById("petitioners").value = "No details available";
                        document.getElementById("respondents").value = "No details available";
                        document.getElementById("petitionerAdvocates").value = "No details available";
                        document.getElementById("respondentAdvocates").value = "No details available";
                        document.getElementById("date").value = "No details available";
                        document.getElementById("type").value = "No details available";
                        document.getElementById("stage").value = "No details available";
                        document.getElementById("purpose").value = "No details available";
                        document.getElementById("judge").value = "No details available";
                        document.getElementById("date").value = "No details available";
                        document.getElementById("url").value = "No details available";


                    }
                    
                })
                .catch(error => console.error("Error fetching case details:", error));
        });
    });

</script>
<script>
    $(document).ready(function () {
        // Define loading functions
        function start_load() {
            $('body').prepend('<div id="preloader"></div>');
        }

        function end_load() {
            $('#preloader').fadeOut('fast', function () {
                $(this).remove();
            });
        }

        $('#manage-estimate').on('submit', function (e) {
            e.preventDefault();
            start_load();
            $.ajax({
                url: 'ajax.php?action=save_supreme_court',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                success: function (resp) {
                    if (resp == 1) {
                        toastr.success('Data successfully saved');
                        setTimeout(function () {
                            location.href = 'index.php?page=matters_list';
                        }, 2000);
                    } else {
                        $('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> An error occurred</div>');
                    }
                    end_load();
                },
                error: function (xhr) {
                    console.error('Error:', xhr);
                    toastr.error('An error occurred while processing the request.');
                    end_load();
                }
            });
        });
    });
</script>



<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.js"></script>