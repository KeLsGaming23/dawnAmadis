<x-app-layout>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="">Current: {{ $currentSchoolYear }}</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">First Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Middle Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Grade Level</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($students as $student)
                    <tr>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{ $student->last_name }}</td>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ $student->first_name }}</td>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ $student->middle_name }}</td>
                        <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">{{ $student->grade }}</td>
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
