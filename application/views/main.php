<link href="<?php echo base_url(); ?>/assets/css/mainpage.css" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="style.css">
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
            <div class="inputs9  in">
              <label for="State">State</label>
              <input type="text" name="State" placeholder="Himachal Pradesh" id="b1">
            </div>
          </div>
          <div class="col-md-5 mt-3">
            <div class="inputs10  in">
              <label for="Area">Area</label>
              <input type="text" name="Area" placeholder=" South Delhi " id="b1">
            </div>
          </div>
          <div class="col-md-5 mt-3">
            <div class="inputs11  in">
              <label for="industry">Select Industry</label>
              <select name="industry" id="b1">
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
              <label for="city"> Select City</label>
              <select name="city" id="b1">
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

        <div class="col-md-10 text-center">
          <button type="button" class="btn btn-success mt-5" name="submit" id="btnsearch">SEARCH</button>
        </div>

      </form>
    </div>
  </div>

  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
    #dataTable{
      display:none;
    }
    .container{
      padding-left:30px;
    }
  </style>
  
<div class="container" >
  <div class="table">
    <table id="dataTable">
      <thead id="dataTableHead">
        <tr>
          <th>Company Name</th>
          <th>Owner's Name</th>
          <th>Contact No.</th>
          <th>Email</th>
          <th>Pincode</th>
          <th>Address</th>
          <th>Industry</th>
          <th>City</th>
        </tr>
      </thead>
      <tbody id="dataTableBody">

      
        <!-- Your table rows go here -->
      </tbody>
    
      
    </table>
  </div>

  </div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
			<script	src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
			<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
			<script	src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
			<script	src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
			<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
			<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
			<script	src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
			<script>
				    		$(document).ready(function() {
                               var table = $('#dataTable').DataTable( {
                                  lengthChange: false,
                                  buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
                                   } );
                        
                                table.buttons().container()
                               .appendTo( '#dataTable_wrapper .col-md-6:eq(0)' );
                            } );
			</script>
	




</main>

<!-- In your PHP file where $all is defined -->a
<script>
  var allData = <?php echo json_encode($all); ?>;

</script>

<!-- Your JavaScript code -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("btnsearch").addEventListener("click", function () {
      // Get form input values
      var companyNameInput = document.getElementsByName("company_name")[0];
      var ownerNameInput = document.getElementsByName("owner_name")[0];
      var contactNoInput = document.getElementsByName("contact_no")[0];
      var pincodeInput = document.getElementsByName("pincode")[0];
      var addressInput = document.getElementsByName("address")[0];
      var emailInput = document.getElementsByName("email")[0];
      // var stateInput = document.getElementsByName("state")[0];
      // var areaInput = document.getElementsByName("area")[0];
      var industrySelect = document.getElementsByName("industry")[0];
      var citySelect = document.getElementsByName("city")[0];

      var companyName = companyNameInput ? companyNameInput.value.toLowerCase() : '';
      var ownerName = ownerNameInput ? ownerNameInput.value.toLowerCase() : '';
      var contactNo = contactNoInput ? contactNoInput.value.toLowerCase() : '';
      var pincode = pincodeInput ? pincodeInput.value.toLowerCase() : '';
      var address = addressInput ? addressInput.value.toLowerCase() : '';
      var email = emailInput ? emailInput.value.toLowerCase() : '';
      // var state = addressInput ? stateInput.value.toLowerCase() : '';
      // var area = areaInput ? areaInput.value.toLowerCase() : '';
      var industry = industrySelect ? industrySelect.value.toLowerCase() : '';
      var city = citySelect ? citySelect.value.toLowerCase() : '';

      // Filter data based on form values
      var filteredData = allData.filter(function (item) {

        return (
          (companyName === '' || (item.Company || '').toLowerCase().includes(companyName)) &&
          (ownerName === '' || (item.OwnerName || '').toLowerCase().includes(ownerName)) &&
          (contactNo === '' || (item.ContactNo || '').toLowerCase().includes(contactNo)) &&
          (pincode === '' || (item.Pincode || '').toLowerCase().includes(pincode)) &&
          (address === '' || (item.Address || '').toLowerCase().includes(address)) &&
          (email === '' || (item.Email || '').toLowerCase().includes(email)) &&
          // (state === '' || (item.State || '').toLowerCase().includes(state)) &&
          // (area === '' || (item.Area || '').toLowerCase().includes(address)) &&
          (industry === 'select' || (item.Industry || '').toLowerCase() === industry) &&
          (city === 'select' || (item.City || '').toLowerCase() === city)
        );
      });
        document.getElementById("dataTable").style.display = "block";
      // Update the table with the filtered data
      updateTable(filteredData);
    });
  });

  // Function to update the table with filtered data
  function updateTable(filteredData) {
   var tableBody = document.getElementById("dataTableHead");
   var tableBody = document.getElementById("dataTableBody");

    // Clear existing table rows
    tableBody.innerHTML = '';

    // Add rows based on filtered data
    filteredData.forEach(function (item) {
      var row = tableBody.insertRow();
      row.insertCell(0).textContent = item.Company || 'Not defined';
      row.insertCell(1).textContent = item.OwnerName || 'Not defined';
      row.insertCell(2).textContent = item.ContactNo || 'Not defined';
      row.insertCell(3).textContent = item.Email || 'Not defined';
      row.insertCell(4).textContent = item.Pincode || 'Not defined';
      row.insertCell(5).textContent = item.Address || 'Not defined';
      // row.insertCell(6).textContent = item.State || 'Not defined';
      // row.insertCell(7).textContent = item.Area || 'Not defined';
      row.insertCell(6).textContent = item.Industry || 'Not defined';
      row.insertCell(7).textContent = item.City || 'Not defined';
    });
    // Display the table
    document.getElementById("dataTable").style.display = "table";
  }

</script>
</body>
</html>