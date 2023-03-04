<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <title>Home Administrator</title>

    <!-- Bootstrap CSS CDN -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
   
    <!-- Our Custom CSS -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header" >
                <h6>Home/Administrator</h3>
            </div>

            <ul class="list-unstyled components my-list">
                <p>Subcribers</p>
                <li>
                  <a href="/add">Add</a>
                </li>
                <li>
                  <a data-toggle="modal" data-target="#myModal">Logs</a>
              </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info"  style="background-color: white; color: black;">
                        <i class="fas fa-align-left"></i>
                        <span>Home/ Administrator</span>
                    </button>
                    
                </div>
            </nav>

            <div class="row mb-3 justify-content-center">
              <div class="col-md-6">
                <form class="form-inline">
                  <div class="input-group w-100">
                    <input type="text" class="form-control mr-sm-2" placeholder="Search..." id="searchInput">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button" id="searchButton" style="background-color: black;">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          <div class="table-responsive">
            <table class="table table-striped table-hover" id="subscribersTable" data-toggle="modal" data-target="#myModal">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>GENDER</th>
                  <th>Address</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $subcriber; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr data-id="<?php echo e($item->ID); ?>">
                      <td><?php echo e($item->ID); ?></td>
                      <td><?php echo e($item->lastname); ?></td>
                      <td><?php echo e($item->firstname); ?></td>
                      <td><?php echo e($item->middlename); ?></td>
                      <td><?php echo e($item->gender); ?></td>
                      <td><?php echo e($item->address); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            </tbody>
        </table>
      </div>
       
        
        
        </div>
        </div>
    </div>

    <!-- Modal 3 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel3">Modal 3 Title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Modal 3 content goes here.
      </div>
    </div>
  </div>
</div>
                  
          </div>
          
        </div>
      </div>
    </div>
    

    <!-- Modal -->
    

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="subscriberModalLabel">Subscriber Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p><strong>Name:</strong> <span id="subscriberName"></span></p>
                 
                  <table class="table table-striped table-hover" id="subscribersTable2">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>Phone Number</th>
                              <th>Provider</th>
                          </tr>
                      </thead>
                      <tbody id="subscriberDetails">
                      </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary float-right" id="Edit">Edit</button>
                <button type="button" class="btn btn-primary" id="addSubscriber">Add</button>
                <button type="button" class="btn btn-primary" id="addNumber">Save</button>
                <button type="button" class="btn btn-primary" id="updateNumber">Update</button>
                <button type="button" class="btn btn-danger" id="delNumber">Delete</button>
               
                

              </div>
          </div>
      </div>
  </div>
  

  <!-- Edit button -->



<!-- Modal for Edit button -->
<div class="modal" tabindex="-1" role="dialog" id="editModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Contact Information</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Edit contact form goes here -->
        <form>
          <div class="form-group">
            <label for="editName">FIRST NAME</label>
            <input type="text" class="form-control" id="editFirstName" placeholder="Enter First Name">
          </div>

       
          <div class="form-group">
            <label for="editEmail">LASTNAME</label>
            <input type="email" class="form-control" id="editLastName" placeholder="Enter Last Name">
          </div>
          <div class="form-group">
            <label for="editPhone">MIDDLENAME</label>
            <input type="text" class="form-control" id="editMiddleName" placeholder="Enter Middle Name">
          </div>
          <div class="form-group">
            <label for="editPhone">ADDRESS</label>
            <input type="text" class="form-control" id="editAddress" placeholder="Enter Address">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
      </div>
    </div>
  </div>
