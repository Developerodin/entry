<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
<main>

    <div class="relative">
        <img src="assets/img/b1.png" alt="banner" width="100%" height="200px">

    </div>

    <div class="row pb-md-4 m-0" style="justify-content: center;">

        <div class="col-md-8 mt-2">
            <form id="filterForm" method="post">
                <div class="row" style="    justify-content: space-around;">
                    <div class="col-md-5 mt-3">
                        <div class="inputs in">
                            <label for="comapanyName">Comapany's Name</label>
                            <input type="text" name="company_name" placeholder="Grand Paradise" id="b1">
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="inputs2  in">
                            <label for="OwnerName">Owner's Name</label>
                            <input type="text" name="owner_name" placeholder="Khushal Paul" id="b1">
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="inputs3  in">
                            <label for="contact">Contact No.</label>
                            <input type="text" name="contact_no" placeholder="+91 7896542210 " id="b1">
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="inputs4  in">
                            <label for="email">Email</label>
                            <input type="text" name="email" placeholder=" khush18@gmail.com" id="b1">
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="inputs7  in">
                            <label for="Pincode">Pincode</label>
                            <input type="text" name="pincode" placeholder="304022" id="b1">
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="inputs8  in">
                            <label for="address">Address</label>
                            <input type="text" name="address" placeholder="15 street Vile Parle " id="b1">
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="inputs12  in">
                            <label for="state"> Select State</label>
                            <select name="state" class="b1" id="stateDropdown">
                                <option value="select">Select state</option>
                                <option value="Andhrapradesh">Andhrapradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Banswara">Banswara</option>
                                <option value="Bhilwara">Bhilwara</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachalpradesh">Himachalpradesh</option>
                                <option value="Jammukashmir">Jammukashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhyapradesh">Madhyapradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Orissa">Orissa</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Pune">Pune</option>
                                <option value="Pratapgarh">Pratapgarh</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Stateofdelhi">Stateofdelhi</option>
                                <option value="Tamilnadu">Tamilnadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Uttaranchal">Uttaranchal</option>
                                <option value="Uttarpradesh">Uttarpradesh</option>
                                <option value="Westbengal">Westbengal</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-5 mt-3">
                        <div class="inputs10  in">
                            <label for="Area">Area</label>
                            <input type="text" name="area" placeholder=" South Delhi " id="b1">
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="inputs11  in">
                            <label for="industry">Select Industry</label>
                            <select name="industry" class="b1">
                                <option value="select"> Select Industry</option>
                                <option value="Event Management ">Event Management </option>
                                <option value="Event Planners & Organizers ">Event Planners & Organizers </option>
                                <option value="Jewellers">Jewellers</option>
                                <option value="Services-Event Services ">Services-Event Services </option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="inputs12  in">
                            <label for="city">Select City</label>
                            <select name="city" class="b1" id="cityDropdown">
                                <option value="select">Select City</option>
                                <option value="Abu road">Abu Road</option>
                                <option value="Ajmer">Ajmer</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Banswara">Banswara</option>
                                <option value="Bhilwara">Bhilwara</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dehli">Dehli</option>
                                <option value="Dungapur">Dungapur</option>
                                <option value="Faridabad">Faridabad</option>
                                <option value="Ghaziabad">Ghaziabad</option>
                                <option value="Greater Noida">Greater Noida</option>
                                <option value="Gurgaon">Gurgaon</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Jodhpur">Jodhpur</option>
                                <option value="Kota">Kota</option>
                                <option value="Ludhiana">Ludhiana</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Noida">Noida</option>
                                <option value="Pali">Pali</option>
                                <option value="Pune">Pune</option>
                                <option value="Pratapgarh">Pratapgarh</option>
                                <option value="Pune">Pune</option>
                                <option value="Rajsamand">Rajsamand</option>
                                <option value="Sirohi">Sirohi</option>
                                <option value="Surat">Surat</option>
                                <option value="Udaipur">Udaipur</option>
                                <option value="Varodara">Varodara</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-success mt-5" name="submit" id="btnsearch">SEARCH</button>
                </div>

            </form>
        </div>
    </div>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
        overflow-x: auto;
    }
    /* #dataTable{
      background-color: #dddddd;
    } */

    th,
    td {
        border: 1px solid #ffffff;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: rgb(255, 255, 255);
    }

    #dataTable_previous {
        padding: 4px;
        background-color: #0c003ac2;
        border-radius: 5px;
        color: white !important;
        width: 6vw;
        display: flex;
        justify-content: center;
    }

    #dataTable_next {
        padding: 4px;
        background-color: #0c003ac2;
        border-radius: 5px;
        color: white !important;
        width: 6vw;
        display: flex;
        justify-content: center;
    }

    .paginate_button {
        color: #0c003ac2 !important;
        padding: 6px;
    }

    #dataTable_paginate {
        display: flex;
        justify-content: center;
    }

    #dataTable_paginate {
        padding-bottom: 26px;
    }
    </style>
    </head>

    <body>
        <div class="container">
            <table id="dataTable">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Owner's Name</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                        <th>Pincode</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>Area</th>
                        <th>Industry</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody id="dataTableBody">
                    <!-- Your table rows go here -->
                </tbody>
            </table>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

        <script>



        document.addEventListener("DOMContentLoaded", function() {
            var allData = <?php echo json_encode($all); ?>;
            var dataTableBody = $('#dataTableBody');
            // Function to update the table with filtered data
            function updateTable(filteredData) {
              console.log("filterData",filteredData);
                dataTableBody.empty();
                var tableBody = document.getElementById("dataTableBody");
                filteredData.forEach(function (item) {
      var row = tableBody.insertRow();
      row.insertCell(0).textContent = item.Company || 'Not defined';
      row.insertCell(1).textContent = item.OwnerName || 'Not defined';
      row.insertCell(2).textContent = item.ContactNo || 'Not defined';
      row.insertCell(3).textContent = item.Email || 'Not defined';
      row.insertCell(4).textContent = item.Pincode || 'Not defined';
      row.insertCell(5).textContent = item.Address || 'Not defined';
      row.insertCell(6).textContent = item.State || 'Not defined';
      row.insertCell(7).textContent = item.Area || 'Not defined';
      row.insertCell(8).textContent = item.Industry || 'Not defined';
      row.insertCell(9).textContent = item.City || 'Not defined';
    });

                // Initialize DataTable
                $('#dataTable').DataTable();
            }
            document.getElementById("btnsearch").addEventListener("click", function() {
                // Get form input values
                var companyName = document.getElementsByName("company_name")[0].value.toLowerCase();
                var ownerName = document.getElementsByName("owner_name")[0].value.toLowerCase();
                var contact = document.getElementsByName("contact_no")[0].value.toLowerCase();
                var pincode = document.getElementsByName("pincode")[0].value.toLowerCase();
                var address = document.getElementsByName("address")[0].value.toLowerCase();
                var email = document.getElementsByName("email")[0].value.toLowerCase();
                var state = document.getElementsByName("state")[0].value.toLowerCase();
                var area = document.getElementsByName("area")[0].value.toLowerCase();
                var industry = document.getElementsByName("industry")[0].value.toLowerCase();
                var city = document.getElementsByName("city")[0].value.toLowerCase();

console.log("allData",allData);
                // Filter data based on form values
                var filteredData = allData.filter(function(item) {
                    return (
                        (companyName === '' || (item.Company || '').toLowerCase()
                            .includes(companyName)) &&
                        (ownerName === '' || (item.OwnerName || '').toLowerCase().includes(
                            ownerName)) &&
                        (contact === '' || (item.ContactNo || '').toLowerCase().includes(
                            contact)) &&
                        (email === '' || (item.Email || '').toLowerCase().includes(
                        email)) &&
                        (pincode === '' || (item.Pincode || '').toLowerCase().includes(
                            pincode)) &&
                        (address === '' || (item.Address || '').toLowerCase().includes(
                            address)) &&
                        (state === 'select' || (item.State || '').toLowerCase() ===
                        state) &&
                        (area === '' || (item.Area || '').toLowerCase().includes(area)) &&
                        (industry === 'select' || (item.Industry || '').toLowerCase() ===
                            industry) &&
                        (city === 'select' || (item.City || '').toLowerCase() === city)

                    );
                });


                // Update the table with the filtered data
                updateTable(filteredData);
            });
        });
        </script>
    </body>

    </html>