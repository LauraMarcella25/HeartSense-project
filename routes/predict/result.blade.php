<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Hasil Prediksi - HeartSense</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <div class="card mx-auto" style="max-width:720px;">
    <div class="card-body">
      <h3 class="card-title text-center text-danger">Hasil Prediksi</h3>

      <h5>Input</h5>
      <ul>
        @foreach($input as $k => $v)
          <li><strong>{{ ucfirst(str_replace('_',' ',$k)) }}:</strong> {{ $v }}</li>
        @endforeach
      </ul>

      <h5>Prediction API response</h5>
      <pre class="bg-light p-3 border">{{ json_encode($result, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE) }}</pre>

      <div class="text-center mt-3">
        <a href="{{ route('predict.form') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>
