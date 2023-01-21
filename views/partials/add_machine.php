<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Machine</button>

<div id="id01" class="modal">
  <form id="id0001" class="modal-content animate" action="add_machine" method="post">
    <div class="container">
      

      <label for="machine_name"><b>Machine Name</b></label>
      <input type="text" placeholder="Enter Machine Name" name="machine_name" required>

      <label for="machine_type"><b>Machine type</b></label>
      <input type="text" placeholder="Enter machine type" name="machine_type" required>

      <label for="checkup_date"><b>checkup_date</b></label>
      <input type="date" placeholder="Enter checkup date" name="checkup_date" required>

      <label for="checkup_status"><b>checkup_status</b></label>
      <input type="text" placeholder="Enter checkup status" name="checkup_status" required>

      <label for="firmware_version"  ><b>firmware version</b></label>
      <input type="text" placeholder="Enter firmware version" name="firmware_version" required >
      
      <label for="deployment"  ><b>Deployment Status ID</b></label>
      <input type="text" placeholder="Enter deployment status" name="deployment" required >
      
      <label for="operator_id"  ><b>Operator ID</b></label>
      <input type="text" placeholder="Enter Operator ID" name="operator_id" required >
    
      
      

      
  <button type="submit">Add Machine</button>
  
</div>

