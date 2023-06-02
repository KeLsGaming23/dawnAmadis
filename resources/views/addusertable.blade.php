
<x-app-layout>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card card-frame">
            @if(session('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                <span class="alert-text"><strong>Success!</strong> {{ session('success') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <div class="card-body">
              <form action="{{ route('store.user') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <div class="col-lg-6">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role">
                      <option value="Student">Student</option>
                      <option value="Parent">Parent</option>
                      <option value="Teacher">Teacher</option>
                      <option value="Staff">Staff</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row" id="studentFields">
                  <div class="form-group">
                    <div class="col-lg-6">
                      <label for="grade">Grade</label>
                      <select class="form-control" id="grade" name="grade">
                        <option value="Kinder">Kinder</option>
                        <option value="Prep">Prep</option>
                        <option value="Grade 1">Grade 1</option>
                        <option value="Grade 2">Grade 2</option>
                        <option value="Grade 3">Grade 3</option>
                        <option value="Grade 4">Grade 4</option>
                        <option value="Grade 5">Grade 5</option>
                        <option value="Grade 6">Grade 6</option>
                        <option value="Grade 7">Grade 7</option>
                        <option value="Grade 8">Grade 8</option>
                        <option value="Grade 9">Grade 9</option>
                        <option value="Grade 10">Grade 10</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                  <div class="col-lg-3">
                      <label for="first_name">First Name</label>
                      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Juan">
                    </div>
                    <div class="col-lg-3">
                      <label for="middle_name">Middle Name</label>
                      <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name">
                    </div>
                    <div class="col-lg-3">
                      <label for="last_name">Last Name</label>
                      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Dela Cruz">
                    </div>
                    <div class="col-lg-3">
                      <label for="gender">Gender</label>
                      <select class="form-control" id="gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label for="birth_date" class="form-control-label">Birth Date</label>
                        <input class="form-control" type="date" value="2023-01-01" id="birth_date" name="birth_date">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <label for="place_of_birth">Place of Birth</label>
                      <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" placeholder="Juan">
                    </div>
                  </div>
                </div>
                
                <div id="parentFields" style="display: none;">
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <label for="fathers_name">Father's Name</label>
                      <input type="text" class="form-control" id="fathers_name" name="fathers_name" placeholder="Father's Name">
                    </div>
                    <div class="col-lg-6">
                      <label for="occupation">Occupation</label>
                      <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <label for="mothers_name">Mother's Name</label>
                      <input type="text" class="form-control" id="mothers_name" name="mothers_name" placeholder="Mother's Name">
                    </div>
                    <div class="col-lg-6">
                      <label for="occupation">Occupation</label>
                      <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                    </div>
                    <div class="col-lg-6">
                      <label for="contact_no">Contact No.</label>
                      <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact No.">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <span class="col-lg-9"></span>
                  <button type="submit" class="btn bg-gradient-default col-lg-3">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>  
      </div>  
    </div>
    <script>
      // Get the role select element
      const roleSelect = document.getElementById('role');
      // Get the parent fields container
      const parentFields = document.getElementById('parentFields');
      // Get the student fields container
      const studentFields = document.getElementById('studentFields');

      // Function to handle role change
      function handleRoleChange() {
        const selectedRole = roleSelect.value;

        // Show/hide parent fields and student fields based on the selected role
        if (selectedRole === 'Parent') {
          parentFields.style.display = 'block';
          studentFields.style.display = 'none';
        } else {
          parentFields.style.display = 'none';
          studentFields.style.display = 'block';
        }
      }

      // Attach the event listener to the role select element
      roleSelect.addEventListener('change', handleRoleChange);

      // Call the handleRoleChange function initially to set the initial state
      handleRoleChange();
    </script>
</x-app-layout>
