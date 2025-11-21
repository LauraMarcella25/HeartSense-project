<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>HeartSense - Prediksi Serangan Jantung</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <div class="card mx-auto" style="max-width:720px;">
    <div class="card-body">
      <h3 class="card-title text-center text-danger">HeartSense — Prediksi Serangan Jantung</h3>

      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <form method="POST" action="{{ route('predict.submit') }}">
        @csrf

        <div class="mb-3">
          <label class="form-label">Umur</label>
          <input type="number" name="age" class="form-control" value="{{ old('age') }}" required>
          @error('age') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Jenis Kelamin</label>
          <select name="gender" class="form-select" required>
            <option value="">-- Pilih --</option>
            <option value="1" {{ old('gender')=='1' ? 'selected':'' }}>Laki-laki</option>
            <option value="0" {{ old('gender')=='0' ? 'selected':'' }}>Perempuan</option>
          </select>
          @error('gender') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Tekanan Darah Sistolik (mmHg)</label>
            <input type="number" step="0.1" name="blood_pressure_systolic" class="form-control" value="{{ old('blood_pressure_systolic') }}" required>
            @error('blood_pressure_systolic') <div class="text-danger small">{{ $message }}</div> @enderror
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Tekanan Darah Diastolik (mmHg)</label>
            <input type="number" step="0.1" name="blood_pressure_diastolic" class="form-control" value="{{ old('blood_pressure_diastolic') }}" required>
            @error('blood_pressure_diastolic') <div class="text-danger small">{{ $message }}</div> @enderror
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Kadar Kolesterol (mg/dL)</label>
          <input type="number" step="0.1" name="cholesterol" class="form-control" value="{{ old('cholesterol') }}" required>
          @error('cholesterol') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
          <label class="form-label">Status Merokok</label>
          <select name="smoking_status" class="form-select" required>
            <option value="">-- Pilih --</option>
            <option value="1" {{ old('smoking_status')=='1' ? 'selected':'' }}>Perokok</option>
            <option value="0" {{ old('smoking_status')=='0' ? 'selected':'' }}>Tidak</option>
          </select>
          @error('smoking_status') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <button class="btn btn-danger w-100" type="submit">Prediksi Sekarang</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
