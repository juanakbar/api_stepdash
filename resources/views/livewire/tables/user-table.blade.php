<div class="table-responsive">
    <div class="card-body border-bottom py-3">
        <div class="d-sm-flex d-inline">
            <div class="btn-group flex-wrap" role="group" aria-label="Basic example">


            </div>
            <div class="ms-auto text-secondary mt-3 mt-sm-0">

                <div class="d-inline-block ms-4">
                    <input type="text" value="" class="form-control form-control-rounded" placeholder="Search…"
                        wire:model.live.debounce.500ms='search'>
                </div>
            </div>
        </div>
    </div>
    <table id="example" class="table table-vcenter table-mobile-md card-table datatable" style="width:100%">
        <thead>
            <tr>
                <th>
                    Nama & Email
                </th>
                <th wire:click="doSort('username')" class="cursor-pointer">
                    User Name
                    @if ($this->sortBy !== 'username')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                        </svg>
                    @elseif($this->sortDir === 'ASC')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l9 0" />
                            <path d="M4 12l7 0" />
                            <path d="M4 18l7 0" />
                            <path d="M15 15l3 3l3 -3" />
                            <path d="M18 6l0 12" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l7 0" />
                            <path d="M4 12l7 0" />
                            <path d="M4 18l9 0" />
                            <path d="M15 9l3 -3l3 3" />
                            <path d="M18 6l0 12" />
                        </svg>
                    @endif
                </th>
                <th wire:click="doSort('alamat')" class="cursor-pointer">
                    Alamat
                    @if ($this->sortBy !== 'alamat')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                        </svg>
                    @elseif($this->sortDir === 'ASC')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l9 0" />
                            <path d="M4 12l7 0" />
                            <path d="M4 18l7 0" />
                            <path d="M15 15l3 3l3 -3" />
                            <path d="M18 6l0 12" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l7 0" />
                            <path d="M4 12l7 0" />
                            <path d="M4 18l9 0" />
                            <path d="M15 9l3 -3l3 3" />
                            <path d="M18 6l0 12" />
                        </svg>
                    @endif
                </th>
                <th wire:click="doSort('telepon')">
                    Nomor Telepon
                    @if ($this->sortBy !== 'telepon')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                        </svg>
                    @elseif($this->sortDir === 'ASC')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l9 0" />
                            <path d="M4 12l7 0" />
                            <path d="M4 18l7 0" />
                            <path d="M15 15l3 3l3 -3" />
                            <path d="M18 6l0 12" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l7 0" />
                            <path d="M4 12l7 0" />
                            <path d="M4 18l9 0" />
                            <path d="M15 9l3 -3l3 3" />
                            <path d="M18 6l0 12" />
                        </svg>
                    @endif
                </th>
                <th wire:click="doSort('created_at')" class="cursor-pointer">
                    Bergabung pada
                    @if ($this->sortBy !== 'created_at')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                        </svg>
                    @elseif($this->sortDir === 'ASC')
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l9 0" />
                            <path d="M4 12l7 0" />
                            <path d="M4 18l7 0" />
                            <path d="M15 15l3 3l3 -3" />
                            <path d="M18 6l0 12" />
                        </svg>
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l7 0" />
                            <path d="M4 12l7 0" />
                            <path d="M4 18l9 0" />
                            <path d="M15 9l3 -3l3 3" />
                            <path d="M18 6l0 12" />
                        </svg>
                    @endif
                </th>
                <th class="w-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td data-label="Nama">
                        <div class="d-flex py-1 align-items-center">
                            <span class="avatar me-2"
                                style="background-image: url({{ str_contains($user->avatar, 'https://') ? $user->avatar : asset('storage/' . $user->avatar) }})"></span>
                            <div class="flex-fill">
                                <div class="font-weight-medium">{{ $user->nama }}</div>
                                <div class="text-muted"><a href="#" class="text-reset">{{ $user->email }}</a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td data-label="User Name">
                        {{ $user->username }}
                    </td>
                    <td data-label="Alamat">
                        {{ $user->alamat }}
                    </td>
                    <td data-label="Telepon">
                        {{ $user->telepon }}
                    </td>
                    <td data-label="Bergabung Pada">
                        {{ Carbon\Carbon::parse($user->created_at)->format('d M Y') }}
                    </td>
                    <td data-label="Actions">
                        <div class="btn-list flex-nowrap">
                            <a data-bs-placement="bottom" title="History Transaksi" class="btn btn-info"
                                href="{{ route('users.show', $user->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 8l0 4l2 2" />
                                    <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
                                </svg>
                            </a>
                            <button data-bs-placement="bottom" title="Edit User" class="btn btn-warning"
                                data-bs-toggle="modal" data-bs-target="#modal-update-user-{{ $user->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg>
                            </button>
                            <button class="btn btn-danger" data-bs-placement="bottom" title="Hapus User"
                                data-bs-toggle="modal" data-bs-target="#modal-delete-user-{{ $user->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </button>
                            @include('users.modal-update')
                            @include('users.modal-delete')

                        </div>
                    </td>
                </tr>
            @empty
                <x-empty-states title="Data Customer Masih Kosong" buttonName="Tambah Customer"
                    actionRoute="#modal-add-user" />
            @endforelse

        </tbody>
    </table>
    <div class="card-footer">
        <div class="d-flex">
            <div class="text-muted">
                Per Page :
                <div class="mx-2 d-inline-block mx-md-0">
                    <input type="text" class="form-control form-control-sm" value="8" size="3"
                        aria-label="Invoices count" wire:model.live.debounce.500ms='perPage'>
                </div>
            </div>
            <div class="ms-auto">
                {{ $users->links('livewire::simple-bootstrap') }}
            </div>
        </div>
    </div>

</div>
