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
                    <select name="court" id="courts" onchange="navigateToPage()" class="form-control">
                        <option value="">Select Court</option>
                        <option value="./index.php?page=district_court">District Court</option>
                        <option value="./index.php?page=matters_add">Supreme Court</option>
                        <option value="./index.php?page=High_Court">High Court</option>
                    </select>
                </div>


                <div class="col-4 form-group">
    <label class="control-label">STATE</label>
    <select id="state" name="state" class="form-control">
        <option value="">Select State</option>
    </select>
</div>


<div class="col-4 form-group">
    <label class="control-label">districts</label>
    <select id="district" name="district" class="form-control">
        <option value="">Select districts</option>
    </select>
</div>

<div class="col-4 form-group">
    <label class="control-label">COURT-COMPLEX</label>
    <select id="complexe" name="complexe" class="form-control">
        <option value="">Select complexe</option>
    </select>
</div>


<div class="col-4 form-group">
    <label class="control-label">COURT</label>
    <select id="court" name="court" class="form-control">
        <option value="">Select courts</option>
    </select>
</div>


                <div class="col-4 form-group">
                    <label class="control-label">CNR NUMBER</label>
                    <input type="text" id="cnr" name="cnr" class="form-control">
                </div>


                <div class="col-4 form-group">
                    <label class="control-label">TITLE</label>
                    <input type="text" id="title" name="title" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">FILLING NUMBER</label>
                    <input type="text" id="details" name="details" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">type</label>
                    <input type="text" id="type" name="type" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">filingDate</label>
                    <input type="text" id="filingDate" name="filingDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">registrationNumber</label>
                    <input type="text" id="registrationNumber" name="registrationNumber" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">registrationDate</label>
                    <input type="text" id="registrationDate" name="registrationDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">firstHearingDate</label>
                    <input type="text" id="firstHearingDate" name="firstHearingDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">nextHearingDate</label>
                    <input type="text" id="nextHearingDate" name="nextHearingDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">decisionDate</label>
                    <input type="text" id="decisionDate" name="decisionDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">natureOfDisposal</label>
                    <input type="text" id="natureOfDisposal" name="natureOfDisposal" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">caseStage</label>
                    <input type="text" id="caseStage" name="caseStage" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">courtNumberAndJudge</label>
                    <input type="text" id="courtNumberAndJudge" name="courtNumberAndJudge" class="form-control"
                        readonly>
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
                    <input type="text" id="petitionerAdvocates" name="petitionerAdvocates" class="form-control"
                        readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">respondentAdvocates</label>
                    <input type="text" id="respondentAdvocates" name="respondentAdvocates" class="form-control"
                        readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">acts</label>
                    <input type="text" id="acts" name="acts" class="form-control" readonly>
                </div>

                <div class="col-4 form-group">
                    <label class="control-label">sections</label>
                    <input type="text" id="sections" name="sections" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">judge</label>
                    <input type="text" id="judge" name="judge" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">businessDate</label>
                    <input type="text" id="businessDate" name="businessDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">nextDate</label>
                    <input type="text" id="nextDate" name="nextDate" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">purpose</label>
                    <input type="text" id="purpose" name="purpose" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">url</label>
                    <input type="text" id="url" name="url" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">policeStation</label>
                    <input type="text" id="policeStation" name="policeStation" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">firNumber</label>
                    <input type="text" id="firNumber" name="firNumber" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">year</label>
                    <input type="text" id="year" name="year" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">transfer</label>
                    <input type="text" id="transfer" name="transfer" class="form-control" readonly>
                </div>
                <div class="col-4 form-group">
                    <label class="control-label">orders</label>
                    <input type="text" id="orders" name="orders" class="form-control" readonly>
                </div>



                <button id="fetchCase" class="btn btn-primary">Fetch Case</button>


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

            let cnrNo = document.getElementById("cnr").value.trim();

            if (!cnrNo) {
                alert("Please enter Case Number.");
                return;
            }

            fetch(`api_district.php?cnr=${encodeURIComponent(cnrNo)}`)
                .then(response => response.json())
                .then(data => {
                    console.log("API Response:", data); // Debugging

                    if (data.error) {
                        alert(data.error);
                        return;
                    }
                    document.getElementById("title").value = data.title || "No title available";
                    // Ensure details exist before accessing properties
                    if (data.details) {
                        document.getElementById("details").value = data.details.filingNumber || "No filing number available";
                        document.getElementById("type").value = data.details.type || "No type available";
                        document.getElementById("filingDate").value = data.details.filingDate || "No type available";
                        document.getElementById("registrationNumber").value = data.details.registrationNumber || "No type available";
                        document.getElementById("registrationDate").value = data.details.registrationDate || "No type available";
                        document.getElementById("firstHearingDate").value = data.status.firstHearingDate || "No type available";
                        document.getElementById("nextHearingDate").value = data.status.nextHearingDate || "No type available";
                        document.getElementById("decisionDate").value = data.status.decisionDate || "No type available";
                        document.getElementById("natureOfDisposal").value = data.status.natureOfDisposal || "No type available";
                        document.getElementById("caseStage").value = data.status.caseStage || "No type available";
                        document.getElementById("courtNumberAndJudge").value = data.status.courtNumberAndJudge || "No type available";
                        document.getElementById("petitioners").value = data.parties.petitioners || "No type available";
                        document.getElementById("respondents").value = data.parties.respondents || "No type available";
                        document.getElementById("petitionerAdvocates").value = data.parties.petitionerAdvocates || "No type available";
                        document.getElementById("respondentAdvocates").value = data.parties.respondentAdvocates || "No type available";
                        document.getElementById("acts").value = data.actsAndSections.acts || "No type available";
                        document.getElementById("sections").value = data.actsAndSections.sections || "No type available";
                        if (data.history && data.history.length > 0) {
                            const historyItem = data.history[0]; // Accessing the first item in history array

                            document.getElementById("judge").value = historyItem.judge || "No type available";
                            document.getElementById("businessDate").value = historyItem.businessDate || "No type available";
                            document.getElementById("nextDate").value = historyItem.nextDate || "No type available";
                            document.getElementById("purpose").value = historyItem.purpose || "No type available";
                            document.getElementById("url").value = historyItem.url || "No type available";
                        }
                        document.getElementById("policeStation").value = data.firstInformationReport.policeStation || "No type available";
                        document.getElementById("firNumber").value = data.firstInformationReport.firNumber || "No type available";
                        document.getElementById("year").value = data.firstInformationReport.year || "No type available";
                        document.getElementById("transfer").value = data.transfer.transfer || "No type available";
                        document.getElementById("orders").value = data.orders.judge || "No type available";


                    } else {
                        document.getElementById("details").value = "No details available";
                        document.getElementById("type").value = "No details available";
                        document.getElementById("filingDate").value = "No details available";
                        document.getElementById("registrationNumber").value = "No details available";
                        document.getElementById("registrationDate").value = "No details available";
                        document.getElementById("firstHearingDate").value = "No details available";
                        document.getElementById("decisionDate").value = "No details available";
                        document.getElementById("natureOfDisposal").value = "No details available";
                        document.getElementById("caseStage").value = "No details available";
                        document.getElementById("courtNumberAndJudge").value = "No details available";
                        document.getElementById("petitioners").value = "No details available";
                        document.getElementById("respondents").value = "No details available";
                        document.getElementById("petitionerAdvocates").value = "No details available";
                        document.getElementById("respondentAdvocates").value = "No details available";
                        document.getElementById("acts").value = "No details available";
                        document.getElementById("sections").value = "No details available";
                        document.getElementById("respondentAdvocates").value = "No details available";
                        document.getElementById("judge").value = "No details available";
                        document.getElementById("businessDate").value = "No details available";
                        document.getElementById("nextDate").value = "No details available";
                        document.getElementById("purpose").value = "No details available";
                        document.getElementById("url").value = "No details available";
                        document.getElementById("policeStation").value = "No details available";
                        document.getElementById("firNumber").value = "No details available";
                        document.getElementById("year").value = "No details available";
                        document.getElementById("transfer").value = "No details available";
                        document.getElementById("orders").value = "No details available";


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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $.ajax({
            url: "fetch_states.php", // Ensure this URL is correct
            type: "GET",
            dataType: "json",
            success: function (response) {
                if (response.states) { // Access the "states" key from the API response
                    response.states.forEach(function (state) { // Use "state" instead of "states"
                        $("#state").append(`<option value="${state.id}">${state.name}</option>`);
                    });
                } else {
                    console.log("No states found.");
                }
            },
            error: function (xhr, status, error) {
                console.log("Error fetching states:", error);
            }
        });
    
                // Fetch districts when state is selected
                $("#state").on("change", function () {
                var stateId = $(this).val();
                if (stateId) {
                    $.ajax({
                        url: "fetch_districts.php", // PHP file to call the external API
                        type: "POST",
                        data: { stateId: stateId },
                        dataType: "json",
                        success: function (response) {
                            $("#district").html('<option value="">Select District</option>'); // Reset dropdown
                            if (response.districts) {
                                response.districts.forEach(function (district) {
                                    $("#district").append(`<option value="${district.id}">${district.name}</option>`);
                                });
                            } else {
                                console.log("No districts found.");
                            }
                        },
                        error: function (xhr, status, error) {
                            console.log("Error fetching districts:", error);
                        }
                    });
                }
            });
        

                        // Fetch districts when state is selected
                        $("#district").on("change", function () {
                var districtId = $(this).val();
                if (districtId) {
                    $.ajax({
                        url: "fetch_Complexes.php", // PHP file to call the external API
                        type: "POST",
                        data: { districtId: districtId },
                        dataType: "json",
                        success: function (response) {
                            $("#complexe").html('<option value="">Select complexe</option>'); // Reset dropdown
                            if (response.complexes) {
                                response.complexes.forEach(function (complex) {
                                    $("#complexe").append(`<option value="${complex.id}">${complex.name}</option>`);
                                });
                            } else {
                                console.log("No districts found.");
                            }
                        },
                        error: function (xhr, status, error) {
                            console.log("Error fetching districts:", error);
                        }
                    });
                }
            });
        $("#complexe").on("change", function () {
                var complexId  = $(this).val();
                if (complexId ) {
                    $.ajax({
                        url: "fetch_courts.php", // PHP file to call the external API
                        type: "POST",
                        data: { complexId : complexId },
                        dataType: "json",
                        success: function (response) {
                            $("#court").html('<option value="">Select court</option>'); // Reset dropdown
                            if (response.courts) {
                                response.courts.forEach(function (court) {
                                    $("#court").append(`<option value="${court.id}">${court.name}</option>`);
                                });
                            } else {
                                console.log("No districts found.");
                            }
                        },
                        error: function (xhr, status, error) {
                            console.log("Error fetching districts:", error);
                        }
                    });
                }
            });
    });
    
</script>



<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.js"></script>