</div>

    
  


   


    <div class="overlay"></div>
      <!-- Javascript -->
      
      
      
      <script src="<?php echo e(asset('Jquery/scripts.js')); ?>"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
 <!--[if lt IE 10]>
     <script src="assets/js/placeholder.js"></script>
 <![endif]-->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


    <script>
      const searchInput = document.querySelector('#searchInput');
      const searchButton = document.querySelector('#searchButton');
      const tableRows = document.querySelectorAll('#subscribersTable tbody tr');
    
    
      searchButton.addEventListener('click', () => {
        const searchTerm = searchInput.value.toLowerCase();
    
        tableRows.forEach(row => {
          const rowText = row.textContent.toLowerCase();
          if (rowText.includes(searchTerm)) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      });




</script>



    <script> 


  
        const inputFields = document.querySelectorAll('input.form-control form-control-plaintext');
        $(document).ready(function () {


        inputFields.forEach(function(input) {
        input.addEventListener('click', function(event) {
        const value = event.target.value;
        console.log(value);
          });
        });

          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

          $('#subscribersTable tbody').on('click', 'tr', function() {
            var subscriberId = $(this).find('td:first-child').text();
            $.ajax({
            url: "<?php echo e(route('get-number')); ?>",
            type: "POST",
            data: {
                subscriber_id: subscriberId
            },
            dataType: "json",
            success: function(data) {
              var count = data
              console.log(subscriberId)
              if (count < 1){
              $.ajax({
              url: "<?php echo e(route('get-name')); ?>",
              type: "POST",
              data: {
                  subscriber_id: subscriberId
              },
              dataType: "json",
              success: function(data) {
                console.log(data)
                var modalBody = $('#myModal .modal-body');
                modalBody.empty();
                var name = data.LASTNAME + ', ' + data.FIRSTNAME + ' ' + data.MIDDLENAME;
                var ID = data.ID;
                var tableHtml = `
    
                <p style="margin: 0.5rem 0; font-size: 1.2rem; font-weight: bold; color: black;">
            <span id="idNum">${ID}.</span> ${name}
          </p>
    
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Provider</th>
              <th>Phone Number</th>
            </tr>
          </thead>
        </tbody>
          `;

          modalBody.html(tableHtml);



            // Build the provider and phone number HTML
            var providerHtml = `<td>${subscriber.PROVIDER}</td>`;
            var phoneHtml = `<td>${subscriber.PHONENO}</td>`;

                
                




              }
              
            });
              }
            }
            });
            
         
           // console.log(subscriberId);
           $.ajax({
            url: "<?php echo e(route('get-subscriber')); ?>",
            type: 'POST',
            data: {
                subscriber_id: subscriberId
            },
            dataType: 'json',
            success: function(data) {
          
            var modalBody = $('#myModal .modal-body');
            modalBody.empty();
            console.log(data);
           // Get the first item from the array
            var subscriber = data[0];

// Build the name string
          var name = subscriber.LASTNAME + ', ' + subscriber.FIRSTNAME + ',' + subscriber.MIDDLENAME;
          var ID = subscriber.ID;
          // Build the provider and phone number HTML
          var providerHtml = `<td>${subscriber.PROVIDER}</td>`;
          var phoneHtml = `<td>${subscriber.PHONENO}</td>`;

          // Build the table HTML
      // var tableHtml = `
      //   <table class="table table-striped">
      //     <thead>
      //       <tr>
      //         <th>Provider</th>
      //         <th>Phone Number</th>
      //       </tr>
      //     </thead>
      //     <tbody>
      //       <tr>

      //         ${providerHtml}
      //         ${phoneHtml}
      //       </tr>
      //     </tbody>
      //   </table>
      // `;
      
      //       // Build the table HTML
      //   var modalBodyHtml = `
      //   <p style="margin: 0.5rem 0; font-size: 1.2rem; font-weight: bold ; color: black;">
      //     ${name}
      //   </p>
      //   ${tableHtml}
      // `;

      // // Set the modal body HTML
      // modalBody.html(modalBodyHtml);

      // var tableHtml = `
      //   <table class="table table-striped">
      //     <thead>
      //       <tr>
      //         <th>Provider</th>
      //         <th>Phone Number</th>
      //       </tr>
      //     </thead>
      //     <tbody>
      //       <tr>
      //         ${providerHtml}
      //         ${phoneHtml}
      //       </tr>
      //     </tbody>
      //   </table>
      // `;

            // var modalBody = $('#myModal .modal-body');
        //     modalBody.html(`
        // <p style="margin: 0.5rem 0; font-size: 1.2rem; font-weight: bold ; color: black;">
        //   ${data.LASTNAME}, ${data.FIRSTNAME} ${data.MIDDLENAME}
        // </p>
        // <p style="margin: 0.5rem 0; font-size: 1.2rem; font-weight: bold; color: black;">
        //   PROVIDER: ${data.PROVIDER}
        // </p>
        // <p style="margin: 0.5rem 0; font-size: 1.2rem; font-weight: bold; color: black;">
        //   PHONENO: ${data.PHONENO}
        // </p>`);

        // Add an event listener to the table row element
var tableHtml = `
    <p style="margin: 0.5rem 0; font-size: 1.2rem; font-weight: bold; color: black;">
        <span id="idNum">${ID}.</span> ${name}
    </p>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Provider</th>
                <th>Phone Number</th>
            </tr>
        </thead>
        <tbody>
`;

for (var i = 0; i < data.length; i++) {
    var id = data[i].uid;
    var provider = data[i].PROVIDER;
    var phone = data[i].PHONENO;

    if (provider == null || phone == null) {
    continue;
  }
    var rowHtml = `
      <tr class="clickable-row" data-href="/subscriber/${id}" data-id="${id}">
        <td><input type="text" class="form-control form-control-plaintext" readonly value="${id}" style="border: none; background-color: transparent; box-shadow: none;"></td>
      <td><input type="text" class="form-control form-control-plaintext" value="${provider}"></td>
      <td><input type="text" class="form-control form-control-plaintext" value="${phone}"></td>
    </tr>
`;
if (provider == null || provider === '') {
    console.log(`Provider is null or empty for row ${i}`);
  }
  if (phone == null || phone === '') {
    console.log(`Phone is null or empty for row ${i}`);
  }
    tableHtml += rowHtml;
}

// tableHtml += `
//         </tbody>
//     </table>
// `;



    //     var tableHtml = `
    //     <p style="margin: 0.5rem 0; font-size: 1.2rem; font-weight: bold; color: black;">
    //         <span id="idNum">${ID}.</span> ${name}
    //       </p>
    //     <table class="table table-striped">
    //       <thead>
    //         <tr>
    //           <th>Provider</th>
    //           <th>Phone Number</th>
    //         </tr>
    //       </thead>
    //     </tbody>
    //       `;

    //       for (var i = 0; i < data.length; i++) {
    //     var provider = data[i].PROVIDER;
    //     var phone = data[i].PHONENO;
    //     tableHtml += `
    //     <tr onclick="getRowId(${id})">
    //           <td>${provider}</td>
    //           <td>${phone}</td>
    //         </tr>
    //     `;
    // }

    // tableHtml += `
    //       </tbody>
    //     </table>
    // `;
    modalBody.html(tableHtml);


               //  modalBody.html('<p>' + data.LASTNAME  + '<p>,' + data.FIRSTNAME + '<p>PROVIDER: ' + data.PROVIDER + '<p>PHONENO: ' + data.PHONENO + </P>);  )
               // // Update the modal body with the subscriber data
                // var modalBody = $('#myModal.modal-body');
                // modalBody.empty();
                // modalBody.append('<p>First Name: ' + data.FIRSTNAME + '</p>');
                // modalBody.append('<p>Last Name: ' + data.LASTNAME + '</p>');
            },
        });
      });

      // Handle the click event of the table row element


         // Function to handle click event on the "Add Subscriber" button
    $('#addSubscriber').click(function() {
        // Clear the modal body of any previous content

        // Add two text fields to the modal body for "Provider" and "Number"
        $('#myModal .modal-body').append('<div class="form-group"><label for="provider">Provider:</label><input type="text" class="form-control" required id="provider"></div><div class="form-group"><label for="number">Number:</label><input type="text" class="form-control" id="number" required></div>');
        // Show the modal
        $('#myModal').modal('show');
    });
            $("#sidebar").mCustomScrollbar({
               theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
                      $(".search").keyup(function () {
              var searchTerm = $(".search").val();
              var listItem = $('.results tbody').children('tr');
              var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
              
            $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
                  return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
              }
            });
              
                });   
                  });

                  // Get the Edit button element
const editBtn = document.getElementById("Edit");

// Get the Edit modal element
const editModal = document.getElementById("editModal");

// Create a click listener for the Edit button
editBtn.addEventListener("click", () => {
  $('#myModal').modal('hide');
 // location.reload();
  editModal.style.display = "block";
  const idNumElement = document.getElementById('idNum');
  const idNum = Number(idNumElement.textContent.trim().slice(0, -1));
});

// Get the "Save changes" button inside the Edit modal
const saveChangesBtn = document.getElementById("saveChanges");

// Create a click listener for the "Save changes" button
saveChangesBtn.addEventListener("click", () => {
  const idNumElement = document.getElementById('idNum');
  const idNum = Number(idNumElement.textContent.trim().slice(0, -1));
  console.log(idNum);
  editModal.style.display = "none";
  var firstName = $('#editFirstName').val();
  var lastName = $('#editLastName').val();
  var middleName = $('#editEMiddleName').val();
  var address = $('#editAddress').val();
  
    // Disable the form fields again
    $('#editModal input').prop('disabled', true);
 // location.reload();
  // console.log('Changes saved:');
  //   console.log('First name:', $('#editLastName').val());
  //   console.log('Last name:', $('#editFirstName').val());
  //   console.log('Middle name:', $('#editEMiddleName').val());
  //   console.log('Address:', $('#editAddress').val());

    $.ajax({
              url: '/edit-user', // the URL of the server endpoint that will handle the request
              method: 'POST', // the HTTP method to use (e.g. GET, POST, PUT, DELETE)
              data: { // the data to send to the server
                  idNum: idNum,
                  firstName: firstName,
                  lastName: lastName,
                  middleName:  middleName ,
                  address: address

              },
              success: function(response) {
                location.reload();
              },
              error: function(xhr, status, error) {
                  console.error('Error saving data:', error);
              
              }
            });




});

// Get the "Cancel" button inside the Edit modal footer
const cancelBtn = document.querySelector("#editModal .modal-footer button[data-dismiss=modal]");

// Create a click listener for the "Cancel" button
cancelBtn.addEventListener("click", () => {
  // Hide the Edit modal
  editModal.style.display = "none";
  location.reload();
});



          



          const saveButton = document.getElementById("addNumber");
          // add event listener to the button
          saveButton.addEventListener("click", function() {
            const provider = $('#provider').val();
            const idNumElement = document.getElementById('idNum');
            const idNum = Number(idNumElement.textContent.trim().slice(0, -1));
            const number = $('#number').val();
          //   var count =0;
          //   $('table tbody tr').each(function() {
          //   var provider = $(this).find('td:nth-child(1) input').val();
          //   var phone = $(this).find('td:nth-child(2) input').val();
          //   console.log('Provider:', provider, 'Phone:', phone);
           
          // });
      
            
            console.log(typeof idNum);
            console.log(provider);
            console.log(number);
            $.ajax({
             url: '/save-number', // the URL of the server endpoint that will handle the request
              method: 'POST', // the HTTP method to use (e.g. GET, POST, PUT, DELETE)
               data: { // the data to send to the server
                   idNum: idNum,
                  provider: provider,
                     number: number
                },
                 success: function(response) {
                     console.log('Data saved successfully:', response);
                },
                error: function(xhr, status, error) {
                    console.error('Error saving data:', error);
              
                }
             });

           $('#myModal').modal('hide');
           location.reload();

         

});

const saveButton1 = document.getElementById("updateNumber");
          // add event listener to the button
           saveButton1.addEventListener("click", function() {
            const provider = $('#provider').val();
            const idNumElement = document.getElementById('idNum');
            const idNum = Number(idNumElement.textContent.trim().slice(0, -1));
            const number = $('#number').val();
           
            $('table tbody tr').each(function() {
         //   var id6 = $(this).find('td:nth-child(1) input').val();
            var uid = $(this).find('td:nth-child(1) input').val();
            var provider = $(this).find('td:nth-child(2) input').val();
            var phone = $(this).find('td:nth-child(3) input').val();
          

            if (typeof provider !== 'undefined' && provider !== '' && typeof phone !== 'undefined' && phone !== '') {
    
              $.ajax({
              url: '/edit-number', // the URL of the server endpoint that will handle the request
              method: 'POST', // the HTTP method to use (e.g. GET, POST, PUT, DELETE)
              data: { // the data to send to the server
                  idNum: idNum,
                  provider: provider,
                  phone: phone,
                  uid: uid
              },
              success: function(response) {
                  console.log('Data saved successfully:', response);
              },
              error: function(xhr, status, error) {
                  console.error('Error saving data:', error);
              
              }
            });
          }
          });


        
          });
        




const delButton = document.getElementById("delNumber");
          // add event listener to the button
            delButton.addEventListener("click", function() {
            const idNumElement = document.getElementById('idNum');
            const idNum = Number(idNumElement.textContent.trim().slice(0, -1));
           
            console.log(idNum);
            // console.log(provider);
            // console.log(number);
         $.ajax({
              url: '/del-user', // the URL of the server endpoint that will handle the request
              method: 'POST', // the HTTP method to use (e.g. GET, POST, PUT, DELETE)
              data: { // the data to send to the server
                  idNum: idNum
              },
              success: function(response) {
                  console.log('Data saved successfully:', response);
              },
              error: function(xhr, status, error) {
                  console.error('Error saving data:', error);
              
              }
            });
            $('#myModal').modal('hide');
          location.reload();

        //  $('#myModal').modal('hide');
        //   location.reload();

         

});
                                
    </script>
</body>

</html><?php /**PATH C:\laragon\www\Pbook\resources\views/pages/index.blade.php ENDPATH**/ ?>