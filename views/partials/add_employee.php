<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Employee</button>

<div id="id01" class="modal">
  <form id="id0001" class="modal-content animate" action="add_employee" method="post">
    <div class="container">
      

      <label for="first_name"><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="first_name" required>

      <label for="last_name"><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="last_name" required>

      <label for="ssn"><b>SSN</b></label>
      <input type="text" placeholder="Enter SSN" name="ssn" required>

      <label for="clearance"><b>Clearance</b></label>
      <input type="text" placeholder="Enter Clearance" name="clearance" required>

      <label for="employment_status"><b>Employment Status</b></label>
      <input type="text" placeholder="Enter Employment Status" name="employment_status" required>

      <label for="employment_date"  ><b>Employment Date</b></label>
      <input type="date" placeholder="Enter Employment Date" name="employment_date" required >
    
      

      <label for="gender"><b>Gender</b></label>
  <input type="text" placeholder="Enter Gender" name="gender" required>

  <label for="blood_type"><b>Blood Type</b></label>
  <input type="text" placeholder="Enter Blood Type" name="blood_type" required>

  <button type="submit">Add Employee</button>
  
</div>

