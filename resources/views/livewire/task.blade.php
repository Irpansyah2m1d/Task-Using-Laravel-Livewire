<div>
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h3 class="text-dark fw-bold mb-0">Task Kamu</h3>
        <a wire:navigate href="{{ route('buat.task') }}" class="btn btn-primary">Tambah Task Baru</a>
    </div>
    @if ($tasks->count() > 0)
        @foreach ($tasks as $item )        
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h5 class="text-dark fw-semibold">{{ $item->title }}</h5>
                            <p class="text-secondary fs-7">Dibuat pada {{ $item->created_at }}</p>

                            <div class="d-flex align-items-center gap-3">
                                <p class="align-items-center gap-1 mb-0 fs-7">
                                    <i class='bx bx-directions'></i> {{ $item->priority }}
                                </p>
                                <p class="align-items-center gap-1 mb-0 fs-7">
                                    <i class='bx bx-bookmark-alt'></i> {{ $item->status }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-end gap-2">
                                <button wire:click="deleted({{ $item->id }})" onclick="return confirm('Apakah yakin data mau dihapus?')" class="btn btn-sm btn-outline-danger">Hapus</button>
                                @if ($item->status === "Completed")
                                    <span class="fw-bold text-success">Completed</span> 
                                @else
                                    <button wire:click="completed({{ $item->id }})" class="btn btn-sm btn-primary">Complete</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    {{-- <div class="card mb-2">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="text-dark fw-semibold">Ngoding with Yunus Almeida</h5>
                    <p class="text-secondary fs-7">Dibuat pada 15 April 2024</p>

                    <div class="d-flex align-items-center gap-3">
                        <p class="align-items-center gap-1 mb-0 fs-7">
                            <i class='bx bx-directions'></i> Medium
                        </p>
                        <p class="align-items-center gap-1 mb-0 fs-7 text-success">
                            <i class='bx bx-bookmark-alt'></i> In Progress
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-end gap-2">
                        <button class="btn btn-sm btn-outline-danger">Hapus</button>
                        <button class="btn btn-sm btn-primary">Complete</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @else
    <!-- <p class="text-center text-secondary">Oops! Task masih belum ada</p> -->
    @endif
</div>
