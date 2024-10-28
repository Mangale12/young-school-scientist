<x-guest-layout>
    <style>
        /* Container styling */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Label styling */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        /* Input styling */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input:focus,
        select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.2);
        }

        /* Fieldset styling */
        #studentFields, #teacherFields {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #fff;
        }

        /* Button styling */
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive styling */
        @media (max-width: 600px) {
            form {
                padding: 10px;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="date"],
            select {
                padding: 8px;
            }

            button {
                padding: 8px;
            }
        }
    </style>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    
        <!-- Name -->
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" required autofocus>
        </div>
    
        <!-- Email -->
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required>
        </div>
    
        <!-- Role Selection -->
        <div>
            <label for="role">Role</label>
            <select id="role" name="role" required>
                <option value="student" selected>Student</option>
                <option value="teacher">Teacher</option>
            </select>
        </div>
    
        <!-- Student Fields -->
        <div id="studentFields">
            <input type="text" name="student_id" placeholder="Student ID">
            <input type="text" name="school_name" placeholder="School Name">
            <input type="text" name="grade" placeholder="Grade">
            <input type="text" name="section" placeholder="Section">
            <input type="date" name="date_of_birth" placeholder="Date of Birth">
            <input type="text" name="address" placeholder="Address">
            <input type="text" name="parents_phone_number" placeholder="Parents Phone Number">
            <input type="text" name="parents_email" placeholder="Parents Email">
        </div>
    
        <!-- Teacher Fields -->
        <div id="teacherFields" style="display: none;">
            <input type="text" name="teacher_id" placeholder="Teacher ID">
            <input type="text" name="subject_expert" placeholder="Subject Expert">
            <input type="text" name="phone_number" placeholder="Phone Number">
        </div>
    
        <!-- Password -->
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>
    
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>
    
        <button type="submit">Register</button>
    </form>
    
    <script>
        // Function to handle the visibility of form fields
        function toggleFields() {
            const role = document.getElementById('role').value;
            document.getElementById('studentFields').style.display = role === 'student' ? 'block' : 'none';
            document.getElementById('teacherFields').style.display = role === 'teacher' ? 'block' : 'none';
        }

        // Show student fields by default when the page loads
        window.onload = toggleFields;

        // Add event listener for role change
        document.getElementById('role').addEventListener('change', toggleFields);
    </script>
    
</x-guest-layout>
