<x-app-layout>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
              @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                  <span class="alert-text"><strong>Success!</strong> {{ session('success') }}</span>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
            <div class="card-header pb-0">
              <h6 class="">Current: {{ $currentSchoolYear }}</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Student Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Grade Level</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Middle Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($students as $student)
                    <tr>
                        <td style="cursor: pointer;">
                          <a href="{{ route('student.show', ['id' => $student->id]) }}" style="text-decoration: none;">
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="{{ $student->profile_picture }}" class="avatar avatar-sm me-3" alt="user1">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $student->last_name }}, {{ $student->first_name }}</h6>
                                @if ($student->user)
                                    <p class="text-xs text-secondary mb-0">{{ $student->user->email }}</p>
                                @else
                                    <p class="text-xs text-secondary mb-0">No email available</p>
                                @endif
                              </div>
                            </div>
                          </a>
                        </td>
                        <td>
                        @if ($student->user)
                            <p class="text-xs font-weight-bold mb-0">{{ $student->user->role ?? 'No role available' }}</p>
                            <p class="text-xs text-secondary mb-0">{{ $student->grade }}</p>
                        @else
                            <p class="text-xs text-secondary mb-0">Not Register Yet</p>
                        @endif
                        </td>                        
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ $student->middle_name }}</td>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                          <form action="{{ route('delete-student-information', ['userId' => $student->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger">Delete</button>
                          </form>
                        </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>  
            </div>  
          </div>

        </div>  
      </div>  
    </div>  
</x-app-layout>
