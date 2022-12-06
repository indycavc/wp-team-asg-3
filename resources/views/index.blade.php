<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div ckass="py-4">
                <h2>Tabel Mahasiswa</h2>
                </div>
                <a href="/form" class="btn btn-primary mt-1">
                    + Tambah Data Mahasiswa
                </a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$mahasiswa->nim}}</td>
                            <td>{{$mahasiswa->nama}}</td>
                            <td>{{$mahasiswa->jenis_kelamin == 'P'?'Perempuan':'Laki-laki'}}</td>
                            <td>{{$mahasiswa->jurusan}}</td>
                            <td>{{$mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat}}</td>
                            <td>
                            <a href="/mahasiswas/{{$mahasiswa->id}}/edit" class="btn btn-warning">Edit</a>
                            <a href="{{route('mahasiswas-edit'`)}}"></a>

                            <form action="{{ route('mahasiswa-destroy', ['mahasiswa'=>$mahasiswa->id]) }}" method="POST">
                            @method('DELETE')
@cs
                            <a href="/mahasiswas/{{$mahasiswa->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>
