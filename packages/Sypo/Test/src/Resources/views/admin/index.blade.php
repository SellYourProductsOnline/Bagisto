<x-admin::layouts>

    <!-- Title of the page -->
    <x-slot:title>
        Package Test
    </x-slot>

    <!-- Page Content -->
    <div class="page-content">
        <h1>Package Test</h1>
        <x-admin::datagrid src="{{ route('admin.test.index') }}"></x-admin::datagrid>
    </div>

</x-admin::layouts>