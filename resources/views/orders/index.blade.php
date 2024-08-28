<x-app-layout>
    <x-slot name="header">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Master Management
                </div>
                <h2 class="page-title">
                    Data Orders
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">

            </div>
        </div>
    </x-slot>
    <div class="col-12 mt-3">
        <div class="card">
            <livewire:tables.order-table lazy>
        </div>
    </div>
</x-app-layout>
