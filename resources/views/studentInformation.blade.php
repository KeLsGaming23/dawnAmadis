<x-app-layout>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="">{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}</h6>
              <p>Grade: {{ $student->grade }}</p>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              @if ($student->child && $student->child->parent)
                  <h1>Parent Details</h1>
                  <h2>Father's Name: {{ $student->child->parent->fathers_name }}</h2>
                  <h2>Mother's Name: {{ $student->child->parent->mothers_name }}</h2>
              @else
                  <p>No parent information available</p>
              @endif
            </div>  
          </div>

        </div>  
      </div>  
    </div>  
</x-app-layout>
