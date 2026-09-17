<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ route('welcome') }}" method="POST">
        @csrf
        <label for="first_name">First Name:</label><br><br>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label><br><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="gender">Gender</label>
        <br><br>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>

        <label for="nationality">Nationality</label><br><br>
        <select id="nationality" name="nationality" required>
            <option value="indonesia">Indonesia</option>
            <option value="amerika">Amerika</option>
            <option value="inggris">Inggris</option>
        </select>
        <br><br>

        <label for="language">Language Spoken</label><br><br>
        <input type="checkbox" id="bahasa" name="language[]" value="bahasa">
        <label for="bahasa">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="language[]" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" id="other" name="language[]" value="other"> 
        <label for="other">Other</label>
        <br><br>

        <label for="bio">Bio</label><br><br>
        <textarea id="bio" name="bio" rows="10" cols="35"></textarea><br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
