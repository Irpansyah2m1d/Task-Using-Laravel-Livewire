<div class="table-responsive">
    <h1>Data Contact Mahasiswa</h1>
    {{-- @dd($contacts); --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">No Hp</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @if ($contacts->count() > 0)

                @foreach ($contacts as $contact )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $contact->nama }}</td>
                        <td>{{ $contact->jurusan }}</td>
                        <td>{{ $contact->no_hp }}</td>
                        <td>
                            <a href="" class="badge bg-danger">Hapus</a> | <a href="" class="badge bg-warning">Edit</a>
                        </td>
                    </tr> 
                @endforeach
            @else
            <tr>
                <td colspan="6" class="text-danger text-center fw-bold">Data Tidak Ditemukan!</td>
            </tr>
            @endif
        </tbody>
      </table>   
</div>
