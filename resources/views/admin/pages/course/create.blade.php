
@extends('admin.admin-dashboard')
@section('content')
 


    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4>Add New Course</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name="name" class="form-control" placeholder="Course Name" required>
                                </div>

                                <div class="mb-3">
                                    <select  class="form-control" name="class" required>
                                        <option value="" selected>Choose Class</option>
                                        @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}" {{ old('grade') == $i ? 'selected' : '' }}>Class {{ $i }}</option>
                                        @endfor
                                    </select>
                                    @error('class')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" id="elm1" placeholder="Course Details" ></textarea>
                                </div>
                                <div class="mb-3">
                                    <label>YouTube Video URL</label>
                                    <input type="url" name="video_url" class="form-control" placeholder="https://www.youtube.com/watch?v=example" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Course Content</h4>
                                <div id="courseContentContainer">
                                    <div class="course-content-section">
                                        <div class="mb-3">
                                            <label>Session</label>
                                            <input type="text" name="session[]" class="form-control" placeholder="Session Title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label>Introduction</label>
                                            <textarea name="sessiondesc[]" class="form-control" id="elm2" placeholder="Session Description" ></textarea>
                                        </div>
                                        <button type="button" class="btn btn-danger remove-session" style="display: none;">Remove</button>
                                        <hr>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success" id="addSessionBtn">Add Session</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <button type="submit" class="btn btn-primary">Create Course</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



     <!-- JavaScript to handle dynamic addition/removal of sessions -->
     <script>
        document.addEventListener('DOMContentLoaded', function() {
            let sessionIndex = 1; // Track the session count for dynamic IDs
            const courseContentContainer = document.getElementById('courseContentContainer');
            const addSessionBtn = document.getElementById('addSessionBtn');

            // Function to initialize TinyMCE for the new session textareas
            function initializeEditors() {
                tinymce.init({
                    selector: "textarea[id^='elm']", // Select all textareas with id starting with 'elm'
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
                });
            }

            // Function to manage visibility of remove buttons
            function updateRemoveButtons() {
                const sections = courseContentContainer.querySelectorAll('.course-content-section');
                sections.forEach((section, index) => {
                    const removeBtn = section.querySelector('.remove-session');
                    if (index === 0 && sections.length === 1) {
                        // Hide the remove button for the first session when it's the only one
                        removeBtn.style.display = 'none';
                    } else if (index === 0 && sections.length > 1) {
                        // Hide the remove button for the first session if there are multiple sessions
                        removeBtn.style.display = 'none';
                    } else {
                        // Show remove buttons for dynamically added sections
                        removeBtn.style.display = 'inline';
                    }
                });
            }

            let i = 2; // Start from 2 since the first textarea has id 'elm1'

            // Add new session functionality
            addSessionBtn.addEventListener('click', function() {
                i++; // Increment the index for unique ID

                const newSession = document.createElement('div');
                newSession.classList.add('course-content-section');
                newSession.innerHTML = `
                    <div class="mb-3">
                        <label>Session</label>
                        <input type="text" name="session[]" class="form-control" placeholder="Session Title" required>
                    </div>
                    <div class="mb-3">
                        <label>Introduction</label>
                        <textarea name="sessiondesc[]" class="form-control" id="elm${i}" placeholder="Session Description"></textarea>
                    </div>
                    <button type="button" class="btn btn-danger remove-session">Remove</button>
                    <hr>
                `;
                courseContentContainer.appendChild(newSession);

                // Re-initialize the editor for the new textarea
                initializeEditors();

                // Update remove buttons visibility after adding a new session
                updateRemoveButtons();

                // Add event listener to the remove button with confirmation prompt
                const removeBtn = newSession.querySelector('.remove-session');
                removeBtn.addEventListener('click', function() {
                    if (confirm("Are you sure you want to remove this session?")) {
                        newSession.remove();
                        updateRemoveButtons();
                    }
                });
            });

            // Initial call to manage the remove button for the first session
            updateRemoveButtons();

            // Initialize the editor on page load for the existing textarea
            initializeEditors();
        });
    </script>
    
@endsection

