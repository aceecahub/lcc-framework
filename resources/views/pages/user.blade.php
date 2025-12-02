<x-app-layout>
    <section class="ml-10 text-white">
        @can('admin')
        <button class="border rounded p-2 my-3 bg-blue-500 hover:bg-blue-700">Tambah data</button>
        @endcan
        <table class="mt-6">
            <thead>
                <tr>
                    <th class="border">No</th>
                    <th class="border">Nama</th>
                    <th class="border">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $items)
                    <tr>
                        <td class="border">{{ $loop->iteration }}</td>
                        <td class="border">{{ $items->name }}</td>
                        <td class="border">{{ $items->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-app-layout>
