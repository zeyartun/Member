<?php
include('header.php');
?>


<div class="container mt-3 p-3">
	<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#NewModal">Create</a>
</div>
<div class="container mt-3 card p-3">
	<table class="table table-bordered table-dark">
	  <thead>
	    <tr>
	      <th scope="col">#ID</th>
	      <th scope="col">User Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Date</th>
	      <th scope="col">Action</th>

	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Zeyar</td>
	      <td>zeyar@gmail.com</td>
	      <td>1.1.2020</td>
	      <td>
	      	<a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#ViewModal">View</a>
	      	<a href="#" class="btn btn-outline-info" data-toggle="modal" data-target="#EditModal">Edit</a>
	      	<a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#DeleteModal">Delete</a>

	      </td>
	    </tr>	      
	  </tbody>
	</table>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="NewModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container mt-1 card p-2">
			<div class="col-12">
				<form>
					<div class="form-group">
					    <label for="exampleInputEmail1">User Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name">	    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">	    
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="Password1" placeholder="Password">
					</div>		
				</form>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="ViewModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">View Member Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container mt-1 card p-2">
			<div class="col-12">
				<form>
					<div class="form-group">
					    <label for="exampleInputEmail1">User Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name">	    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">	    
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="Password1" placeholder="Password">
					</div>		
				</form>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="EditModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Member Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container mt-1 card p-2">
			<div class="col-12">
				<form>
					<div class="form-group">
					    <label for="exampleInputEmail1">User Name</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name">	    
					</div>
					<div class="form-group">
					    <label for="exampleInputEmail1">Email</label>
					    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email">	    
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="Password1" placeholder="Password">
					</div>		
				</form>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="DeleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container mt-1 card p-2">
			<div class="col-12">
				<form>		
					<div class="form-group">
				    <label for="exampleFormControlSelect1">Email select</label>
				    <select class="form-control" id="exampleFormControlSelect1">
				      <option>1</option>
				      <option>2</option>
				      <option>3</option>
				      <option>4</option>
				      <option>5</option>
				    </select>
				  </div>	
				</form>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Delete</button>
      </div>
    </div>
  </div>
</div>
</div>

<?php

include('footer.php');

?>
