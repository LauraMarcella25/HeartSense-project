<!DOCTYPE html>
<html>
<head>
    <title>Heart Attack Prediction</title>
</head>
<body>

<h2>Heart Attack Prediction Form</h2>

<form action="{{ route('predict.submit') }}" method="POST">
    @csrf

    <label>Age:</label>
    <input type="number" name="age" required><br><br>

    <label>Sex (1=Male,0=Female):</label>
    <input type="number" name="sex" required><br><br>

    <label>Cholesterol:</label>
    <input type="number" name="chol" required><br><br>

    <label>Blood Pressure:</label>
    <input type="number" name="trestbps" required><br><br>

    <button type="submit">Predict Now</button>
</form>

</body>
</html>
