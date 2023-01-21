<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Client</button>

<div id="id01" class="modal">
  <form id="id0001" class="modal-content animate" action="add_client" method="post">
    <div class="container">
      

      <label for="client_name"><b>Client Name</b></label>
      <input type="text" placeholder="Enter Client Name" name="client_name" required>

      <label for="tax_id"><b>Tax ID</b></label>
      <input type="text" placeholder="Enter Tax ID" name="tax_id" required>

      <label for="tax_addr"><b>tax address</b></label>
      <input type="text" placeholder="Enter tax address" name="tax_addr" required>

      <label for="po_number"><b>PO number</b></label>
      <input type="text" placeholder="Enter PO number" name="po_number" required>

      <label for="shipping_prio"><b>Shipping Priority</b></label>
      <input type="text" placeholder="Enter Shipping Priority" name="shipping_prio" required>

    

  <button type="submit">Add Client</button>
  
</div>

