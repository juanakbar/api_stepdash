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
                    ID Order
                </th>
                <th wire:click="doSort('user->nama')" class="cursor-pointer">
                    Pelanggan
                    @if ($this->sortBy !== 'user->nama')
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
                    Driver / Mekanik
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
                <th wire:click="doSort('pickup')">
                    Pick Up
                    @if ($this->sortBy !== 'pickup')
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
                <th wire:click="doSort('dropoff')">
                    Drop Off
                    @if ($this->sortBy !== 'dropoff')
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
                <th wire:click="doSort('jasa')">
                    Jasa yang dipilih
                    @if ($this->sortBy !== 'jasa')
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
                    Dibuat pada
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
            @forelse ($orders as $order)
                <tr>

                    <td data-label="ID">
                        {{ $order->id }}
                    </td>
                    <td data-label="user->nama">
                        {{ $order->user->nama }}
                    </td>
                    <td data-label="driver">
                        {{ $order->driver->nama }}
                    </td>
                    <td data-label="pickup">
                        {{ $order->pickup }}
                    </td>
                    <td data-label="dropoff">
                        {{ $order->dropoff }}
                    </td>
                    <td data-label="dropoff">
                        {{ $order->layanan->nama_layanan }}
                    </td>

                    <td data-label="Dibuat Pada">
                        {{ Carbon\Carbon::parse($order->created_at)->format('d M Y') }}
                    </td>
                    @if ($order->id_layanan == 2)
                        <td data-label="Actions">
                            <div class="btn-list flex-nowrap">
                                <button data-bs-placement="bottom" title="Edit order" class="btn btn-info"
                                    data-bs-toggle="modal" data-bs-target="#modal-update-order-{{ $order->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" width="18"
                                        height="18" viewBox="0 -2 32 32" version="1.1">

                                        <title>print</title>
                                        <desc>Created with Sketch Beta.</desc>
                                        <defs>

                                        </defs>
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd" sketch:type="MSPage">
                                            <g id="Icon-Set" sketch:type="MSLayerGroup"
                                                transform="translate(-100.000000, -205.000000)" fill="#000000">
                                                <path
                                                    d="M130,226 C130,227.104 129.104,228 128,228 L125.858,228 C125.413,226.278 123.862,225 122,225 L110,225 C108.138,225 106.587,226.278 106.142,228 L104,228 C102.896,228 102,227.104 102,226 L102,224 C102,222.896 102.896,222 104,222 L128,222 C129.104,222 130,222.896 130,224 L130,226 L130,226 Z M122,231 L110,231 C108.896,231 108,230.104 108,229 C108,227.896 108.896,227 110,227 L122,227 C123.104,227 124,227.896 124,229 C124,230.104 123.104,231 122,231 L122,231 Z M108,209 C108,207.896 108.896,207 110,207 L122,207 C123.104,207 124,207.896 124,209 L124,220 L108,220 L108,209 L108,209 Z M128,220 L126,220 L126,209 C126,206.791 124.209,205 122,205 L110,205 C107.791,205 106,206.791 106,209 L106,220 L104,220 C101.791,220 100,221.791 100,224 L100,226 C100,228.209 101.791,230 104,230 L106.142,230 C106.587,231.723 108.138,233 110,233 L122,233 C123.862,233 125.413,231.723 125.858,230 L128,230 C130.209,230 132,228.209 132,226 L132,224 C132,221.791 130.209,220 128,220 L128,220 Z"
                                                    id="print" sketch:type="MSShapeGroup">

                                                </path>
                                            </g>
                                        </g>
                                    </svg>

                                </button>
                            </div>
                        </td>
                    @endif
                </tr>
            @empty
                <x-empty-states title="Data order Masih Kosong" buttonName="Tambah order"
                    actionRoute="#modal-add-order" />
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
                {{ $orders->links('livewire::simple-bootstrap') }}
            </div>
        </div>
    </div>

</div>
