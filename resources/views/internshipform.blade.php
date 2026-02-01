<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship Application Portal</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #ff6b35;
            --primary-light: #ff8f5e;
            --secondary: #ffb347;
            --accent: #ffd93d;
            --text-dark: #1a1a2e;
            --text-gray: #6c757d;
            --bg-gradient-start: #fff5f0;
            --bg-gradient-end: #ffe8d6;
            --success: #28a745;
            --error: #dc3545;
            --white: #ffffff;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--white) 50%, var(--bg-gradient-end) 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated background circles */
        .bg-decoration {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        .circle-1 {
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            top: -250px;
            left: -250px;
            animation: float-1 15s infinite ease-in-out;
        }

        .circle-2 {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, var(--secondary), var(--accent));
            bottom: -200px;
            right: -200px;
            animation: float-2 18s infinite ease-in-out;
        }

        .circle-3 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, var(--accent), var(--primary));
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: float-3 20s infinite ease-in-out;
        }

        @keyframes float-1 {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            50% {
                transform: translate(100px, 100px) rotate(180deg);
            }
        }

        @keyframes float-2 {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            50% {
                transform: translate(-100px, -100px) rotate(-180deg);
            }
        }

        @keyframes float-3 {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
            }

            50% {
                transform: translate(-50%, -50%) scale(1.2);
            }
        }

        /* Main container */
        .container {
            position: relative;
            z-index: 1;
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header Section */
        .header {
            text-align: center;
            margin-bottom: 50px;
            animation: fadeInDown 0.8s ease-out;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            letter-spacing: -1px;
        }

        .header p {
            color: var(--text-gray);
            font-size: 1.2rem;
            font-weight: 400;
        }

        /* Form Container */
        .form-wrapper {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 60px;
            box-shadow: 0 30px 80px rgba(255, 107, 53, 0.12);
            border: 1px solid rgba(255, 107, 53, 0.1);
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 35px;
            margin-bottom: 40px;
        }

        .form-group {
            position: relative;
        }

        .form-group.span-2 {
            grid-column: span 2;
        }

        .form-group.span-3 {
            grid-column: span 3;
        }

        label {
            display: block;
            color: var(--text-dark);
            font-weight: 600;
            margin-bottom: 12px;
            font-size: 0.95rem;
            letter-spacing: 0.3px;
        }

        label .required {
            color: var(--primary);
            margin-left: 4px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 16px 20px;
            background: var(--white);
            border: 2px solid #e8e8e8;
            border-radius: 14px;
            color: var(--text-dark);
            font-size: 1rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="tel"]:focus,
        select:focus,
        textarea:focus {
            border-color: var(--primary);
            background: #fffbf8;
            box-shadow: 0 0 0 4px rgba(255, 107, 53, 0.08);
            transform: translateY(-2px);
        }

        input::placeholder,
        textarea::placeholder {
            color: #adb5bd;
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='14' height='8' viewBox='0 0 14 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1L7 7L13 1' stroke='%23ff6b35' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 20px center;
            padding-right: 50px;
        }

        select option {
            background: var(--white);
            color: var(--text-dark);
            padding: 10px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* File Upload Styling */
        .file-upload-wrapper {
            position: relative;
        }

        .file-upload-input {
            display: none;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 20px;
            background: linear-gradient(135deg, rgba(255, 107, 53, 0.05), rgba(255, 179, 71, 0.05));
            border: 2px dashed var(--primary);
            border-radius: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: var(--text-gray);
            font-weight: 500;
        }

        .file-upload-label:hover {
            background: linear-gradient(135deg, rgba(255, 107, 53, 0.1), rgba(255, 179, 71, 0.1));
            border-color: var(--primary-light);
        }

        .file-upload-label.has-file {
            background: linear-gradient(135deg, rgba(40, 167, 69, 0.05), rgba(40, 167, 69, 0.1));
            border-color: var(--success);
            color: var(--success);
            border-style: solid;
        }

        .file-icon {
            font-size: 1.5rem;
        }

        .file-name {
            margin-top: 10px;
            color: var(--text-gray);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Buttons */
        .button-group {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 50px;
        }

        .btn {
            padding: 18px 50px;
            border: none;
            border-radius: 14px;
            font-size: 1.1rem;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.5s, height 0.5s;
        }

        .btn:hover::before {
            width: 400px;
            height: 400px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 107, 53, 0.4);
        }

        .btn-primary:active {
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-secondary:hover {
            background: rgba(255, 107, 53, 0.05);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.15);
        }

        .btn span {
            position: relative;
            z-index: 1;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .form-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .form-group.span-3 {
                grid-column: span 2;
            }
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px 15px;
            }

            .header h1 {
                font-size: 2.5rem;
            }

            .header p {
                font-size: 1rem;
            }

            .form-wrapper {
                padding: 40px 25px;
                border-radius: 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .form-group.span-2,
            .form-group.span-3 {
                grid-column: span 1;
            }

            .button-group {
                flex-direction: column-reverse;
                gap: 15px;
            }

            .btn {
                width: 100%;
            }
        }

        /* Loading Animation */
        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        .loading {
            animation: pulse 1.5s ease-in-out infinite;
        }
    </style>
</head>

<body>
    <div class="bg-decoration">
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
    </div>

    <div class="container">
        <div class="header">
            <h1>Internship Application</h1>
            <p>Take the first step towards your future career</p>
        </div>

        <div class="form-wrapper">
            {{-- Success Message --}}
            @if (session('success'))
                <div
                    style="
            background:#d4edda;
            color:#155724;
            padding:15px;
            border-radius:8px;
            margin-bottom:20px;
            border:1px solid #c3e6cb;
            font-weight:500;">
                    {{ session('success') }}
                </div>
            @endif
            <form id="internshipForm" method="POST" action="{{ route('internshipform.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="form-grid">
                    <!-- Full Name -->
                    <div class="form-group">
                        <label for="fullName">Full Name <span class="required">*</span></label>
                        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name"
                            required>
                    </div>

                    <!-- Email ID -->
                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" id="email" name="email" placeholder="your.email@example.com"
                            required>
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone">Phone Number <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" placeholder="+91 XXXXX XXXXX" required>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password">Password <span class="required">*</span></label>
                        <input type="password" id="password" name="password" placeholder="Create a strong password"
                            required>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password <span class="required">*</span></label>
                        <input type="password" id="confirmPassword" name="confirmPassword"
                            placeholder="Re-enter your password" required>
                    </div>

                    <!-- District -->
                    <div class="form-group">
                        <label for="district">District <span class="required">*</span></label>
                        <select id="district" name="district" required>
                            <option value="">Select your district</option>
                            @foreach ($districts as $dist)
                                <option value="{{ $dist->DSM_DSCD }}">
                                    {{ $dist->DSM_DSNM }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Block -->
                    <div class="form-group">
                        <label for="block">Block / Locality <span class="required">*</span></label>
                        <select id="block" name="block" required>
                            <option value="">Select your block</option>
                        </select>
                    </div>

                    <!-- College/University -->
                    <div class="form-group">
                        <label for="college">College / University <span class="required">*</span></label>
                        <input type="text" id="college" name="college" placeholder="Enter your institution name"
                            required>
                    </div>

                    <!-- Education Status -->
                    <div class="form-group">
                        <label for="educationStatus">Education Status <span class="required">*</span></label>
                        <select id="educationStatus" name="educationStatus" required>
                            <option value="">Select your current status</option>
                            <option value="pursuing">Currently Pursuing</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                    <!-- Address -->
                    <div class="form-group span-3">
                        <label for="address">Complete Address <span class="required">*</span></label>
                        <textarea id="address" name="address" rows="3" placeholder="Enter your full address" required></textarea>
                    </div>

                    <!-- Resume Upload -->
                    <div class="form-group span-3">
                        <label for="resume">Resume / CV <span class="required">*</span></label>
                        <div class="file-upload-wrapper">
                            <input type="file" id="resume" name="resume" class="file-upload-input"
                                accept=".pdf,.doc,.docx" required>
                            <label for="resume" class="file-upload-label" id="fileLabel">
                                <span class="file-icon">📎</span>
                                <span>Click to upload your resume (PDF, DOC, DOCX)</span>
                            </label>
                            <div class="file-name" id="fileName"></div>
                        </div>
                    </div>
                </div>

                <div class="button-group">
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">
                        <span>← Back</span>
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <span>Submit Application</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $('#district').on('change', function() {
            let districtCode = $(this).val();
            $('#block').html('<option value="">Loading...</option>');

            if (districtCode !== '') {
                $.ajax({
                    url: '/get-blocks/' + districtCode,
                    type: 'GET',
                    success: function(data) {
                        let options = '<option value="">Select your block</option>';

                        if (data.length === 0) {
                            options += '<option value="">No blocks found</option>';
                        } else {
                            data.forEach(function(block) {
                                options += `<option value="${block.BLM_BLCD}">
                                        ${block.BLM_BLNM}
                                    </option>`;
                            });
                        }

                        $('#block').html(options);
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert('Error loading blocks');
                        $('#block').html('<option value="">Select your block</option>');
                    }
                });
            } else {
                $('#block').html('<option value="">Select your block</option>');
            }
        });
    </script>


    <script>
        // File upload handler
        const fileInput = document.getElementById('resume');
        const fileLabel = document.getElementById('fileLabel');
        const fileName = document.getElementById('fileName');

        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                fileLabel.classList.add('has-file');
                fileLabel.innerHTML = '<span class="file-icon">✓</span><span>File Selected Successfully</span>';
                fileName.innerHTML =
                    `<span style="color: var(--success);">✓</span> ${file.name} (${(file.size / 1024).toFixed(2)} KB)`;
            } else {
                fileLabel.classList.remove('has-file');
                fileLabel.innerHTML =
                    '<span class="file-icon">📎</span><span>Click to upload your resume (PDF, DOC, DOCX)</span>';
                fileName.textContent = '';
            }
        });

        // Form validation
        const form = document.getElementById('internshipForm');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirmPassword');

        form.addEventListener('submit', function(e) {

            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity('Passwords do not match');
                confirmPassword.reportValidity();
                confirmPassword.focus();
                e.preventDefault();
                return;
            }

        });

        // Real-time password match indicator
        confirmPassword.addEventListener('input', function() {
            if (password.value !== confirmPassword.value && confirmPassword.value !== '') {
                confirmPassword.style.borderColor = 'var(--error)';
            } else if (password.value === confirmPassword.value && confirmPassword.value !== '') {
                confirmPassword.style.borderColor = 'var(--success)';
            } else {
                confirmPassword.style.borderColor = '#e8e8e8';
            }
        });

        // Smooth scroll to invalid field
        document.querySelectorAll('input, select, textarea').forEach(element => {
            element.addEventListener('invalid', function(e) {
                e.preventDefault();
                this.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
                this.focus();
            });
        });
    </script>
</body>

</html>
