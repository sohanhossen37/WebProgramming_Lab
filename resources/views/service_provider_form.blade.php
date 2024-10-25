<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Service Provider</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Add jQuery for AJAX -->
</head>
<body class="bg-gray-100">

    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Register as a Service Provider</h1>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Start -->
        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <!-- Select Service -->
            <div class="mb-4">
                <label for="service" class="block text-gray-700">Select Service</label>
                <select id="service" name="service" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="">Select Service</option>
                    <option value="Plumbing">Plumbing</option>
                    <option value="Electrician">Electrician</option>
                    <option value="Carpentry">Carpentry</option>
                    <option value="Cleaning">Cleaning</option>
                    <option value="Painting">Painting</option>
                    <option value="AC Repair">AC Repair</option>
                    <!-- Add more service types as needed -->
                </select>
            </div>

          <!-- Division -->
            <!-- Division -->
            <div class="mb-4">
                <label for="division" class="block text-gray-700">Division</label>
                <select id="division" name="division" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="">Select Division</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}">{{ $division->division }}</option>
                    @endforeach
                </select>
            </div>

            <!-- District -->
            <div class="mb-4">
                <label for="district" class="block text-gray-700">District</label>
                <select id="district" name="district" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="">Select District</option>
                </select>
            </div>

            <!-- Upazila -->
            <div class="mb-4">
                <label for="upazila" class="block text-gray-700">Upazila</label>
                <select id="upazila" name="upazila_id" class="w-full px-4 py-2 border rounded-lg" required>
                    <option value="">Select Upazila</option>
                </select>
            </div>


            <!-- NID -->
            <div class="mb-4">
                <label for="nid" class="block text-gray-700">NID</label>
                <input type="text" id="nid" name="nid" class="w-full px-4 py-2 border rounded-lg" required minlength="10" maxlength="17">
            </div>

            <!-- Experience (Years) -->
            <div class="mb-4">
                <label for="experience_years" class="block text-gray-700">Experience (Years)</label>
                <input type="number" id="experience_years" name="experience_years" class="w-full px-4 py-2 border rounded-lg" required min="1">
            </div>

            <!-- Biography -->
            <div class="mb-4">
                <label for="biography" class="block text-gray-700">Short Biography</label>
                <textarea id="biography" name="biography" class="w-full px-4 py-2 border rounded-lg" rows="5" required></textarea>
            </div>

            <!-- Upload Picture -->
            <div class="mb-4">
                <label for="profile_picture" class="block text-gray-700">Upload Profile Picture</label>
                <input type="file" id="profile_picture" name="profile_picture" class="w-full px-4 py-2 border rounded-lg" required accept="image/*">
            </div>

            <!-- Submit Button -->
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Register</button>
            </div>
        </form>
        <!-- Form End -->
    </div>

<!-- javascript for controlling location -->
<script>
        $(document).ready(function() {
            // Fetch districts based on division selection
            $('#division').change(function() {
                var divisionId = $(this).val();
                if (divisionId) {
                    $.ajax({
                        url: '/get-districts/' + divisionId,
                        type: 'GET',
                        success: function(response) {
                            $('#district').empty().append('<option value="">Select District</option>');
                            $.each(response.districts, function(key, district) {
                                $('#district').append('<option value="' + district.id + '">' + district.district + '</option>');
                            });
                        }
                    });
                } else {
                    $('#district').empty().append('<option value="">Select District</option>');
                }
            });

            // Fetch upazilas based on district selection
            $('#district').change(function() {
                var districtId = $(this).val();
                if (districtId) {
                    $.ajax({
                        url: '/get-upazilas/' + districtId,
                        type: 'GET',
                        success: function(response) {
                            $('#upazila').empty().append('<option value="">Select Upazila</option>');
                            $.each(response.upazilas, function(key, upazila) {
                                $('#upazila').append('<option value="' + upazila.id + '">' + upazila.upazila + '</option>');
                            });
                        }
                    });
                } else {
                    $('#upazila').empty().append('<option value="">Select Upazila</option>');
                }
            });
        });
    </script>

</body>
</html>