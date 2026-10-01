@'
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm rounded-lg">

                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block mb-2">NIM</label>
                        <input type="text" name="nim"
                               value="{{ old('nim', $mahasiswa->nim) }}"
                               class="w-full border rounded p-2">
                        @error('nim')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Nama</label>
                        <input type="text" name="nama"
                               value="{{ old('nama', $mahasiswa->nama) }}"
                               class="w-full border rounded p-2">
                        @error('nama')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Program Studi</label>
                        <input type="text" name="program_studi"
                               value="{{ old('program_studi', $mahasiswa->program_studi) }}"
                               class="w-full border rounded p-2">
                        @error('program_studi')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Email</label>
                        <input type="email" name="email"
                               value="{{ old('email', $mahasiswa->email) }}"
                               class="w-full border rounded p-2">
                        @error('email')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2">Angkatan</label>
                        <input type="number" name="angkatan"
                               value="{{ old('angkatan', $mahasiswa->angkatan) }}"
                               class="w-full border rounded p-2">
                        @error('angkatan')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex gap-2">
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded">
                            Update
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
