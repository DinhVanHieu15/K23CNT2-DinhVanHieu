<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-group input[type="radio"],
        .form-group input[type="checkbox"] {
            width: auto;
        }
        .error {
            color: red;
            font-size: 12px;
        }
        .success {
            color: green;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <h2>Registration Form</h2>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <div class="form-group">
            <label for="user_id">User ID:</label>
            <input type="text" id="user_id" name="user_id" value="{{ old('user_id') }}">
            @error('user_id') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            @error('password') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            @error('name') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="address">Address (Optional):</label>
            <textarea id="address" name="address">{{ old('address') }}</textarea>
        </div>

        <div class="form-group">
            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="">Please select a country</option>
                <option value="US" {{ old('country') == 'US' ? 'selected' : '' }}>United States</option>
                <option value="VN" {{ old('country') == 'VN' ? 'selected' : '' }}>Vietnam</option>
                <option value="IN" {{ old('country') == 'IN' ? 'selected' : '' }}>India</option>
            </select>
            @error('country') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="zip">ZIP Code:</label>
            <input type="text" id="zip" name="zip" value="{{ old('zip') }}">
            @error('zip') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Sex:</label>
            <input type="radio" id="male" name="sex" value="Male" {{ old('sex') == 'Male' ? 'checked' : '' }}> Male
            <input type="radio" id="female" name="sex" value="Female" {{ old('sex') == 'Female' ? 'checked' : '' }}> Female
            @error('sex') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Language:</label>
            <input type="checkbox" id="english" name="language[]" value="English" {{ is_array(old('language')) && in_array('English', old('language')) ? 'checked' : '' }}> English
            <input type="checkbox" id="nonEnglish" name="language[]" value="Non English" {{ is_array(old('language')) && in_array('Non English', old('language')) ? 'checked' : '' }}> Non English
            @error('language') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="about">About (Optional):</label>
            <textarea id="about" name="about">{{ old('about') }}</textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>