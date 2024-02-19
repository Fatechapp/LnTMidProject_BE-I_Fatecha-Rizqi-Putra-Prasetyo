<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!--CSS-->
    <link rel="stylesheet" href="{{asset('style/editKaryawan.css')}}">

    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="/dashboard/edit/{{$karyawans ->id}}" method="post" class="content">
            @csrf
            <h1>Edit Data <span>Karyawan</span></h1>
            <div class="input-group mb-3">
                <input name="nama" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$karyawans -> nama}}" autofocus required oninput="updateBarometerNama(this.value)">
            </div>
            <p id="barometer-nama" class="barometer">Nama karyawan berisi 5 - 20 karakter</p>
            <div class="input-group mb-3">
                <input name="umur" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$karyawans -> umur}}" required oninput="updateBarometerUmur(this.value)">
            </div>
            <p id="barometer-umur" class="barometer">Umur karyawan lebih besar dari 20 tahun</p>
            <div class="input-group mb-3">
                <input name="alamat" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$karyawans -> alamat}}" required oninput="updateBarometerAlamat(this.value)">
            </div>
            <p id="barometer-alamat" class="barometer">Alamat karyawan 10 - 40 karakter</p>
            <div class="input-group mb-3">
                <input name="noTelp" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$karyawans -> noTelp}}" required oninput="updateBarometerNoTelp(this.value)">
            </div>
            <p id="barometer-notelp" class="barometer">9 - 12 karakter, dimulai dari 08</p>
            <button type="submit" class="btn btn-submit">Update</button>        
        </form>
    </div>

    <!--BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!--JAVASCRIPT-->
    <script>
        function updateBarometerNama(value) {
            var barometerElement = document.getElementById('barometer-nama');
            var minLength = 5;
            var maxLength = 20;

            if (value.length < minLength || value.length > maxLength) {
                barometerElement.classList.remove('valid');
                barometerElement.classList.add('barometer');
            } else {
                barometerElement.classList.remove('barometer');
                barometerElement.classList.add('valid');
            }
        }
        function updateBarometerUmur(value) {
            var barometerElement = document.getElementById('barometer-umur');
            if (value < 20) {
                barometerElement.classList.remove('valid');
                barometerElement.classList.add('barometer');
            } else {
                barometerElement.classList.remove('barometer');
                barometerElement.classList.add('valid');
            }
        }
        function updateBarometerAlamat(value) {
            var barometerElement = document.getElementById('barometer-alamat');
            var minLength = 10;
            var maxLength = 40;

            if (value.length < minLength || value.length > maxLength) {
                barometerElement.classList.remove('valid');
                barometerElement.classList.add('barometer');
            } else {
                barometerElement.classList.remove('barometer');
                barometerElement.classList.add('valid');
            }
        }
        function updateBarometerNoTelp(value) {
            var barometerElement = document.getElementById('barometer-notelp');
            var minLength = 9;
            var maxLength = 12;

            if (value.length < minLength || value.length > maxLength && value.startsWith('08')) {
                barometerElement.classList.remove('valid');
                barometerElement.classList.add('barometer');
            } else {
                barometerElement.classList.remove('barometer');
                barometerElement.classList.add('valid');
            }
        }
    </script>
</body>
</html>
