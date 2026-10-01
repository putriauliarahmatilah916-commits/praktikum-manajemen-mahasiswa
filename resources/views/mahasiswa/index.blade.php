@'
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(auth()->user()->role === 'admin')
                <a href="{{ route('mahasiswa.create') }}"
                   class="inline-block mb-4 px-4 py-2 bg-blue-600 text-white rounded">
                    + Tambah Mahasiswa
                </a>
            @endif

            <div class="bg-white shadow-sm rounded-lg p-6 overflow-x-auto">
                <table class="w-full border-collapse border">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-2">No</th>
                            <th class="border p-2">NIM</th>
                            <th class="border p-2">Nama</th>
                            <th class="border p-2">Program Studi</th>
                            <th class="border p-2">Email</th>
                            <th class="border p-2">Angkatan</th>

                            @if(auth()->user()->role === 'admin')
                                <th class="border p-2">Aksi</th>
                            @endif
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($mahasiswa as $item)
                            <tr>
                                <td class="border p-2">{{ $loop->iteration }}</td>
                                <td class="border p-2">{{ $item->nim }}</td>
                                <td class="border p-2">{{ $item->nama }}</td>
                                <td class="border p-2">{{ $item->program_studi }}</td>
                                <td class="border p-2">{{ $item->email }}</td>
                                <td class="border p-2">{{ $item->angkatan }}</td>

                                @if(auth()->user()->role === 'admin')
                                    <td class="border p-2">
                                        <a href="{{ route('mahasiswa.edit', $item->id) }}"
                                           class="px-3 py-1 bg-yellow-500 text-white rounded">
                                            Edit
                                        </a>

                                        <form action="{{ route('mahasiswa.destroy', $item->id) }}"
                                              method="POST"
                                              class="inline">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    onclick="return confirm('Yakin ingin menghapus data ini?')"
                                                    class="px-3 py-1 bg-red-600 text-white rounded">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="border p-4 text-center">
                                    Belum ada data mahasiswa.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
'@ | Set-Content resources\views\mahasiswa\index.blade.php