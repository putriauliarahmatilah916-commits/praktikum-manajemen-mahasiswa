@'
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm rounded-lg">

                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label class="block mb-2">NIM</label>
                        <input type="text" name="nim"
                               value="{{ old('nim') }}"
                               class="w-full border rounded p-2">
                        @error('nim')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Nama</label>
                        <input type="text" name="nama"
                               value="{{ old('nama') }}"
                               class="w-full border rounded p-2">
                        @error('nama')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Program Studi</label>
                        <input type="text" name="program_studi"
                               value="{{ old('program_studi') }}"
                               class="w-full border rounded p-2">
                        @error('program_studi')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Email</label>
                        <input type="email" name="email"
                               value="{{ old('email') }}"
                               class="w-full border rounded p-2">
                        @error('email')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Angkatan</label>
                        <input type="number" name="angkatan"
                               value="{{ old('angkatan') }}"
                               class="w-full border rounded p-2">
                        @error('angkatan')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex gap-2">
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded">
                            Simpan
                        </button>

                        <a href="{{ route('mahasiswa.index') }}"
                           class="px-4 py-2 bg-gray-500 text-white rounded">
                            Kembali
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
'@ | Set-Content resources\views\mahasiswa\create.blade.php